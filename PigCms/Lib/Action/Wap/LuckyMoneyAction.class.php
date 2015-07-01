<?php
class LuckyMoneyAction extends BaseAction {
	public function index() {
		$r = $this->sendRandBonus(100, 40, 1);
		// dump($r);
		$this->luckmoney = $r;
		$this->myluckmoney = $r[1];
		$this->display();
	}

	function sendRandBonus($total = 0, $count = 3, $type = 1) {
		if ($type == 1) {
			$input = range(0.01, $total, 0.01);
			if ($count > 1) {
				$rand_keys = (array) array_rand($input, $count - 1);
				$last = 0;
				foreach ($rand_keys as $i => $key) {
					$current = $input[$key] - $last;
					$items[] = $current;
					$last = $input[$key];
				}
			}
			$items[] = $total - array_sum($items);
		} else {
			$avg = number_format($total / $count, 2);
			$i = 0;
			while ($i < $count) {
				$items[] = $i < $count - 1 ? $avg : ($total - array_sum($items));
				$i++;
			}
		}
		return $items;
	}
}
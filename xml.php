<?php
if (isset($_GET['callback'])) {
	$jsoncallback = $_GET['callback'];
	$url = $_GET['url'];

	$xml = simplexml_load_file($url);
	$xml_json = json_encode($xml);

	echo $jsoncallback . '(' . $xml_json . ')';
	die;
}
$url = $_GET['url'];
// echo $url;
$xml = simplexml_load_file($url);
$xml_json = json_encode($xml);
echo $xml_json;
foreach ($xml->PLANT as $plantNode) {
	echo $plantNode->COMMON, ' - ', $plantNode->PRICE, "\n";
}
foreach ($xml as $key => $value) {
// 获取属性
	// $attr = $value->title->attributes();
	// echo typeof($key);
	echo $value;
	// echo "Id: " . $attr['id'] . "< br />";
	// echo "Title: " . $value->title . "< br />";
	// echo "Details: " . $value->details
	// . "< br />< br />";
}
//var_dump($xml);
//echo $xml->getName();
//var_dump($xml->children());
$record = '';
foreach ($xml->children() as $l1_k => $l1_v) {
	echo $l1_k . '=>' . $l1_v;
	// die;
	// $record .= '<tr><td>' . $level_0->attributes() . '</td>';
	if (is_array($l1_v)) {
		echo 'zzz';
		foreach ($l1_v->children() as $l2_k => $l2_v) {
			//var_dump($child);
			echo $l2_k;
			$record .= '<td>' . $level_0 . '</td>';
			foreach ($item->children() as $fuck) {
				$three = $fuck;
				echo $three;
			}
		}
	}
	$record .= '</tr>';
}
echo $record;

$location = $xml->xpath("location");
var_dump($location);
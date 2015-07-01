<?php
	$wx_medias = $_POST['media_ids'];
	echo $wx_medias;
	file_put_contents('abc.txt', $wx_medias);

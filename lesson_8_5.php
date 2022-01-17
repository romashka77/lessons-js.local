<?php
	$stock = $_GET['stock'];
	if ($stock == 'XYZ') {
		$base = 5;
		$rand = mt_rand() / mt_getrandmax();
		$course = round($base + $rand, 2);
		echo $course;
	}
	else echo -1;
?>
<?php
	$x = $_POST['x']? htmlspecialchars($_POST['x']) : 0;
	$y = $_POST['y']? htmlspecialchars($_POST['y']) : 0;
	if (!is_numeric($x) || !is_numeric($y)) echo 'Некорректные данные';
	else echo $x + $y;
?>
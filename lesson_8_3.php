<?php
	/* !!!ДАННЫЙ СКРИПТ НЕ БЕЗОПАСЕН, ОН НЕ ПРОВЕРЯЕТ ВХОДНОЙ ФАЙЛ!!! */
	$data = file_get_contents('php://input');
	$path = 'images/'.uniqid().'.jpg';
	file_put_contents($path, $data);
	echo $path;
?>
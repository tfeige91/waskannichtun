<?php

$mysqli = new mysqli('localhost', 'root', 'abcD123$', 'waskannichtun');

$query = "SELECT json FROM `test` WHERE id=1";	
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);

$res_arr = $results->fetch_assoc();

$json_string = implode('', $res_arr);

$json = (json_decode($json_string, true));
	
echo $json['name'];

	
	
?>
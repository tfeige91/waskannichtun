<?php
require_once '../classes/Taetigkeit.php';

$taetigkeit = new Taetigkeit();	

$einschraenkung_id = $_POST['einschraenkung_id'];

$result = $taetigkeit->filterByEinschraenkung($einschraenkung_id);

echo $result; //returns String



?>
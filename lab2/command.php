<?php

require 'connection.php';
header('Content-Type: application/json');

$name = $_GET['command'];

$cond=array("name"=> array('$eq' => $name));
$cursor = $db->command->find($cond);
$result = iterator_to_array($cursor);


$participant = array();

foreach ($result as $key => $value) {
    $participant[] = $value['participant'];
}
$pa = json_encode($participant);

echo "Участники команды:" . $pa;
<?php

require 'connection.php';
header('Content-Type: application/json');

$game = $_GET['game'];
$cond=array("game"=> array('$eq' => $game));
$cursor = $db->game->find($cond);
    $result = iterator_to_array($cursor);


    $game = array();
    $place = array();
    $score = array();
    $win = array();

    foreach ($result as $key => $value) {
        $game[] = $value['game'];
        $place[] = $value['place'];
        $score[] = $value['score'];
        $win[] = $value['win'];
    }
    $f = json_encode($game);
    $d = json_encode($place);
    $s = json_encode($score);
    $r = json_encode($win);

    echo "Статистика за игру:" . "Игра:" . $f . "Место:" . $d . "Счет:" . $s . "Победитель" . $r ;
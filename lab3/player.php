<?php

$dsn = "mysql:host=localhost; dbname=itehLab1";
$user = 'root';
$pass = '';
header('Content-Type: application/json');
try {
    $dbh = new PDO($dsn,$user,$pass);
    $dbh->exec('SET NAMES utf8');

    $player = $_GET["player"];

    $playerstart = "SELECT game.ID_Game , game.date , game.place , game.score FROM game , player WHERE game.FID_Team2 = player.FID_Team AND player.name = '". $player ."'";

    $games = array();
    foreach ($dbh->query($playerstart) as $row) {
        $games[] = array(
            'id' => $row['ID_Game'],
            'date' => $row['date'],
            'place' => $row['place'],
            'score' => $row['score']
        );
    }
    echo json_encode($games);
} catch (PDOException $e) {
    echo "Ошибка";
}
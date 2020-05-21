<?php

$dsn = "mysql:host=localhost; dbname=iteh1lbvar7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $player = $_GET["player"];

    $playerstart = "SELECT game.ID_Game , game.date , game.place , game.score FROM game , player WHERE game.FID_Team2 = player.FID_Team AND player.name = '". $player ."'";

    foreach ($dbh->query($playerstart) as $row) {
        echo $row['ID_Game'];
        echo "&nbsp;";
        echo $row['date'];
        echo "&nbsp;";
        echo $row['place'];
        echo "&nbsp;";
        echo $row['score'];
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Ошибка";
}
<?php

$dsn = "mysql:host=localhost; dbname=iteh1lbvar7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $date = $_GET["date"];

    $datestart = "SELECT DISTINCT game.ID_Game , game.date , game.place , game.score FROM game WHERE game.date > '". $date ."'";

    foreach ($dbh->query($datestart) as $row) {
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
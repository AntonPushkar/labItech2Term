<?php

$dsn = "mysql:host=localhost; dbname=iteh1lbvar7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $league = $_GET["league"];

    $leaguestart = "SELECT game.ID_Game , game.date , game.place , game.score FROM game,team WHERE game.FID_Team1 = team.ID_Team AND team.league = '". $league ."'";

    foreach ($dbh->query($leaguestart) as $row) {
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
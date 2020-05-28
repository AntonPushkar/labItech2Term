<?php

$dsn = "mysql:host=localhost; dbname=itehLab1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $league = $_GET["league"];

    $leaguestart = "SELECT DISTINCT game.ID_Game , team.name as name1, team2.name as name2 , game.date , game.place , game.score FROM game
  INNER JOIN team ON game.FID_Team1 = team.ID_Team
  INNER JOIN team as team2 ON FID_Team2 = team2.ID_Team WHERE game.FID_Team1 = team.ID_Team AND team.league = '". $league ."'";

    foreach ($dbh->query($leaguestart) as $row) {
        echo '<tr>'.'<td>'.$row['ID_Game'].'</td>'.'<td>'.$row['date'].'</td>'.'<td>'.$row['place'].'</td>'.'<td>'.$row['score'].'</td>'.'<tr>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}
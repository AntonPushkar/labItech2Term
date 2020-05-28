<?php

$dsn = "mysql:host=localhost; dbname=itehLab1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $player = $_GET["player"];

    $playerstart = "SELECT DISTINCT game.ID_Game, team.name as name1, team2.name as name2, game.date, game.place, game.score
FROM game INNER JOIN team ON game.FID_Team1 = team.ID_Team
          INNER JOIN team as team2 ON FID_Team2 = team2.ID_Team,
     player
      
WHERE game.FID_Team2 = player.FID_Team
  AND player.name = '". $player ."'";

    foreach ($dbh->query($playerstart) as $row) {
        echo $row['ID_Game'];
        echo "&nbsp;";
        echo $row['date'];
        echo "&nbsp;";
        echo $row['place'];
        echo "&nbsp;";
        echo $row['name1'];
        echo "&nbsp;";
        echo $row['score'];
        echo "&nbsp;";
        echo $row['name2'];
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Ошибка";
}
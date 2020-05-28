<?php


$dsn = "mysql:host=localhost; dbname=itehLab1";
$user = 'root';
$pass = '';
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");
try {
    $dbh = new PDO($dsn,$user,$pass);

    $date = $_GET["date"];

    $datestart = "SELECT DISTINCT game.ID_Game , team.name as name1, team2.name as name2 , game.date , game.place , game.score FROM game
  INNER JOIN team ON game.FID_Team1 = team.ID_Team
  INNER JOIN team as team2 ON FID_Team2 = team2.ID_Team
WHERE game.date > '" . $date . "'";

    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";
    foreach ($dbh->query($datestart) as $row) {
        echo '<game>';

        echo '<id>'.$row['ID_Game'].'</id>'.'<date>'.$row['date'].'</date>'.'<place>'.$row['place'].'</place>'.'<score>'.$row['score'].'</score>';

        echo '</game>';
    }
    echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}
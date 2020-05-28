<?php

$dsn = "mysql:host=localhost; dbname=itehLab1";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $PlayerName = "SELECT name FROM player";

    $outputPlayer[] = array();

    unset($outputPlayer[0]);

    foreach ($dbh->query($PlayerName) as $row) {
        $outputPlayer[] .= $row['name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}
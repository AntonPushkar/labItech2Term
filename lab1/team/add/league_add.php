<?php

$dsn = "mysql:host=localhost; dbname=iteh1lbvar7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $leagueName = "SELECT league FROM team";

    $outputLeague[] = array();

    unset($outputLeague[0]);

    foreach ($dbh->query($leagueName) as $row) {
        $outputLeague[] .= $row['league'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}
<?php require "add/league_add.php"; ?>
<?php require "add/player_add.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
    <script src="jquery-3.5.0.min.js"></script>
    <script src="ajax.js"></script>
</head>
<body>
<form action="league.php">
    <p><b>таблица чемпионата выбранной лиги</b></p>
    <select name="league">
        <?php
        foreach ($outputLeague as $league) {
            echo "<option value=\"$league\">$league</option>";
        }
        ?>
    </select>
    <p><input type="button" value="Выбрать" onclick="getRes1(this);"></p>
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Дата</th>
            <th>Место игры</th>
            <th>Счет</th>
        </tr>
    </thead>
    <tbody id="res1"></tbody>
</table>
<form action="date.php">
    <p><b>список игр до указанного времени</b></p>
    <input type="date" name="date">
    <p><input type="button" value="Выбрать" onclick="getRes2(this);"></p>
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Дата</th>
            <th>Место игры</th>
            <th>Счет</th>
        </tr>
    </thead>
    <tbody id="res2"></tbody>
</table>
<form action="player.php">
    <p><b>список игр выбранного футболиста</b></p>
    <select name="player">
        <?php
        foreach ($outputPlayer as $player) {
            echo "<option value=\"$player\">$player</option>";
        }
        ?>
    </select>
    <p><input type="button" value="Выбрать" onclick="getRes3(this);"></p>
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Дата</th>
            <th>Место игры</th>
            <th>Счет</th>
        </tr>
    </thead>
    <tbody id="res3"></tbody>
</table>
</body>
</html>
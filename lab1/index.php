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
    <p><input type="submit" value="Выбрать"></p>
</form>
<form action="date.php">
    <p><b>список игр на указанный временной интервал</b></p>
    <input type="date" name="date">
    <p><input type="submit" value="Выбрать"></p>
</form>
<form action="player.php">
    <p><b>список игр выбранного футболиста</b></p>
    <select name="player">
        <?php
        foreach ($outputPlayer as $player) {
            echo "<option value=\"$player\">$player</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>
</body>
</html>
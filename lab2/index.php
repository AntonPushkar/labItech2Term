<?php require 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>




<form action="command.php" method="get">
    <p><b>список футболистов указанной команды</b></p>
    <select name="command">
        <option>Dinamo</option>
        <option>Metal</option>
    </select>
    <p>
        <input type="submit">
    </p>
</form>


    <form action="league.php" method="get">
        <p><b>таблица чемпионата для выбранной лиги</b></p>
        <select name="league">
            <option>first</option>
        </select>
        <p>
            <input type="submit">
        </p>
    </form>

    <form action="game.php" method="get">
        <p><b>список игр, в которых участвовала выбранная команда</b></p>
        <select name="game">
            <option>Dinamo</option>
            <option>Metal</option>
        </select>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>
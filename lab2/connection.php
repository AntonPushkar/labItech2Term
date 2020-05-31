<?php

require_once __DIR__ .'/vendor/autoload.php'; // подключаем автоподгрузчик классов Composer
$db = (new MongoDB\Client)->mongo_7;

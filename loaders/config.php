<?php
// zadaniem tego pliku jest załadowanie wszystkich plików do jednej tablicy

$configs = [];
$configs['app'] = require __DIR__ . '/../config/app.php';

return $configs;

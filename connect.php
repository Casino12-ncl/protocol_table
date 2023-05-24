<?php
$server = 'localhost'; 
$user = 'root'; 
$password = 'root'; 
$db = 'protocol_table'; 
 
$connect = mysqli_connect($server, $user, $password, $db); // Подключение
 
// Проверка на подключение
if (!$connect) {
    // Если проверку не прошло, то выводится надпись ошибки и заканчивается работа скрипта
    echo "Не удается подключиться к серверу базы данных!"; 
    exit;
}
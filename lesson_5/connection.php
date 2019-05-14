<?php
$host = 'localhost'; // адрес сервера 
$database = 'shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$sqlConnect = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка соединения с БД" . mysqli_error($link));
?>
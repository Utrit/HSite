<?php
require_once 'login.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="INSERT INTO `plants` (`Id`, `Name`) VALUES (2,'Second')";
$result=mysqli_query($link,$query);

mysqli_close($link);
?>

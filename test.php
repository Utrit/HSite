<?php
require_once 'login.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query ="SELECT * FROM plants";
$result=mysqli_query($link,"SELECT * FROM plants");// делаем выборку из таблицы
$row=mysqli_fetch_array($result);// Заносим в массив
echo  $row['Id'];
echo  $row['Name'];

// закрываем подключение
mysqli_close($link);
?>

<?php
require_once 'login.php'; // подключаем скрипт
$id = $_GET['ID'];

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query ="SELECT * FROM status WHERE ID=$id ORDER BY `Time` DESC LIMIT 1,1";
$result=mysqli_query($link,$query);// делаем выборку из таблицы
//$row=mysqli_fetch_array($result);// Заносим в массив
//echo  $row['Id'];
//echo  $row['Name'];
$row=mysqli_fetch_array($result);

// закрываем подключение
mysqli_close($link);
?>

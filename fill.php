<?php
  require_once 'login.php';
  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));

  if(!empty($_GET['flower_name'])){
    $n = $_GET['flower_name'];
    $query ="INSERT INTO `plants` VALUES (`Name`,$n)";
    $result=mysqli_query($link,$query);
    echo mysqli_connect_error($result);
    echo "Checked <br>";
    echo $n;
  }
  mysqli_close($link);
?>



<!DOCTYPE html>
<html>
 <head>
   <title>Hackosite</title>
   <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
  <body background="JPG\bg.jpg"> <!--background="C:\Users\Учитель\Desktop\HSite\HSite\JPG\tenor.gif" --> <!--background="JPG\gg.jpg" -->
    Ваша заявка отработана.
    Спасибо За Обращение
 </body>
</html>

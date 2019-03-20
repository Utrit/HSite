<?php
  require_once 'login.php';
  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));
      $id = $_GET['ID'];
      $query ="SELECT * FROM `plants` WHERE ID=$id LIMIT 1 ORDER BY `date`";
      $result1=mysqli_query($link,$query);
      $query ="SELECT * FROM status WHERE ID=$id ORDER BY `Time` DESC LIMIT 1,1";
      $result2=mysqli_query($link,$query);
      //$row1=mysqli_fetch_array($result1);
      $row2=mysqli_fetch_array($result2);
      echo json_encode($row2)
?>

<?php
  require_once 'login.php';
  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));

  if(!empty($_GET['Id'])){
    $Id = $_GET['Id'];
    $date = strval(date("Y9m9d9H9i9s"));
    $Ha = $_GET['Ha'];
    $Ta = $_GET['Ta'];
    $Hs = $_GET['Hs'];
    $Li = $_GET['Li'];
    $Wt = $_GET['Wt'];

    $query = "INSERT INTO `status` VALUES ($Id,$date,$Ha,$Ta,$Hs,$Li,$Wt)";
    $result=mysqli_query($link,$query);
    if($result){
      echo "Checked <br>";
    }
    else{
      echo mysqli_error($link);
    }
  }
  mysqli_close($link);
?>

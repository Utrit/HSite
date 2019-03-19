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

    <div class="gr" id="Main">
      <?php echo $row2['Time'] ?>
       <h1> Параметры растения №<?php echo $id ?></h1>
       <li>Влажность воздуха - </li><?php echo $row2['HumAir']?>
       <li>Температура воздуха - </li><?php echo $row2['TempAir']?>
       <li>Влажность почвы -</li><?php echo $row2['HumSoil']?>
       <li>Свет - </li><?php echo $row2['Light']?>
       <li>Последний полив - </li><?php echo floor($row2['WateringTime']/3600);
       echo ":";
       echo floor($row2['WateringTime']%60);?>
       <!-- <li>Растение (см) - <a id="result"></a> </li><?php echo $row2['']?> -->
       <!-- <li>Высота растения:
         <input type="text" size="1" id="test"></input>
         см
         <button>Отправить</button></li> -->
         <p class="div-style">
                 <img src="JPG\1.png" title="Image 1" class="img-style im-1">
                 <img src="JPG\2.png" title="Image 2" class="img-style next im-2">
                 <img src="JPG\3.png" title="Image 3" class="img-style next im-3">
              </p>
    <script>
     var input = document.getElementById('test');
     var result = document.getElementById('result');
      input.onkeyup =  input.oncopy = input.onpaste = input.oncut = (function() {
        return function() {
         result.innerHTML = this.value;
    }
})();
</script>
     </div>
 </body>
</html>

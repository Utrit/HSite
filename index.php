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
      <form name="test" method="GET" action="fill.php">
       <p>
        <b>Добавить Цветок</b><br>
        <input required name="flower_name" type="text" size="15">
       </p>
       <input type="submit" value="Отправить">
      </form>
      

      <?php
      require_once 'login.php';
      $link = mysqli_connect($host, $user, $password, $database);
      $query ="SELECT * FROM plants";
      $result=mysqli_query($link,$query);
      while ($row=mysqli_fetch_array($result)){
        echo "<li ><a href=flower.php?ID=" ;
        echo $row['ID'];
        echo ">";
        echo $row['Name'];
        echo "</a></li>";
      }
      mysqli_close($link);
      ?>


     </div>
 </body>
</html>

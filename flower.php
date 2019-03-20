
<!DOCTYPE html>
<html>
 <head>
   <title>Hackosite</title>
   <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- HumAir: "28"
HumSoil: "12"
Id: "1"
Light: "38040"
TempAir: "24"
Time: "2019903920906933951"
WateringTime: "38040" -->

  <script>
  setInterval(function(){fetch('/hsite/getdata.php?ID='+$_GET('ID'))
    .then(function(response){
      return response.json();
    }).then(function(data) {
      console.log(data);
      document.getElementById('HA').innerHTML = data.HumAir+" %";
      document.getElementById('TA').innerHTML = data.TempAir+" C";
      document.getElementById('HS').innerHTML = Math.floor(data.HumSoil/10.24)+" %";
      document.getElementById('LI').innerHTML = Math.floor(data.Light/1000)+" %";
      var mins = data.WateringTime/60;
      document.getElementById('WT').innerHTML = Math.floor(mins/60)+":"+Math.floor(mins%60);
    });
  },5000);

  function $_GET(key) {
      var p = window.location.search;
      p = p.match(new RegExp(key + '=([^&=]+)'));
      return p ? p[1] : '1';
    }



    </script>

 </head>
  <body background="JPG\bg.jpg"> <!--background="C:\Users\Учитель\Desktop\HSite\HSite\JPG\tenor.gif" --> <!--background="JPG\gg.jpg" -->

    <div class="gr" id="Main">
      <!-- HumAir: "28"
HumSoil: "12"
Id: "1"
Light: "38040"
TempAir: "24"
Time: "2019903920906933951"
WateringTime: "38040" -->
       <h1> Параметры растения №<?php echo $_GET["ID"] ?></h1>
       <li>Влажность воздуха - <b id = "HA">.</b></li>
       <li>Температура воздуха - <b id = "TA">.</b></li>
       <li>Влажность почвы - <b id = "HS">.</b></li>
       <li>Свет - <b id = "LI">.</b></li>
       <li>Последний полив - <b id = "WT">.</b></li>






         <p class="div-style">
                 <img src="JPG\1.png" title="Image 1" class="img-style im-1">
                 <img src="JPG\2.png" title="Image 2" class="img-style next im-2">
                 <img src="JPG\3.png" title="Image 3" class="img-style next im-3">
              </p>
     </div>
 </body>
</html>

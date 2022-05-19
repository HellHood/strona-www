<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product_name; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/item.css">
</head>
<body>
<?php
include '../elementy/gora.php' ;
?>
    <div class='item'>
        <div class="obraz"><img src='../img/acer2.png' alt="acer2" width="500" height="600"></div>
        <div class='podst_inf'>
          <div class='opis'>Laptop gamingowy Acer Nitro 5. Zanurz się w gamingowych światach i podziwiaj je przez pryzmat technologii Ray Tracingu z kartą graficzną GeForce RTX. Razem z nowoczesnym procesorem tworzą duet, który pozwoli Ci wejść na wyższy poziom grania. O niskie temperatury natomiast zadba inteligentny układ chłodzenia, pozwalający na wydobycie z karty i procesora maksymalnej wydajności.</div>
          <br>
          <p>5100 zł</p>
          <center><button class="dodaj-koszyk">Dodaj do koszyka</button></center>
        </div>
    </div>
      <center><h1>Polecane produkty</h1></center>
    <center>
      <div class='polecane'>
      <div><a href=""><img src="../img/iphone13.png" width="180px" height="250"></a></div>
      <div><a href=""><img src="../img/iphone13.png" width="180px" height="250"></a></div>
      <div><a href=""><img src="../img/iphone13.png" width="180px" height="250"></a></div>
      <div><a href=""><img src="../img/iphone13.png" width="180px" height="250"></a></div>
    </div>
    </center>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../img/arrow.png" width="50px" height="50px"><br>Do góry</button>
    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      }
    </script>
    <footer> 
        <div id='about'>
          <ul id='wszystko'>
            <ul>
              <li>O nas</li>
            </ul>
            <ul>
              <li>Regulamin</li>
            </ul>
            <ul>
              <li>Polityka prywatności</li>
            </ul>
            <ul>
              <li>Kontakt</li>           
            </ul>
          </ul>
        </div>
      </footer>
</body>
</html>
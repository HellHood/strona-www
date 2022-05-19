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
        <div class="obraz"><img src='../img/telewizor.png' alt="telewizor" width="500" height="600"></div>
        <div class='podst_inf'>
          <div class='opis'>75-calowy telewizor 4K Xiaomi Mi LED TV Q1. Przekonaj się o tym, jak wygląda kwantowa przejrzystość 4K z telewizorem Xiaomi Mi TV Q1. Innowacyjne rozwiązania sprawią, że przeniesiesz się w samo centrum akcji. Ponad miliard kolorów z szerokim spektrum nadaje zwykłym obrazom całkowicie nową jakość. Dzięki 192 strefom lokalnego przyciemniania czerń jest głębsza, a biel czystsza, a to wszystko przy współczynniku kontrastu 10000:1. Telewizor obsługuje także technologię Dolby Vision, HDR10+ i MEMC. Wszystko to sprawia, że doświadczysz wspaniałych wrażeń, nie wychodząc z domu.</div>
          <br>
          <p>6700 zł</p>
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
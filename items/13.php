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
        <div class="obraz"><img src='../img/redmi9a.png' alt="redmi9a" width="500" height="600"></div>
        <div class='podst_inf'>
          <div class='opis'>Smartfon Xiaomi Redmi 9A Grey-Odkryj Xiaomi Redmi 9A szary — smartfon o dużych możliwościach w rozsądnej cenie. Z nim zrobisz świetne zdjęcia w każdych warunkach z aparatem wspieranym przez sztuczną inteligencję. Duży, przestronny ekran z zakrzywionymi krawędziami o przekątnej 6,53” pozwoli bezpiecznie korzystać z urządzenia dzięki niskiej emisji światła niebieskiego. Wielogodzinna zabawa z urządzeniem możliwa jest za sprawą baterii o pojemności aż 5000 mAh oraz energooszczędnym, ale zarazem wydajnym komponentom.</div>
          <br>
          <p>560 zł</p>
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
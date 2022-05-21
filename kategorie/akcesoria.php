<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../css/style.css">
    <title>Nyggaware</title>
    <style>
      #podkategorie > ul > div {
        background-color: rgb(224, 224, 224);
        text-align: center;
        padding: 10px;
      }
      #podkategorie > ul > div:hover {
        background-color: rgb(173, 173, 173);
      }
    </style>
</head>
<body>
 <?php
include '../elementy/gora.php' ;
 ?>
 <br>
 <br>
    <div class="container">
    <div id="podkategorie">
      <ul>
        <div><a href="">Smartfony i telefony</a></div>
        <div><a href="">Tablety</a></div>
        <div><a href="">Smartwatche</a></div>
        <div><a href="">Ładowarki i powerbanki</a></div>
        <div><a href="">Karty pamięci</a></div>
        <div><a href="">Ochrona na telefon</a></div>
        <div><a href="">Akcesoria do tabletów</a></div>
      </ul>
    </div>
    <div id='rzeczy_sprzedarz'>
      <ul id="lista_rzeczy">
        <div class="przedmiot">
          
          <li>"Nazwa przedmiotu"</li>
          <br>
          <li><img src='../img/iphone13.png'style="max-width:100%;height:auto;"></li>
          <li><a href='../items/1.php'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class="przedmiot">
          
          <li>"Nazwa przedmiotu"</li>
          <br>
          <li><img src='../img/iphone13.png' style="max-width:100%;height:auto;"></li>
          <li>Zobacz więcej</li>
          
        </div>
        <br>
        <div class="przedmiot">
        
          <li>"Nazwa przedmiotu"</li>
          <br>
          <li><img src='../img/iphone13.png' style="max-width:100%;height:auto;"></li>
          <li>Zobacz więcej</li>
        
        </div>
        <br>
        <div class="przedmiot">
          
          <li>"Nazwa przedmiotu"</li>
          <br>
          <li><img src='../img/iphone13.png'  width=' 200px' height=' 250px'></li>
          <li>Zobacz więcej</li>
          
        </div>
        <br>
        <div class="przedmiot">
          
          <li>"Nazwa przedmiotu"</li>
          <br>
          <li><img src='../img/iphone13.png' style="max-width:100%;height:auto;"></li>
          <li>Zobacz więcej</li>
          
        </div>
        <br>
      </ul>
    </div>
    <aside>
      Miejsce na reklame
      <br>
      217px na 650px
    </aside>
    </div>
<?php
include '../elementy/przycisk.php' ;
?>
<?php
include '../elementy/footer.php' ;
?>
</div>
</body>
</html>
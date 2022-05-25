<?php 
include '../tablice.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../css/style.css">
    <title>Nyggaware</title>
</head>
<body>
 <?php
include '../elementy/gora.php' ;
 ?>
    <div class="container">
    <div id="podkategorie">

      <ul>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
      </ul>
    </div>
    <div id='rzeczy_sprzedarz'>
      <ul id="lista_rzeczy">
      <?=
        "<div class='przedmiot'>
          
          <li>'$items[15]'</li>
          <br>
          <li><img src='../img/$image[15]'></li>
          <li><a href='../items/$items[15]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[14]'</li>
          <br>
          <li><img src='../img/$image[14]'></li>
          <li><a href='../items/$items[14]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[6]'</li>
          <br>
          <li><img src='../img/$image[6]'></li>
          <li><a href='../items/$items[6]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[5]'</li>
          <br>
          <li><img src='../img/$image[5]'></li>
          <li><a href='../items/$items[5]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[4]'</li>
          <br>
          <li><img src='../img/$image[4]'></li>
          <li><a href='../items/$items[4]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        "?>
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
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
        <a href="../smartfony/smartfony&tablety">Smartfony i telefony</a>
        <a href="../items/empty.php">Tablety</a>
        <a href="../smartfony/smartwatche.php">Smartwatche</a>
        <a href="../items/empty.php">Ładowarki i powerbanki</a>
        <a href="../items/empty.php">Karty pamięci</a>
        <a href="../items/empty.php">Ochrona na telefon</a>
        <a href="../items/empty.php">Akcesoria do tabletów</a>
      </ul>
    </div>
    <div id='rzeczy_sprzedarz'>
      <ul id="lista_rzeczy">
      <?=
        "<div class='przedmiot'>
          
          <li>'$items[14]'</li>
          <br>
          <li><img src='../img/$image[14]' style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[14]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[15]'</li>
          <br>
          <li><img src='../img/$image[15]' style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[15]'>Zobacz więcej</a></li>
          
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
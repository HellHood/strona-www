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
          
          <li>'$items[20]'</li>
          <br>
          <li><img src='../img/$image[20]'style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[20]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[9]'</li>
          <br>
          <li><img src='../img/$image[9]'style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[9]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          <li>'$items[1]'</li>
          <br>
          <li><img src='../img/$image[1]'style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[1]'>Zobacz więcej</a></li>
          
        </div>
        <br>"
        ?>
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
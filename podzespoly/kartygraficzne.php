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
            <a href="../podzespoly/kartygraficzne.php">Karty graficzne</a>
            <a href="../items/empty.php">Procesory</a>
            <a href="../items/empty.php">Płyty główne</a>
            <a href="../podzespolypc/dyski.php">Dyski HDD i SSD</a>
            <a href="../items/empty.php">Obudowy</a>
            <a href="../items/empty.php">Pamięci RAM</a>
            <a href="../items/empty.php">Zasilacze komputerowe</a>
            <a href="../items/empty.php">Chłodzenia komputerowe</a>
            <a href="../items/empty.php">Karty dźwiękowe</a>
            <a href="../items/empty.php">Karty sieciowe</a>
            <a href="../items/empty.php">Napędy optyczne</a>
      </ul>
    </div>
    <div id='rzeczy_sprzedarz'>
      <ul id="lista_rzeczy">
      <?=
        "<div class='przedmiot'>
          
          '$items[18]'</li>
          <br>
          <li><img src='../img/$image[18]'style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[18]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          '$items[17]'</li>
          <br>
          <li><img src='../img/$image[17]'style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[17]'>Zobacz więcej</a></li>
          
        </div>
        <br>
        <div class='przedmiot'>
          
          '$items[16]'</li>
          <br>
          <li><img src='../img/$image[16]'style='max-width:100%;height:auto;'></li>
          <li><a href='../items/$items[16]'>Zobacz więcej</a></li>
          
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
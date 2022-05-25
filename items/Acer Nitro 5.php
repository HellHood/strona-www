<?php 
include '../tablice.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$items[3]"; ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/item.css">
</head>
<body>
<?php
include '../elementy/gora.php' ;
?>
    <div class='item'>
        <div class="obraz"><?= "<img src='../img/$image[3]' alt='lg' width='80%' height='80%'>"?> </div>
        <div class='podst_inf'>
          <div class='opis'><?= $description[3] ?></div>
          <br>
            <div>
                <p><h3><?= $price[3] ?> zł</p></h3>
                <button class="dodaj-koszyk">Dodaj do koszyka</button>
            </div>
        </div>
    </div>
    <h1>Polecane produkty</h1>
    <div class='polecane'>
      <div><?= "<a href='$items[0]'><img src='../img/$image[0]' width='100%' height='100%'>" ?></a></div>
      <div><?= "<a href='$items[6]'><img src='../img/$image[6]' width='100%' height='100%'>" ?></a></div>
      <div><?= "<a href='$items[3]'><img src='../img/$image[3]' width='100%' height='100%'>" ?></a></div>
      <div><?= "<a href='$items[8]'><img src='../img/$image[8]' width='100%' height='100%'>" ?></a></div>
    </div>
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

<?php
include "../elementy/footer.php"
?>
</body>
</html>
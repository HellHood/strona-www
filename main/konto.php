<!DOCTYPE html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../css/style.css">
    <title>Nyggaware</title>
    <style>
        #account {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            width: 50%;
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            justify-content: space-between;
            text-align: center;
        }
        footer {
            position: absolute;
        }
    </style>
</head>
<body>
<?php
include '../elementy/gora.php' ;
?>
    <div id='account'>
        <div>
            <img src="../img/profile.png" alt="Dane osobowe" width='100px' height='100px'>
            <br>
            Dane osobowe
            
        </div>
        <div>
            <img src="../img/order.png" alt="Zamówienia" width='100px' height='100px'>
            <br>
            Zamówienia
        </div>
        <div>
            <img src="../img/settings.png" alt="Ustawienia" width='100px' height='100px'>
            <br>
            Ustawienia
        </div>
    </div>
    <?php
include '../elementy/przycisk.php' ;
?>
<?php
include '../elementy/footer.php' ;
?>
</body>
</html>
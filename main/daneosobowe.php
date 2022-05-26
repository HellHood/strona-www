<!DOCTYPE html>
<body lang="en">
<head>
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
<h1>TWOJE DANE</h1>
    <div id='personal-information'> 
        <div>
            <input type="text" name='name'><br>
            <label for="name">Imię</label>
        </div>
        <div>
            <input type="text" name='secondname'><br>
            <label for="secondname">Nazwisko</label>
        </div>
        <div>
            <input type="text" name='birth'><br>
            <label for="birth">Data Urodzenia</label>
        </div>
        <div>
            <input type="text" name='street'><br>
            <label for="street">Ulica</label>
        </div>
        <div>
            <input type="text" name='city'><br>
            <label for="city">Miasto</label>
        </div>
        <div>
            <input type="text" name='code'><br>
            <label for="code">Kod Pocztowy</label>
        </div>
        <div>
            <input type="text" name='phone'><br>
            <label for="phone">Numer Telefonu</label>
        </div>
        <div>
            <input type="text" name='email'><br>
            <label for="email">Adres e-mail</label>
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
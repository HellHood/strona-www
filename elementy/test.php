<?php
$kategorie = [
    'Smartfony i smartwatche', 
    'Promocje i nowości',
    'Komputery i laptopy',
    'Podzespoły komputerowe',
    'Urządzenia peryferyjne',
    'Akcesoria'
];

$smartfony_i_smartwatche = [
    'Smartfony i telefony',
    'Tablety',
    'Smartwatche',
    'Ładowarki i powerbanki',
    'Karty pamięci',
    'Ochrona na telefon',
    'Akcesoria do tabletów',
];
$komputery_i_laptopy = [
  'Laptopy/Notebooki/Ultrabooki',
  'Laptopy 2 w 1',
  'Komputery stacjonarne',
  'Serwery',
  'Programy',
  'Torby i etui',
  'Akcesoria komputerowe',
  'Akcesoria do laptopów'     
];

$podzespolyKomputerowe = [
  'Karty graficzne',
  'Procesory',
  'Płyty główne',
  'Dyski HDD i SSD',
  'Obudowy',
  'Pamięci RAM',
  'Zasilacze komputerowe',
  'Chłodzenia komputerowe',
  'Karty dźwiękowe',
  'Karty sieciowe',
  'Napędy optyczne'
];
  
$urzadzeniaPeryferyjne = [
  'Drukarki',
  'Monitory',
  'Urządzenia sieciowe',
  'Myszki',
  'Klawiatury',
  'Słuchawki',
  'Głośniki',
  'Mikrofony',
  'Tablety graficzne',
  'Podkładki pod myszke',
  'Zasilacze UPS',
  'Kamery',
  'Skanery'
];
  
  $akcesoria = [
  'Kable i przejściówki',
  'Zasilanie',
  'Nośniki danych',
  'Słuchawki',
  'Myszki',
  'Klawiatury',
  'Akcesoria do laptopów',
  'Akcesoria komputerowe',
  'Akcesoria do konsol',
  'Dyski zewnętrzne SSD i HDD',
  'Czytniki kart pamięci',
  'Środki czyszczące',
  'Głośniki',
  'Listwy zasilające',
  'Narzędzia serwisowe i sieciowe',
  'Akcesora do tabletów'
  ];


 $promocje_i_nowosci =  [
  'Wszystkie promocje',
  'Współpraca',
  'Współpraca',
  'Współpraca',
  'Współpraca',
  'Współpraca'
 ];
 $test = [
    'Smartfony i smartwatche' => $smartfony_i_smartwatche, 
    'Promocje i nowości' => $promocje_i_nowosci,
    'Komputery i laptopy' => $komputery_i_laptopy,
    'Podzespoły komputerowe' => $podzespolyKomputerowe,
    'Urządzenia peryferyjne' => $urzadzeniaPeryferyjne,
    'Akcesoria' => $akcesoria
 ];

 $podkategorie = [
    $smartfony_i_smartwatche, 
    $promocje_i_nowosci,
    $komputery_i_laptopy,
    $podzespolyKomputerowe,
    $urzadzeniaPeryferyjne,
    $akcesoria
 ];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    

<ol>
<?php
foreach ($kategorie as $glowneKategorie) {
    echo "<li><a><a href='../kategorie/$glowneKategorie.php'>$glowneKategorie</a></a>";
        foreach ($test as $test2) {
                if ($test = $smartfony_i_smartwatche) {
                    foreach ($smartfony_i_smartwatche as $smartfony) {
                        echo "<ul><li><a>$smartfony</a></li></ul>";
                    };
                }; 
                if ($test2 = $podkategorie[1]) {
                    foreach ($promocje_i_nowosci as $promocje) {
                        echo "<ul><li><a>$promocje</a></li></ul>";
                    };
                };
                if ($test2 = $podkategorie[2]) {
                    foreach ($komputery_i_laptopy as $komputery) {
                        echo "<ul><li><a>$komputery</a></li></ul>";
                    };
                };
                
            };
            
        };
    echo "</li>";
?>
</ol>
</body>
</html>
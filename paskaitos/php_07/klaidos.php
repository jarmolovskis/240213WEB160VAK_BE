<?php 

    // Jeigu neroro error'ų. Pabandykite pakeisti nustatymą su ini_set funkcija.
    ini_set('display_errors', E_NOTICE);

    // E_ERROR;
    // E_WARNING;
    // E_PARSE;
    // E_NOTICE;

    // NOTICE pranešimas apie nedeklaruotą kintamąjį. 
    echo '<br>';
    echo $mystring;

    // WARNING pranešimas apie neegzistuojantį failą.
    $file = fopen("mytestfile.txt", "r");


    // WARNING pranešimas apie nedeklaruotą konstantą.
    echo '<br>';
    echo TEST;

    $asocArray = [
        'pirmas' => 1,
        'antras' => 2,
    ];

    $simpleArray = ['vienas', 'du', 'trys'];
    
    echo '<br>';
    echo $simpleArray[5];

    echo '<br>';
    // Warning: Use of undefined constant pirmas
    echo $asocArray[pirmas];

    $kazkokiaReiksme = 5;

    echo '<br>';
    echo 'Kažkoks tekstas $kazkokiaReiksme kuriame yra ' . $asocArray['antras'] . '.';
    echo '<br>';
    echo "Kažkoks tekstas $kazkokiaReiksme kuriame yra {$asocArray['antras']}.";
    echo '<br>';
    echo "Kažkoks tekstas $kazkokiaReiksme kuriame yra {$asocArray['trecias']}.";


    // WARNING pranešimas apie nerastą failą.
    include 'tests/test.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>TEST</h1>


    <img src="https://picsum.photos/1000" alt="">
    <img src="https://picsum.photos/1001" alt="">
    <img src="https://picsum.photos/1002" alt="">
    <img src="https://picsum.photos/1003" alt="">

</body>
</html>



<?php

    header( 'Expires: Mon, 26 Jul 1998 05:00:00 GMT' );

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    // Apskaiciuojama vidutine temperatura
    echo array_sum($temp) / count($temp);
    echo '<br>';

    // Apskaiciuojama vidutine temperatura
    // $suma = 0;
    // foreach($temp as $t) {
    //     $suma = $suma + $t;
    // }
    // echo '<br>';
    // echo $suma / count($temp);


    $vid = round(array_sum($temp) / count($temp));

    echo '<br>';
    echo $vid;

    rsort($temp);

    echo '<br>';
    print_r($temp);
    echo '<br>';

    $silciausia = array_slice($temp, 0, 5);

    echo '<br>';
    echo "Penkios šilčiausios temperatūros: " . implode(", ", $silciausia) . "°C<br>";
    
    $salciausia = array_slice($temp, -5, 5);
    echo '<br>';
    echo "Penkios šalčiausios temperatūros: " . implode(", ", $salciausia) . "°C";

    ?>

</body>

</html>
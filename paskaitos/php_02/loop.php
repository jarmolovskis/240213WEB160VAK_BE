<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 02</title>
</head>
<body>

    <h1><?php echo 'PHP Paskaita 02 - Ciklai' ?></h1>

    <?php

        // For ciklo pavyzdys

        echo 'FOR ciklas <br>';

        for ($i = 0; $i <= 10; $i++) {

            $rezultatas = $i * 7;
            echo "$i kart 7 lygų $rezultatas.<br>";

        }


        echo 'WHILE ciklas <br>';

        $j = 0;

        while ($j <= 10) {
            $rezultatas = $j * 7;
            echo "$j kart 7 lygų $rezultatas.<br>";

            $j++;
        }



        echo 'DO WHILE ciklas <br>';

        $k = 100;

        do {
            $rezultatas = $k * 7;
            echo "$k kart 7 lygų $rezultatas.<br>";

            $k++;
        } while ($k <= 10);

    ?>
    
</body>
</html>
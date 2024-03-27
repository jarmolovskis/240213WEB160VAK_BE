<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 02</title>

    <style>
        table, tr, td {
            border: 1px black solid;
        }
    </style>
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



        $komandos = [
            'Žalgiris',
            'Lietuvoas Rytas',
            'Neptūnas',
            'Lietkabelis',
            'Wolves',
            'Šiauliai',
            'Nauja Komanda',
        ];
    ?>

    <ul>
        <?php
            for ($i = 0; $i < count($komandos); $i++) {
                echo "<li>$komandos[$i]</li>";
            }
        ?>
    </ul>

    
    <table>
        <?php
            for ($x = 0; $x <= 10; $x++) {
                echo '<tr>';
                
                for ($y = 0; $y <= 10; $y++) {
                    if ($y != 5) {
                        echo '<td>';
                        echo $y . ' * ' . $x . ' = ' . ($y * $x);
                        // $rezultatas = $y * $x;
                        // echo "$y * $x = $rezultatas";
                        echo '</td>';
                    }
                }

                echo '</tr>';
            }
        ?>
    </table>

    <ul>
    <?php
        foreach ($komandos as $komanda) {
            echo "<li>$komanda</li>";
        }
    ?>
    </ul>


    <?php

        $salys = [
            'Lietuva' => [
                'gyventoju_skaicius' => 2.801,
                'plotas' => 65300,
            ],
            'Latvija' => [
                'gyventoju_skaicius' => 1.884,
                'plotas' => 64589,
            ],
            'Estija' => [
                'gyventoju_skaicius' => 1.331,
                'plotas' => 45339,
            ]
        ];

        foreach ($salys as $saliesPavadinimas => $salis) {
            echo $saliesPavadinimas;
            echo ' - ';
            echo $salis['gyventoju_skaicius'] . 'mln';
            echo ' - ';
            echo $salis['plotas'] . 'km<sup>2</sup>';
            echo ' - ';
            echo round($salis['gyventoju_skaicius'] / $salis['plotas'] * 1000000, 1) . '/km<sup>2</sup>' ;
            echo '<br>';
        }

    ?>


    
</body>
</html>
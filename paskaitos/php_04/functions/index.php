<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Funkcijų pavyzdžiai</h1>

    <?php

        function pasisveikinimas($vardas) {
            echo "<p>Labas $vardas!</p>";
        }

        pasisveikinimas('Kazimiras');
        pasisveikinimas('Tomas');
        pasisveikinimas('Donatas');
        pasisveikinimas('Dovilė');
        pasisveikinimas('Pavelas');
        pasisveikinimas('Vytautas');


        function pasisveikinimoTekstas($vardas) {
            return "<p>Sveiki $vardas!</p>";
        }

        $pasisveikinimoTekstas1 = pasisveikinimoTekstas('Jonas');
        $pasisveikinimoTekstas2 = pasisveikinimoTekstas('Petras');
        $pasisveikinimoTekstas3 = pasisveikinimoTekstas('Antanas');

        echo $pasisveikinimoTekstas1 . $pasisveikinimoTekstas2 . $pasisveikinimoTekstas3;
        // <p>Sveiki Jonas!</p><p>Sveiki Petras!</p><p>Sveiki Antanas!</p>

    ?>
    
</body>
</html>
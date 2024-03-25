<?php

// Kintamųjų deklaracija ir reikšmių priskirimas:

    $kintamasis = 'Kintamojo reikšmė';
    $dar_vienas_kintamasis = 'Reikšmė';
    $darVienasKintamasis = 'Reikšmė'; // Komentaras
    $vardas = 'Kazimiras';
    $miestas = 'Kaunas';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 01</title>
</head>

<body>

    <h1><?php echo $kintamasis; ?></h1>

    <p><?php echo 'Mano vardas yra ' . $vardas . '.'; ?></p>
    <p><?php echo "Mano vardas yra $vardas."; ?></p>

    <?php

        $sakinys1 = 'Sveiki. Aš esu ' . $vardas . '. Mano gyvenamoji vieta yra ' . $miestas . '.';
        $sakinys2 = "Sveiki. Aš esu $vardas. Mano gyvenamoji vieta yra $miestas.";
        // Sveiki. Aš esu Kazimiras. Mano gyvenamoji vieta yra Kaunas.

    ?>


    <!-- Mano vardas yra Kazimiras. -->

    <?php

    if ($vardas == 'Kazimiras') {
        echo '<p>Sveiki Kazimirai!</p>';
    } else {
        echo '<p>Aš Jūsų nepažįstu!</p>';
    }


    $metai = 2006;

    if ($metai <= 2005 || $metai > 2007) {
        echo '<p>Dabar ne 2006</p>';
    } else {
        echo '<p>Kažkokie kitokie metai</p>';
    }


    ?>





</body>

</html>
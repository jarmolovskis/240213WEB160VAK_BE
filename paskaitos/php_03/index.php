<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 03</title>
</head>
<body>

    <?php

    define('SVETAINES_PAVADINIMAS', 'vilniuscoding.lt');

    echo '<h1>' . SVETAINES_PAVADINIMAS . '</h1>';
    echo '<h2>' . PHP_VERSION . '</h2>';
    echo '<h2>' . __FILE__ . '</h2>';

    // print_r($_GET);

    if (
        isset($_GET['first_name'])
        && $_GET['first_name'] != ''
        && isset($_GET['city'])
        && $_GET['city'] != ''
    ) {
        echo '<h2>Sveiki ' . $_GET['first_name'] . '. Kaip laikosi ' . $_GET['city'] . '?</h2>';
        // Sveiki Kazimiras. Kaip laikosi Kaunas?
    } else {
        echo '<h2>Sveiki nepažįstamasis. Gal norite užsiregistruoti?</h2>';
    }

    ?>

    <form action="" method="GET">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name" required>
        <br>
        <label for="city_field">Miestas: </label>
        <input id="city_field" type="text" name="city" required>
        <br>
        <button>Pateikti</button>
    </form>

    
</body>
</html>
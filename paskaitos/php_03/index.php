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
    ?>

    <form action="http://localhost/240213WEB160VAK_BE/paskaitos/php_03/validation.php" method="GET">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name" required>
        <br>
        <label for="city_field">Miestas: </label>
        <input id="city_field" type="text" name="city" required>
        <br>
        <button id="form-action-btn">Pateikti</button>
        <p id="errors"></p>
    </form>


    <form action="http://localhost/240213WEB160VAK_BE/paskaitos/php_03/post_validation.php" method="POST">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name" required>
        <br>
        <label for="city_field">Miestas: </label>
        <input id="city_field" type="text" name="city" required>
        <br>
        <button id="form-action-btn">Pateikti</button>
        <p id="errors"></p>
    </form>



    <script>

        // let button = document.getElementById('form-action-btn');

        // button.addEventListener('click', function(event) {

        //     event.preventDefault();

        //     document.getElementById('errors').innerText = '';

        //     if (document.getElementById('first_name_field').value == '') {
        //         document.getElementById('errors').append('Įveskite savo vardą. ');
        //     }

        //     if (document.getElementById('city_field').value == '') {
        //         document.getElementById('errors').append('Įveskite savo miestą. ');
        //     }
        // });

    </script>
    
</body>
</html>
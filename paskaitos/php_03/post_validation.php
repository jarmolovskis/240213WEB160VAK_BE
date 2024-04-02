<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if (
            isset($_POST['first_name'])
            && trim($_POST['first_name']) != ''
            && isset($_POST['city'])
            && trim($_POST['city']) != ''
        ) {
            echo '<h2>Sveiki ' . $_POST['first_name'] . '. Kaip laikosi ' . $_POST['city'] . '?</h2>';
            // Sveiki Kazimiras. Kaip laikosi Kaunas?
        } else {
            echo '<h2>Sveiki nepažįstamasis. Gal norite užsiregistruoti?</h2>';
            echo '<a href="http://localhost/240213WEB160VAK_BE/paskaitos/php_03/">Registracija</a>';
        }

    ?>
    
</body>
</html>
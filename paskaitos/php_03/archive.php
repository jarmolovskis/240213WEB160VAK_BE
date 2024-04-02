<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 03</title>
</head>
<body>

    <?php

        $filename = 'names.csv';

        if (
            isset($_POST['first_name'])
            && trim($_POST['first_name']) != ''
            && isset($_POST['last_name'])
            && trim($_POST['last_name']) != ''
        ) {

            $file = fopen($filename, 'a');

            $name = $_POST['first_name'] . ',' . $_POST['last_name'] . PHP_EOL;

            fwrite($file, $name);

            fclose($file);

            echo '<p>Įrašas įrašytas sėkmingai</p>';
        }

    ?>

    <form action="" method="POST">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name" required>
        <br>
        <label for="last_name_field">Pavardė: </label>
        <input id="last_name_field" type="text" name="last_name" required>
        <br>
        <button>Pateikti</button>
    </form>

    <?php

        $file = fopen($filename, 'r');

        $size = filesize($filename);
        $fileContent = nl2br(fread($file, $size));

        fclose($file);

        echo '<ul>';

            foreach (array_filter(explode('<br />', $fileContent)) as $name) {
                
                if (!empty(trim($name))) {
                    echo '<li>' . $name . '</li>';
                }
            }

        echo '</ul>';
    ?>
    
</body>
</html>
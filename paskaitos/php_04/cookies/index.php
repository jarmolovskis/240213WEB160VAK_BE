<?php

    setcookie('name', 'Kazimiras', time() + 3600, '/', '', 0);
    setcookie('age', 105, time() + 3600, '/', '', 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if (isset($_COOKIE['name'])) {

            echo $_COOKIE['name'];
        }

    ?>
    
</body>
</html>
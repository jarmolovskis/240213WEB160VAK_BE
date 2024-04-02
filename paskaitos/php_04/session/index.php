<?php

    session_start();

    $_SESSION['vardas'] = 'Kazimiras';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Pagrindinis puslapis</h1>

    <p>
        <a href="page.php">Vidinis puslapis</a>
    </p>

    <?php

        echo $_SESSION['vardas'];
    ?>
    
</body>
</html>
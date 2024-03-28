<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 001 - sprendimas </title>
</head>

<body>

    <?php
    $salis = 'Lietuva';
    $miestas = 'Vilnius';
    ?>

    <p><?php echo $miestas; ?> - Lietuvos sostinė</p>
    <p><?php echo $miestas  . ' - Lietuvos sostinė'; ?></p>
    <p><?php echo "$miestas ir $salis sparčiai auga."; ?></p>

</body>

</html>
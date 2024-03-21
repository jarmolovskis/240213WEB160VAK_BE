<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $x = 7;
    $y = 10;
    $sudetis = $x + $y;
    $atimtis = $x - $y;
    $sandauga = $x * $y;
    $dalyba = $x / $y;
    $liekana = $x % $y;
?>

<p><?php echo "$x + $y = $sudetis"; ?></p>
<p><?php echo "$x - $y = $atimtis"; ?></p>
<p><?php echo "$x * $y = $sandauga"; ?></p>
<p><?php echo "$x / $y = $dalyba"; ?></p>
<p><?php echo "$x % $y = $liekana"; ?></p>

<p><?php echo "$x + $y = " . ($x + $y); ?></p>

</body>
</html>
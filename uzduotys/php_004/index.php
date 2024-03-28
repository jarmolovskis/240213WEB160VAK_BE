<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 004</title>
</head>
<body>
    <?php
    $cities = [
        'Berlynas',
        'Roma',
        'Londonas',
        
    ];
    $cities[] = 'Tokijas';
    $cities2 = [
        'tokijas' => 13.5,
        'vasingtonas' => 0.6,
        'maskva' => 11.5,
    ];
    $cities2['londonas'] = 8.6;
    print_r($cities2);
    print_r($cities);
    ?>
    <ul>
        <?php
        echo "<li>$cities[1]</li>";
        ?>
    </ul>
    <ul>
        <li>
            <?php 
            echo 'Gyventoju skaicius: ' . $cities2['tokijas'] . ' mln.';
            ?>
        </li>
    </ul>
</body>
</html>
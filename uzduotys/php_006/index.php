<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija'],
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
    $metai = 1760;

    if ($metai >= $cities3['Vasingtonas'][1]) {
        echo 'Vašingtonas yra JAV sostinė.';
    } else if ($metai == 1774) {
        echo 'JAV sostinė vis dar Filadelfijoje.';
    } else {
        $rezultatas = $cities3['Vasingtonas'][1] - $metai;
        echo "Liko $rezultatas metai (-ų) iki Vašingtono įkūrimo.";
    }

    ?>

</body>

</html>
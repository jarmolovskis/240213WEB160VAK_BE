<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 02</title>
</head>
<body>

    <h1><?php echo 'PHP Paskaita 02 - Masyvai'; ?></h1>

    <p>Tomas</p>
    <p>Pavelas</p>
    <p>Kazimiras</p>

    <?php

        $susirinkusieji = ['Tomas', 'Dovilė', 'Pavelas', 'Donatas', 'Vytautas', 'Kazimiras'];
        // $masyvas = array();

        // Pridėti į masyvą naują reikšmę
        $susirinkusieji[] = 'Paulius';

        print_r($susirinkusieji);

        echo '<br>';

        echo $susirinkusieji[4];

        // Priskiriam naują reikšmę masyve pagal indeksą
        $susirinkusieji[5] = 'Rasa';

        echo '<br>';

        print_r($susirinkusieji);


        $darbuotojai = [
            'Kazimiras' => 'Jarmolovskis',
            'Petras' => 'Petraitis',
            'Jonas' => 'Jonaitis',
        ];

        echo '<br>';
        print_r($darbuotojai);
        echo '<br>';
        echo $darbuotojai['Kazimiras'];
        $darbuotojai['Jonas'] = 'Kazlauskas';
        echo '<br>';
        print_r($darbuotojai);

        // Masyvas asociatyvaus masyvo viduje
        $zaidimai = [
            'lauko_zaidimai' => ['Tinklinis', 'Tenisas', 'Futbolas'],
            'vidaus_zaidimai' => ['Krapšinis', 'Badmintonas', 'Rankinis'],
        ];

        // [
        //     [
        //         'vardas' => 'Kazimiras',
        //         'pavarde' => 'Jarmolovskis',
        //     ],
        //     [
        //         'vardas' => 'Petras',
        //         'pavarde' => 'Petraitis',
        //     ],
        //     [
        //         'vardas' => 'Jonas',
        //         'pavarde' => 'Jonaitis',
        //     ]
        // ];

        echo '<br>';
        // Išvedam masyvą pagal asociatyvaus masyvo indeksą
        print_r($zaidimai['lauko_zaidimai']);

        echo '<br>';
        // Išvedam Reikšmę pagal asociatyvaus masyvo ir paprasto masyvo indeksą
        print_r($zaidimai['lauko_zaidimai'][2]);

        // Pridedam masyvo reikšmę į asociatyvaus masyvo masyvą
        $zaidimai['vidaus_zaidimai'][] = 'Šachmatai';

        echo '<br>';
        print_r($zaidimai);

        echo '<br>';
        // Skaiciujame kiek masyve yra elementų
        echo count($zaidimai['lauko_zaidimai']);

        echo '<br>';
        // Sujungiame masyvo elementus i viena tekstine eilutę su implode funkcija.
        echo implode(' - ', $zaidimai['vidaus_zaidimai']);
        echo '<br>';
        echo 'Mano mėgstamiausi lauko žaidimai yra ' . implode(', ', $zaidimai['lauko_zaidimai']) . '.';

        // Išskaidom sakinio zodzius i masyvo elementus su explode funkcija.
        $sakinioZodziai = explode(' ', 'Mano vardas Petras');
        echo '<br>';
        print_r($sakinioZodziai);

        echo '<br>';
        
        // Atsitiktine tvarka pakeicia elementų eilės tvarką
        $skaiciai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C'];
        shuffle($skaiciai);
        print_r(implode('', $skaiciai));


        echo '<br>';

        // Rikiuoja elementus pagal abėcėlę.
        asort($susirinkusieji);
        print_r($susirinkusieji);

        echo '<br>';

        rsort($susirinkusieji);
        print_r($susirinkusieji);

        
        echo '<br>';
        // Iškerpu tam tikrą mayvo dalį
        $pirmiDu = array_slice($susirinkusieji, 0, 2);

        print_r($pirmiDu);

        echo '<br>';
        // Iškerpu tam tikrą mayvo dalį
        $paskutiniaiDu = array_slice($susirinkusieji, -2, 2);

        print_r($paskutiniaiDu);

        
        echo '<br>';

        // Įterpti masyvo lementą į konkrečią vietą:
        $naujasMasyvas = array_merge(
            array_slice($susirinkusieji, 0, 3),
            ['Kazimiras'],
            array_slice($susirinkusieji, -4, 4),
        );

        print_r($naujasMasyvas);
    ?>
    
</body>
</html>
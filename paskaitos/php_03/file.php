<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $filename = 'failas.txt';
        $file = fopen($filename, 'a');

        $tekstas = "Kazimiras Jarmolovskis\n";
        // PHP_EOL - (End Of Line) naujos linijos konstanta, dažniausiai - \n
        fwrite($file, $tekstas);

        $tekstas = "Petras Petraitis\n";
        fwrite($file, $tekstas);

        fclose($file);


        $file = fopen($filename, 'r');

        $size = filesize($filename);

        echo $size;
        echo '<br><br>';

        $failoTurinys = fread($file, $size);

        echo nl2br($failoTurinys);



        fclose($file);
    ?>
    
</body>
</html>
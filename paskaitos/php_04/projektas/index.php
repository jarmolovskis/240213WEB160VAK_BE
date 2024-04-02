<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Projekto pagraindinis puslapis</h1>

    <?php

        $dir = 'images/';

        // Open a directory, and read its contents
        if (is_dir($dir)) {

            $images = opendir($dir);
            
            if (!empty($images)) {

                while (($file = readdir($images)) !== false) {

                    if ($file != '.' && $file != '..') {
                        echo '<img src="' . $dir . $file .'">';
                    }
                }

                closedir($images);
            }

        } else {

            echo 'Direktorija neegzistuoja';
        }

    ?>








    <?php

    $filename = 'apmokejimas.txt';
    $file = fopen($filename, 'r');
    $size = filesize($filename);
    $failoTurinys = fread($file, $size);
    fclose($file);

    if (date('y-m-d') >= '24-04-02' && $failoTurinys == 0 ) {
        echo '<h2>Svetainės savininkas piktybiškai nesumoka už paslaugas!</h2>';
    }

    ?>

</body>
</html>
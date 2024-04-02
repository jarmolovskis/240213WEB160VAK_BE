<?php



    $filename = 'apmokejimas.txt';
    $file = fopen($filename, 'w');
    fwrite($file, $_GET['ar_apmokejo']);
    fclose($file);

?>
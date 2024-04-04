<?php

    define('ORIGIN_DATE', '1745');

    function randomImageUrl($width = '300', $height = '300') {

        $id = rand(1, 500);

        return "https://picsum.photos/id/$id/$width/$height";
    }

?>
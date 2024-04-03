<?php

    class Car {
        public $gamintojas;
        public $spalva = 'geltona';
        public $atsarginisRatas = true;
        public $bakoTuris = 60;
        public $degalai = 0.5;
        public $sanaudos = 6;
        private $rida = 0;

        public function __construct(
            $gamintojas,
            $spalva,
            $atsarginisRatas,
            $bakoTuris,
            $degalai,
            $sanaudos
        ) {
            $this->gamintojas = $gamintojas;
            $this->spalva = $spalva;
            $this->atsarginisRatas = $atsarginisRatas;
            $this->bakoTuris = $bakoTuris;
            $this->degalai = $degalai;
            $this->sanaudos = $sanaudos;
        }

        public function prisipiltiDegalu()
        {
            echo '<br>glum..glum..glum';
            $this->degalai = 1;

            return $this;
        }

        public function vaziuoti($atstumas)
        {
            echo '<br>vrum..vrum..vaziuojam..';

            $this->rida = $this->rida + $atstumas;

            $sudegintiDegalai = $atstumas / 100 * $this->sanaudos;
            $likeDegalai = $this->bakoTuris - $sudegintiDegalai;

            if ($likeDegalai < 0) {
                echo '<br>Neužteko degalų.';

                $this->degalai = 0;

                // Early return. Kas reišikia nutraukiam metodo vykdymą.
                return $this;
            }

            $this->degalai = $likeDegalai / $this->bakoTuris;

            return $this;
        }

        public function degaluLikutis()
        {
            echo '<br>Liko ' . round($this->degalai * 100) . '% dagalų';

            return $this;
        }

        public function rida()
        {
            echo '<br>Automobilio rida: ' . $this->rida . 'km.';

            return $this;
        }

        public function nustatytiRida($rida)
        {
            $this->rida = $rida;

            return $this;
        }
    }


    $bmw = new Car('BMW', 'oranžinė', false, 70, 0.78, 11);
    $volvo = new Car('Volvo', 'žalia', true, 75, 0.5, 8);

    print_r($bmw);
    echo '<br>';
    print_r($volvo);
    echo '<br>';

    $bmw->spalva = 'balta';
    $volvo->spalva = 'juoda';

    echo $volvo->spalva;
    echo '<br>';
    echo $bmw->spalva;
    echo '<br>';

    $bmw->prisipiltiDegalu();
    echo '<br>';

    print_r($bmw);
    echo '<br>';

    $bmw->vaziuoti(200);
    echo '<br>';

    $bmw->degaluLikutis();
    echo '<br>';

    $bmw->vaziuoti(10000);
    echo '<br>';

    $bmw->degaluLikutis();

    echo '<br>';
    $bmw->prisipiltiDegalu();
    echo '<br>';

    echo 'Pritaikom chaining`ą:';
    echo '<br>';

    $bmw
        ->vaziuoti(200)
        ->vaziuoti(500)
        ->degaluLikutis()
        ->prisipiltiDegalu()
        ->vaziuoti(1000)
        ->degaluLikutis();

    echo '<br>';

    $bmw->nustatytiRida(0);
    $bmw->rida();

    echo '<br><br>';

    print_r($bmw);


    // $galerija
    //  ->pridetiNautrauka('http://picsum.photos/300')
    //  ->pridetiNautrauka('http://picsum.photos/300')
    //  ->pridetiNautrauka('http://picsum.photos/300')
    //  ->pridetiNautrauka('http://picsum.photos/300')
    //  ->pridetiNautrauka('http://picsum.photos/300')
    //  ->atvaizduotiGalerija();

    // $response = $requestBuilder
    //     ->url('https://uzklausos-adresas.lt')
    //     ->params(['category' => 'clothes', 'perPage' => 20, 'page' => 3])
    //     ->fetch();

    // $response
?>
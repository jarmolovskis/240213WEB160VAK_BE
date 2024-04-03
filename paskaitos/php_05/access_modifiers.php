<?php

    class Automobilis {
        public $ratuSkaicius = 4;
        private $privateProperty = 'value';
        protected $protectedProperty = 'value';

        public function getOriginalPrivateProperty() {
            echo $this->privateProperty;
        }

        public function getOriginalProtectedProperty() {
            echo $this->protectedProperty;
        }
    }

    class BmwAutomobilis extends Automobilis {
        public $rwd = true;
        private $privateBmwProperty = 'value';
        protected $protectedBmwProperty = 'value';
    }

    class ToyotaAutomobilis extends Automobilis {
        public $rwd = false;
        private $privateToyotaProperty = 'value';
        protected $protectedToyotaProperty = 'value';

        public function getPrivateToyotaProperty() {
            echo $this->privateToyotaProperty;
        }

        public function getProtectedToyotaProperty() {
            echo $this->protectedToyotaProperty;
        }

        public function getPrivateProperty() {
            echo $this->privateProperty;
        }

        public function getProtectedProperty() {
            echo $this->protectedProperty;
        }
    }

    $justCar = new Automobilis();
    $bmwCar = new BmwAutomobilis();
    $toyotaCar = new ToyotaAutomobilis();

    print_r($bmwCar);
    echo '<br>';
    print_r($toyotaCar);

    echo '<br>';
    echo $toyotaCar->ratuSkaicius;
    // Galim uz klases ribų pasiekti tik public ypatybes arba metodus

    // echo '<br>';
    // echo $toyotaCar->privateToyotaProperty;
    // Gaunu error'ą

    // echo '<br>';
    // echo $toyotaCar->protectedToyotaProperty;
    // Gaunu error'ą

    echo '<br>';
    echo $toyotaCar->getPrivateToyotaProperty();
    // Veikia nes metodas public

    echo '<br>';
    echo $toyotaCar->getProtectedToyotaProperty();
    // Veikia nes metodas public

    // echo '<br>';
    // echo $toyotaCar->getPrivateProperty();
    // Erroras nes nors metodas ir public, bet ypatybe privateProperty paveldimoj klasej yra private tipo

    echo '<br>';
    echo $toyotaCar->getProtectedProperty();
    // Veikia nes metodas public ir ypatybe protectedProperty paveldimoj klasej yra protected tipo

    echo '<br>';
    echo $justCar->getOriginalPrivateProperty();
    // Veikia nes metodas public, o ypatybe privateProperty toj pacioj klasej

    echo '<br>';
    echo $justCar->getOriginalProtectedProperty();
    // Veikia nes metodas public, o ypatybe protectedProperty toj pacioj klasej
?>



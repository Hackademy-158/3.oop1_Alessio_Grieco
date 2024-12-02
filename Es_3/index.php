<?php
class Car {
    private $num_telaio;

    public function __construct($num_telaio) {
        $this->num_telaio = $num_telaio;
    }


    protected function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Opel extends Car {
    protected $name;
    protected $license;     

    public function __construct($num_telaio, $name, $license) {

        parent::__construct($num_telaio);
        $this->name = $name;
        $this->license = $license;
    }


    public function describeCar() {
        $numTelaio = $this->getNumTelaio(); 
        echo "La mia macchina è $this->name, con targa $this->license e numero di Telaio $numTelaio.\n";
    }
}


$car = new Opel("1234", "ND 123 OJ", "Opel");

$car->describeCar();


?>
<?php
class Animal {
    protected $category;
    public function construct($category){
        $this->category = $category;

    }
    public function presentazioneAnimale(){
        echo "Siamo animali $this->category";
    }

}

class WarmBlooded extends Animal{
    protected $blood;
    protected $species;

    public function __construct($blood,$species){
            $this->blood = $blood;
            $this->species = $species;
    }
    public function sangueCaldo(){
        echo "e se abbiamo il $this->blood siamo $this->species";
    }

}

class ColdBlooded extends Animal{
    protected $blood;
    protected $species;

    public function __construct($blood,$species){
            $this->blood = $blood;
            $this->species = $species;
    }
    public function sanguefreddo(){
        echo "Se siamo animali a $this->blood siamo $this->species";
    }

}


class Fish extends Animal{
    protected $blood;
    protected $species;

    public function __construct($blood,$species){
            $this->blood = $blood;
            $this->species = $species;
    }
    public function pesce(){
        echo "Poi ci sono io che sono un animale a $this->blood e sono un $this->species.....splash! ";
    }

}




$Animal = new Animal ('vertebrati');
$Animal->presentazioneAnimale();

$warmBlooded = new warmBlooded ('sangue caldo', "mammiferi e uccelli. ");
$warmBlooded->sangueCaldo();

$coldBlooded = new coldBlooded ('sangue freddo', 'rettili e anfibi. ');
$coldBlooded->sanguefreddo();

$fish = new Fish ('sangue freddo', 'pesce');
$fish->pesce();
?>
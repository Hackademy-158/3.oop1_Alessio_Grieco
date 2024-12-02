    <!-- Utilizza i principi di OOP ed Ereditarietà per creare una struttura a classi come la seguente:

    +-|Continent
    +-----------|Country
    +--------------------|Region
    +---------------------------|Province
    +------------------------------------|City
    +------------------------------------------|Street
    Ogni classe avrà un attributo public del tipo:
    $nameContinent:
    $nameCountry;
    $nameRegion;
    $nameProvince;
    $nameCity;
    $nameStreet;
    La prima classe genitore avrà la seguente struttura:
    class Continent
    {
    public $nameContinent;
    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
    }
    Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“ -->

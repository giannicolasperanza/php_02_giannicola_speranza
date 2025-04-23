<?php


// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//     ['name' => 'Luca', 'surname' => 'Gino', 'gender' => 'M'],
//     ['name' => 'Laura', 'surname' => 'Laurenti', 'gender' => 'F'],
//     ['name' => 'Gianni', 'surname' => 'Calenda', 'gender' => 'M'],
//  ];

//  foreach ($users as $user){
//     if($user['gender'] == 'F'){
//         echo 'Buongiorno Sig.ra' . " " . $user['name'] . " " . $user['surname'] . " \n" ;
//     }elseif($user['gender'] == 'M'){
//         echo 'Buongiorno Sig.' . " " . $user['name'] . " " . $user['surname'] . " \n"  ;

//     }else{
//         echo 'Buongiorno' . " " . $user['name'] . " " . $user['surname']. " \n"  ;
        
//     }
// }

// fine primo esercizio



// secondo esercizio

// $numbers = [10, 7, 6, 4, 12, 9, 3];
// $count = 0;
// $sum = 0;

// foreach ($numbers as $number){
//     if(($number % 2) === 0){
//         $sum = $sum + $number;
//         $count++;

//     }

// }
// echo $sum / $count; 

// fine secondo esercizio


// inizio terzo esercizio

// for ($i=1; $i <= 100 ; $i++) { 
//     if($i % 3 == 0 && $i % 5 == 0){
//         echo "HACKADEMY\n";
//     }elseif ($i % 5 == 0) {
//         echo "JAVASCRIPT\n";
//     }elseif ($i % 3 == 0) {
//         echo "PHP\n";
//     }else{
//         echo $i ."\n";
//     }
// }

// fine terzo esercizio 
// inizio quarto esercizio



// Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:
// +-|Continent
// +-----------|Country
// +--------------------|Region
// +---------------------------|Province
// +------------------------------------|City
// +------------------------------------------|Street

// class Continent
// {
//   public $nameContinent;
  
//   public function __construct($continent)
//   {
//     $this->nameContinent = $continent;
//   }
  
// }

// class Country extends Continent{
//     public $nameCountry;

//     public function __construct($continent, $country){
//     parent::__construct($continent);
//     $this->nameCountry = $country;
// }
// }

// class Region extends Country{

//     public $nameRegion;

//     public function __construct($continent, $country,$region){
//         parent::__construct($continent, $country);
//         $this->nameRegion = $region;
//     }
// }

// class Province extends Region{
//     public $nameProvince;

//     public function __construct($continent, $country,$region, $province){
//     parent:: __construct($continent, $country, $region);
//     $this->nameProvince = $province;
// }
// }


// class City extends Province{
//     public $nameCity;

//     public function __construct($continent, $country,$region, $province,$city){
//     parent:: __construct($continent, $country, $region,$province); 
//     $this->nameCity = $city;

//     }
// }


// class Street extends City{
//     public $nameStreet;

//     public function __construct($continent, $country,$region, $province,$city,$street){
//         parent:: __construct($continent, $country, $region,$province,$city); 
//         $this->nameStreet  =$street;

//     }
    
//     public function getMyCurrentLocation(){
//         echo "Mi trovo in " . $this->nameContinent . ", " . $this->nameCountry . ", " . $this->nameRegion . ", " .$this->nameProvince . ", " . $this->nameCity . ", " . $this->nameStreet . ".";
//     }
// }

// $myLocation = new Street ("Europa", "Italia", "Puglia","BA","Bari","Strada San Giorgio Martire 2D");

// $myLocation->getMyCurrentLocation();

// fine quarto esercizio 


// inizio quinto esercizio

class Vertebrati{
    
    public function __construct(){
        $this->stampaVertebrati();
    }

    protected function stampaVertebrati(){
        echo "Sono un animale Vertebrato  \n";
    }
}

class SangueCaldo extends Vertebrati{

    public function __construct(){
        parent::__construct();
        $this->stampaSangueCaldo();
    }

    protected function stampaSangueCaldo(){
        echo "Sono un animale a Sangue caldo \n";
    }
}

class Mammiferi extends SangueCaldo{

    public function __construct(){
        parent::__construct();
        $this->stampaMammiferi();
    }

protected function stampaMammiferi(){
        echo "Sono un Mammifero \n";
    }
}

class Uccelli extends SangueCaldo{
    
    public function __construct(){
        parent::__construct();
        $this->stampaUccelli();
    }
    
    protected function stampaUccelli(){
        echo "Sono un Uccello \n";
    }
}




class SangueFreddo extends Vertebrati{
    public function __construct(){
        parent::__construct();
        $this->stampaSangueFreddo();
    }
    
    protected function stampaSangueFreddo(){
        echo "Sono un animale a Sangue Freddo \n";
    }
}

class Pesci extends SangueFreddo{
    public function __construct(){
        parent::__construct();
        $this->stampaPesci();
    }
    
    protected function stampaPesci(){
        echo "Sono un Pesce \n";
    }
}

class Rettili extends SangueFreddo{
    public function __construct(){
        parent::__construct();
        $this->stampaRettili();
    }
    
    protected function stampaRettili(){
        echo "Sono un Rettile \n";
    }
}

class Anfibi extends SangueFreddo{
    public function __construct(){
        parent::__construct();
        $this->stampaAnfibi();
    }
    
    protected function stampaAnfibi(){
        echo "Sono un Amfibio \n";
    }
}

$piccione = new Uccelli();

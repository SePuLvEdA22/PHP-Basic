<?php
declare(strict_types=1);

class SuperHero {
    // Propiedades y los metodos.
    // public $name;
    // public $powers;
    // public $planet;

    // Promoted properties -> PHP 8
    public function __construct( 
        // public readonly string $name, // Solo lectura.
        private string $name, 
        public array $powers,
        public string $planet
        ){
        }

        
        public function attack ()
        {
            return "$this->name ataca con sus poderes"; 
        }
        
        public function show_all()
        {
            return get_object_vars($this);
        }
        
        public function description ()
        {
            $powers = implode(", ", $this->powers);
            return "$this->name es un superheroe que viene de $this->planet 
            y tiene los siguientes poderes: $powers";
        }

        public static function random() 
        {
            $names = ["Batman", "Superman", "Wonder", "Spiderman", "Flash"];
            $powers = [
                ["Millonario", "Fuerza", "Inteligencia"],
                ["Vuelo", "Velocidad", "Fuerza"], ["Inteligencia", "Velocidad"], 
                ["Agilidad", "Fuerza"], 
                ["Velocidad"]];
            $planets = ["Tierra", "Marte", "Venus", "Jupiter", "Saturno"];
    
            $name = $names[array_rand($names)];
            $power = $powers[array_rand($powers)];
            $planet = $planets[array_rand($planets)];
            
            return new self($name, $power, $planet);
        }
    }

// estatico
$hero = SuperHero::random(); // metodo estatico
echo $hero->description(); // Metodo publico

// instanciar
$hero = new SuperHero("Batman", ["Inteligencia", "Fuerza"], "Tierra");
//$hero->description(); // Metodo publico
// var_dump($superHero1->show_all());
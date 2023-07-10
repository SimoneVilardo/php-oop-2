<?php
    // Definizione della classe "Game" che eredita dalla classe "Products"
    class Game extends Products {
        public $featurs; // Caratteristiche del gioco
        public $dimension; // Dimensioni del gioco

        // Costruttore della classe
        public function __construct($_image, $_name, $_type, $_price, $featurs, $dimension){
            // Chiamata al costruttore della classe genitore "Products"
            parent::__construct($_image, $_name, $_type, $_price);

            $this->featurs = $featurs; // Inizializzazione delle caratteristiche del gioco
            $this->dimension = $dimension; // Inizializzazione delle dimensioni del gioco
        }
    }
?>
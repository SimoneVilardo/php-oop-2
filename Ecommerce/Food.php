<?php
    // Definizione della classe "Food" che eredita dalla classe "Products"
    class Food extends Products {
        public $weight; // Peso del cibo
        public $ingredients; // Ingredienti del cibo

        // Costruttore della classe
        public function __construct($_image, $_name, $_type, $_price, $weight, $ingredients){
            // Chiamata al costruttore della classe genitore "Products"
            parent::__construct($_image, $_name, $_type, $_price);

            $this->weight = $weight; // Inizializzazione del peso del cibo
            $this->ingredients = $ingredients; // Inizializzazione degli ingredienti del cibo
        }
    }
?>
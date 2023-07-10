<?php

    // Definizione della classe "Objects" che eredita dalla classe "Products"
    class Objects extends Products {
        public $materials; // Materiali degli oggetti
        public $dimension; // Dimensioni degli oggetti

        // Costruttore della classe
        public function __construct($_image, $_name, $_type, $_price, $materials, $dimension){
            // Chiamata al costruttore della classe genitore "Products"
            parent::__construct($_image, $_name, $_type, $_price);

            $this->materials = $materials; // Inizializzazione dei materiali degli oggetti
            $this->dimension = $dimension; // Inizializzazione delle dimensioni degli oggetti
        }
    }
?>
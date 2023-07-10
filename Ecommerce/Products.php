<?php
    // Definizione della classe "Products"
    class Products {
        public $image; // Immagine del prodotto
        public $name; // Nome del prodotto
        public $type; // Tipo di prodotto
        public $price; // Prezzo del prodotto

        // Costruttore della classe
        function __construct($image, $name, $type, $price){
            $this->image = $image; // Inizializzazione dell'immagine del prodotto
            $this->name = $name; // Inizializzazione del nome del prodotto
            $this->type = $type; // Inizializzazione del tipo di prodotto
            $this->price = $price; // Inizializzazione del prezzo del prodotto
        }
    } 
?>
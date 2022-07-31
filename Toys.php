<?php
     require_once __DIR__  . '/AnimalProduct.php';
     require_once __DIR__  . '/LatestProduct.php';


     class Toys extends AnimalProduct {

        public $brand = 'Nature'; 

        use LatestProduct;

        public function getInfo(){
            return "La categoria del prodotto è $this->category e la taglia del prodotto è $this->size, come brand trovimo $this->brand. Il prezzo del prodotto è di $this->price $. ";
        }

     }

     

?>
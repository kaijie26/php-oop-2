<?php
     require_once __DIR__  . '/AnimalProduct.php';

     class Kennel extends AnimalProduct {

        public $brand = 'VivaMare';

        public function getInfo(){
            return "La categoria del prodotto è $this->category e la taglia del prodotto è $this->size, come brand trovimo $this->brand. Il prezzo del prodotto è di $this->price $. ";
        }

     }

     

?>
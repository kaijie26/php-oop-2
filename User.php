<?php

    class User {
        public $discount = 0;

        public $email;

        public $name;

        protected $userProduct = [];

        public function __construct($_name){

            $this->name = $_name;
        }

        public function getProduct($product){
            $this->userProduct[] = $product;

        }

        public function getProductInfo(){
            return $this->userProduct;

        }

        public function calculateTotalPrice(){

            // Calcolo la somma dei prodotti aggiunti nel array
            $sumTotal = 0;
            foreach($this->userProduct as $product){
                $sumTotal += $product->price;

            }

            // Apply Discount
            $sumTotal -= $sumTotal * $this->discount / 100;

            return $sumTotal;
  
        }

    }

?>
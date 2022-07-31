<?php

    require_once __DIR__  . '/User.php';

    class PrepaidCard extends User {

        public $avaibleBalance;

        public $name;

        public $numberCard;
        
        public $cvv;

        public function __construct($_name, $_numberCard, $_cvv){
            $this->name = $_name;
            $this->numberCard = $_numberCard;
            $this->cvv = $_cvv;

        }


    }

?>


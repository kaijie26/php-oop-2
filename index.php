<?php

     require_once __DIR__  . '/Food.php';
     require_once __DIR__  . '/Toys.php';
     require_once __DIR__  . '/Kennel.php';

     $dogFood = new Food (1, 'Dog', 'Small',);
     $catToys = new Toys (5, 'Cat', 'Medium', );
     $fishKennel = new Kennel (20, 'Fish', 'Large', );

     var_dump($dogFood->getInfo());
     var_dump($catToys->getInfo());
     var_dump($fishKennel->getInfo());
     
?>
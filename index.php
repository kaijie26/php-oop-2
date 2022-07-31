<?php

     require_once __DIR__  . '/Food.php';
     require_once __DIR__  . '/Toys.php';
     require_once __DIR__  . '/Kennel.php';
     require_once __DIR__  . '/AnonimousUser.php';
     require_once __DIR__  . '/SubscibedUser.php';
     require_once __DIR__  . '/PrepaidCard.php';
     // Dog Food
     $dogFood = new Food (1, 'Dog', 'Small',);
     // Cat Toys con aggiunta del trait
     $catToys = new Toys (5, 'Cat', 'Medium', );
     $catToys->newProduct = 'New Product';
     // Fish Kennel
     $fishKennel = new Kennel (20, 'Fish', 'Large', );
     // Users
     $AnonimousUser = new AnonimousUser('AnonimousUser');
     $SubscibedUser = new SubscibedUser('SubscibedUser');


    //  var_dump($dogFood->getInfo());
    //  var_dump($catToys->getInfo());
    //  var_dump($fishKennel->getInfo());
     $SubscibedUser->getProduct($dogFood);
     $SubscibedUser->getProduct($catToys);
     $AnonimousUser->getProduct($dogFood);
     $AnonimousUser->getProduct($catToys);

     var_dump( "Il totale con lo sconto è di" . ' ' . $SubscibedUser->calculateTotalPrice() . ' ' . '$'  );
     var_dump( "Il totale senza lo sconto è di" . ' ' .  $AnonimousUser->calculateTotalPrice() . ' ' . '$' );

     $prepaidCard = new PrepaidCard ('John Doe', '567890', '123');
     $prepaidCard->avaibleBalance = 0;

     try {

          if($SubscibedUser->makePayment($prepaidCard) === 'ok'){
               echo "GRAZIE PER L'AQUISTO";
          }

     } catch (Exception $e) {

          // Salvo l'errore nel log per un fine di utilità nel rintracciamento
          error_log($e->getMessage());

          // Stampo in pagina il messagio d'errore per l'utente
          echo "MI DISPIACE, L'OPERAZIONE NON è ANDATA A BUON FINE";
     }
     

     
        
        

     

?>
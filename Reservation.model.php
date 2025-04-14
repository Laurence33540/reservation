<?php

//déclaration d'une propriete
class reservation {

 public $name;

 public $place;

 public $startDate;

 public $endDate;

 public $totalPrice;

 public $nightPrice;

 public $status;

 public $bookedAt;

 public $cleaningOption;
}


 $reservation = new reservation();

 //récupération de la valeur.
 $reservation->name = "Laurence";
 $reservation->place= "Château de Chambord";
 $reservation->startDate = new DateTime("25.04.14");
 $reservation->endDate = new DateTime("25.05.18");
 $reservation->cleaningOption = true;

 $reservation->nightPrice = 1000;
 
 // valeurs calculées automatiquement
 $totalPrice = (($reservation->endDate->getTimestamp() - $reservation->startDate->getTimestamp()) / (3600 * 24) * $reservation->nightPrice) + 5000;
 
 $reservation->totalPrice = $totalPrice;
 $reservation->bookedAt = new DateTime();
 $reservation->status = "CART";
 
 
 var_dump($reservation); 
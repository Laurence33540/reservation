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

 // contient toute la structure de la reservation. je tape le code une fois et je l'utilise plusieurs fois.
public function _construct($name, $place, $startDate, $endDate, $cleaningOption) {


 //récupération de la valeur.
 $this->name = "Laurence";
 $this->place= "Château de Chambord";
 $this->startDate = new DateTime("25-04-14");
 $this->endDate = new DateTime("25-05-18");
 $this->cleaningOption = true;

 $this->nightPrice = 1000;
 
 // valeurs calculées automatiquement
 $totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;
 
 //Affectation de la valeur à la prorieté
 $this->totalPrice = $totalPrice;
 $this->bookedAt = new DateTime();
 $this->status = "CART";

//j'ajoute des paramètres à la classe reservation
$name = "Laurence";
$place = "château deChambord";
$startDate = new DateTime('2025-04-04');
$endDate= new DateTime('2025-04-05');
$cleaningOption= true;
}
}
//Je crée l'instance de classe avec les propriétés en faisant une nouvelle réservation
$reservation = new Reservation("$name", "$place","$startDate","$endDate","$cleaningOption");

 var_dump($reservation);   
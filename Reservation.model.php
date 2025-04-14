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
public function _construct() {


 //récupération de la valeur.
 $this->name = "Laurence";
 $this->place= "Château de Chambord";
 $this->startDate = new DateTime("25-04-14");
 $this->endDate = new DateTime("25-05-18");
 $this->cleaningOption = true;

 $this->nightPrice = 1000;
 
 // valeurs calculées automatiquement
 $totalPrice = (($this->endDate->getTimestamp() - $this->startDate->getTimestamp()) / (3600 * 24) * $this->nightPrice) + 5000;
 
 $this->totalPrice = $totalPrice;
 $this->bookedAt = new DateTime();
 $this->status = "CART";
}

}
$reservation = new Reservation();

 var_dump($reservation); 
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

    public $cancelAt;

    public $paidAt;

    public $commentAt;

    public $comment;


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
    }

    //je redige mon statut en carte, et si c'est payé le statut est annulé. 
    public function cancel() {
        if($this->status==="cart") {
           $this->status="CANCELED";
           $this->cancelAt=new DateTime;
        }
    }

    // méthode pay pour la reseravation et stocker dans une propriete dans laquelle le paiement à été fait
    public function pay(){
        if ($this ->status === "cart") {
            $this->paidAt= new DateTime;
            $this ->status = "paid";
        }
    }

    // méthode leavecomment stockée dans une propriete "comment" et stocker dans une propriete à laquelle la date à été commenter
    public function leaveComment($userComment) {
        if($this->status === "paid") {
            $this->comment= $userComment;
            $this ->commentAt= "comment";
        }
    }
        
        
}

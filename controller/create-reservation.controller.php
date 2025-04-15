<?php 

require_once('../config.php');

require_once('../model/Reservation.model.php');

//je vérifie si le Formulaire a été envoyer
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Je récupère les données du formulaire
    $name = $_POST['name'];
    $place = $_POST['place'];
    $startDate= new DateTime($_POST['startDate']);
    $endDate= new DateTime($_POST['endDate']);

    //Je recupère la propriété cleaningOption pour gérer et transformez en booléen.
    if($_POST['cleaningOption']=== "on"){
        $cleaningOption =true;
    }else{
        $cleaningOption=false;
    }

    // Je crée une classe réservation
    $reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);

    //je reçois un message de confirmation pour validé le prix total de la réservation.
    $message = "Votre réservation est confirmée, au prix de " . $reservation->totalPrice;
}

require_once('../view/create-reservation.view.php');
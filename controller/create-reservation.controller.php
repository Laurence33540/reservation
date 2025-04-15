<?php 

require_once('../config.php');

require_once('../model/Reservation.model.php');
require_once('../model/reservation.repository.php');

$error =null;

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

    try {
		// je créé une réservation : une instance de classe, en lui envoyant les données attendues
		$reservation = new Reservation($name, $place, $startDate, $endDate, $cleaningOption);
        persistReservation($reservation);
        
	} catch(Exception $e) {
		$error = $e->getMessage();
	}	

}

//trouver la réservation de l'utilisateur
$reservationForUser = findReservationForUser();

require_once('../view/create-reservation.view.php');
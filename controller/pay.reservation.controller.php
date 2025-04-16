<?php

// j'importe mes fichiers pour la gestion de la réservation  
require_once('../config.php'); //inclure dans le fichier configuration
require_once('../model/Reservation.model.php'); //inclure dans le model réservation
require_once('../model/Reservation.repository.php');// inclure les données de réservation

//je récupère la réservation faite par l'utilisateur 
// je la stocke dans la variable
$reservationForUser=findreservationForUser();

//je vérifie si le Formulaire a été envoyer et je sauvegarde la réservation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $reservation->pay();
    persistReservation($reservation);
    $_session["reservation"] = $reservation;
}

$message= "votre réservation est payée.";

require_once ('../view/pay-reservation.view.php'); // inclure la vue de l'annulation de la réservation.
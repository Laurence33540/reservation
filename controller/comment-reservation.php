<?php 

require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/reservation.repository.php');

$error =null;

//je récupère la réservation faite par l'utilisateur 
// je la stocke dans la variable
$reservationForUser=findreservationForUser();

//je vérifie si le Formulaire a été envoyer et je sauvegarde la réservation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $reservation->comment();
    persistReservation($reservation);
    $_session["reservation"] = $reservation;
}


require_once ('../view/comment-reservation.view.php');
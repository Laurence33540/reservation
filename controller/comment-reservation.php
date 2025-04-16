<?php 

require_once('../config.php');
require_once('../model/Reservation.model.php');
require_once('../model/reservation.repository.php');

$error =null;

//je récupère la réservation faite par l'utilisateur 
// je la stocke dans la variable
$reservationForUser=findreservationForUser();

require_once ('../view/comment-reservation.view.php');
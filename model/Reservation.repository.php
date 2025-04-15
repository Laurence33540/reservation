<?php

//je sauvegarde ma réservation et je la retrouve dans les cookies
function persistReservation($reservation){

    session_start();

    $_session["reservation"] = $reservation;

}

// trouver la reservation de l'utilisateur et la retourner.
function findreservationForUser() {

    session_start();

    return $_SESSION["reservation"];

}
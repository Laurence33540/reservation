<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

    <?php if (!is_null($error)) ?>

        <h1>votre réservation est payée</h1>

        <form method = POST>

        <form method=POST>
    
        <button type="submit">annuler une réservation</button>
    </form>

    <p>Ma réservation : </p>

    <p>nom : <?php echo $reservationForUser->name; ?>
    <p>place<?php echo $reservationForUser->place; ?></p>
    <p>dates<?php echo $reservationForUser->startDate->format('d,m,y'); ?> / <?php echo $reservationForUser->endDate->format('d,m,y'); ?></p>
    <p>totalPrice<?php echo $reservationForUser->totalPrice; ?></p>
    <p>cleaningOption<?php echo $reservationForUser->cleaningOption ? "oui" : "non"; ?></p>

    $message= "votre réservation est annulée"

    </main>
</body>
</html>
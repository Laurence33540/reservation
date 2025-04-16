<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Réservation</title>
</head>
<body>
    <main>

      <h1> créer ma réservation</h1>


<!--Je choisis des options pour la réservation p-->       

<form method = POST>


<label>Nom
      <input type ="text" name="Laurence">
</label>

<label>Lieu
			<select name="place">
				<option value="chateau-versailles">Château de Versailles</option>
				<option value="zad-limoges">ZAD de limoges</option>
				<option value="renault-clio">Renault Clio</option>
				<option value="maison-campagne">Maison de campagne</option>
			</select>
		</label>


</label>

<label>date de début
<input type="date" name="start-Date">
</label> 

<label>date de fin
  <input type="date" name="end-Date">
</label>

<label>ménage ?
  <input type="checkbox" name="cleaning-option">
</label>

<button type="submit">Créer ma réservation</button>

</form>

<!--vérication que la reservation est pas vide-->
<?php if (!is_null($error)) { ?>
  <p>La réservation n'a pas été effectuée : <?php echo $error; ?></p>
	<?php } ?>

  <?php if (!is_null($reservationForUser)) { ?>
    
<!-- je récapitule la réservation pour l'utilisateur-->
<div>
  <p>recap de la réservationForUser</p>
  <p>name<?php echo $reservationForUser->name; ?></p>
  <p>place<?php echo $reservationForUser->place; ?></p>
  <p>dates<?php echo $reservationForUser->startDate->format('d,m,y'); ?> / <?php echo $reservationForUser->endDate->format('d,m,y'); ?></p>
  <p>totalPrice<?php echo $reservationForUser->totalPrice; ?></p>
  <p>cleaningOption<?php echo $reservationForUser->cleaningOption ? "oui" : "non"; ?></p>
</div>

<?php } ?>

    </main>

</body>
</html>
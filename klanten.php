<!DOCTYPE html>
<html>

	<head>
		<meta content="nl" http-equiv="Content-Language" />
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
		<title>Zorg4you</title>
		<script src="js/function.js"></script>

		<?php
			include('inc/config.php');
			$klant = $db->query('SELECT * FROM Klanten ORDER BY klantnummer DESC');
		?>

	</head>

	<body>

		<?php include('inc/header.php'); ?>


		<form class="form-horizontal hidden" id="klant-form" method="post" action="inc/functions.php">
			<fieldset>

				<input id="form-type" name="action" placeholder="" class="form-control input-md" type="hidden">
        <input id="type" name="type" placeholder="" class="form-control input-md" type="hidden">

				<div class="form-group">
				<label class="col-md-4 control-label" for="voornaam">Voornaam</label>
				<div class="col-md-4">
				<input id="voornaam" name="voornaam" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="tussenvoegsel">Tussenvoegsel</label>
				<div class="col-md-4">
				<input id="tussenvoegsel" name="tussenvoegsel" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="achternaam">Achternaam</label>
				<div class="col-md-4">
				<input id="achternaam" name="achternaam" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="straatnaam">Straatnaam</label>
				<div class="col-md-4">
				<input id="straatnaam" name="straatnaam" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="huisnummer">Huisnummer</label>
				<div class="col-md-4">
				<input id="huisnummer" name="huisnummer" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="toevoeging">Toevoeging</label>
				<div class="col-md-4">
				<input id="toevoeging" name="toevoeging" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="postcode">Postcode</label>
				<div class="col-md-4">
				<input id="postcode" name="postcode" placeholder="0000AA" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="plaats">Plaats</label>
				<div class="col-md-4">
				<input id="plaats" name="plaats" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<input id="submit" type="submit" class="btn btn-primary" value="Toevoegen"/>
				</div>
				</div>

			</fieldset>
		</form>

		<table class="table-bordered">
			<th>Klantnummer</th>
			<th>Voornaam</th>
			<th>Tussenvoegsel</th>
			<th>Achternaam</th>
			<th>Straatnaam</th>
			<th>Huisnummer</th>
			<th>Toevoeging</th>
			<th>Postcode</th>
			<th>Plaats</th>
			<th colspan='2'> <button type ='button' onclick = 'showKlantForm()' class = 'btn btn-primary'>Toevoegen</button> </th>
				<?php foreach($klant as $row):extract($row);?>
					<tr>
						<td><?= $Klantnummer ?></td>
						<td><?= $Voornaam ?></td>
						<td><?= $Tussenvoegsel ?></td>
						<td><?= $Achternaam ?></td>
						<td><?= $Straatnaam ?></td>
						<td><?= $Huisnummer ?></td>
						<td><?= $Toevoeging ?></td>
						<td><?= $Postcode ?></td>
						<td><?= $Plaats ?></td>
						<td> <button type ='button' onclick = 'showKlantForm(["<?= $Klantnummer ?>", "<?= $Voornaam ?>", "<?= $Tussenvoegsel ?>", "<?= $Achternaam ?>", "<?= $Straatnaam ?>", "<?= $Huisnummer ?>", "<?= $Toevoeging ?>", "<?= $Postcode ?>", "<?= $Plaats ?>"])' class = 'btn btn-primary'>Wijzigen</button> </td>
						<td> <button type ='button' onclick = 'verwijderen(<?=$Klantnummer?>, "Klanten", "Klantnummer")' class = 'btn btn-primary'>Verwijderen</button> </td>
						</tr>
					<?php endforeach; ?>
		</table>

		<?php include('inc/footer.php') ?>
	</body>

</html>

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
			$producten = $db->query('SELECT * FROM Werksoort');

		?>

	</head>

	<body>

		<?php include('inc/header.php'); ?>

		<form class="form-horizontal hidden" id="werksoort-form" method="post" action="inc/functions.php">
			<fieldset>

				<input id="form-type" name="action" placeholder="" class="form-control input-md" type="hidden">
        <input id="type" name="type" placeholder="" class="form-control input-md" type="hidden">

				<div class="form-group">
				<label class="col-md-4 control-label" for="voornaam">Werksoort</label>
				<div class="col-md-4">
				<input id="voornaam" name="werksoort" placeholder="" class="form-control input-md" type="text">

				</div>
				</div>

				<div class="form-group">
				<label class="col-md-4 control-label" for="tussenvoegsel">Tarief</label>
				<div class="col-md-4">
				<input id="tussenvoegsel" name="tarief" placeholder="" class="form-control input-md" type="text">

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
			<th>WerksoortId</th>
			<th>Werksoort</th>
			<th>Tarief</th>
			<th colspan='2'> <button type ='button' onclick = 'showWerksoortForm()' class = 'btn btn-primary'>Toevoegen</button> </th>
				<?php foreach($producten as $row):extract($row);?>
					<tr>
						<td><?= $WerksoortId ?></td>
						<td><?= $Werksoort ?></td>
						<td><?= $Tarief ?></td>
						<td> <button type ='button' onclick = 'showWerksoortForm(["<?= $WerksoortId ?>", "<?= $Werksoort ?>", "<?= $Tarief ?>"])' class = 'btn btn-primary'>Wijzigen</button> </td>
						<td> <button type ='button' onclick = 'verwijderen(<?=$WerksoortId?>, "Werksoort", "WerksoortId")' class = 'btn btn-primary'>Verwijderen</button> </td>
						</tr>
					<?php endforeach ?>
		</table>
        <?php include('inc/footer.php') ?>
	</body>

</html>

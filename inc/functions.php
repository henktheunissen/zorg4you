<?php
  include('config.php');

    if($_POST['action'] == "verwijderen") {
      extract($_POST);
      $delete = "DELETE FROM $type WHERE $col = :var";
      $stmt = $db->prepare($delete);
		  $stmt->bindParam(':var', $id, PDO::PARAM_INT);
		  $stmt->execute();
		  echo 200;
    }

    if($_POST['action'] == "toevoegen") {
        extract($_POST);
        if($type == "werknemer") {
            $add = "INSERT INTO Werknemers (Voornaam, Tussenvoegsel, Achternaam, Straatnaam, Huisnummer, Toevoeging, Postcode, Plaats, RolId) VALUES (:Voornaam, :Tussenvoegsel, :Achternaam, :Straatnaam, :Huisnummer, :Toevoeging, :Postcode, :Plaats, :RolId)";
            $stmt = $db->prepare($add);
            $RolId = 2;
            $stmt->bindParam(':Voornaam', $voornaam);
            $stmt->bindParam(':Tussenvoegsel', $tussenvoegsel);
            $stmt->bindParam(':Achternaam', $achternaam);
            $stmt->bindParam(':Straatnaam', $straatnaam);
            $stmt->bindParam(':Huisnummer', $huisnummer);
            $stmt->bindParam(':Toevoeging', $toevoeging);
            $stmt->bindParam(':Postcode', $postcode);
            $stmt->bindParam(':Plaats', $plaats);
            $stmt->bindParam(':RolId', $RolId, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: ../index.php");
        } elseif($type == "klant") {
            $add = "INSERT INTO Klanten (Voornaam, Tussenvoegsel, Achternaam, Straatnaam, Huisnummer, Toevoeging, Postcode, Plaats) VALUES (:Voornaam, :Tussenvoegsel, :Achternaam, :Straatnaam, :Huisnummer, :Toevoeging, :Postcode, :Plaats)";
            $stmt = $db->prepare($add);
            $stmt->bindParam(':Voornaam', $voornaam);
            $stmt->bindParam(':Tussenvoegsel', $tussenvoegsel);
            $stmt->bindParam(':Achternaam', $achternaam);
            $stmt->bindParam(':Straatnaam', $straatnaam);
            $stmt->bindParam(':Huisnummer', $huisnummer);
            $stmt->bindParam(':Toevoeging', $toevoeging);
            $stmt->bindParam(':Postcode', $postcode);
            $stmt->bindParam(':Plaats', $plaats);
            $stmt->execute();
            header("Location: ../klanten.php");
        } elseif($type == "werksoort") {
            $add = "INSERT INTO Werksoort (Werksoort, Tarief) VALUES (:Werksoort, :Tarief)";
            $stmt = $db->prepare($add);
            $stmt->bindParam(':Werksoort', $werksoort);
            $stmt->bindParam(':Tarief', $tarief);
            $stmt->execute();
            header("Location: ../producten.php");
        }
    }

    if(strpos($_POST['action'], "wijzigen") !== false) {
        extract($_POST);
        $id = str_replace("wijzigen:", "", $_POST['action']);
        if($type == "werknemer") {
            $sql = "UPDATE Werknemers SET Voornaam = :voornaam, Tussenvoegsel = :tussenvoegsel, Achternaam = :achternaam, Straatnaam = :straatnaam, Huisnummer = :huisnummer, Toevoeging = :toevoeging, Postcode = :postcode, Plaats = :plaats WHERE WerknemerID = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':voornaam', $voornaam);
            $stmt->bindParam(':tussenvoegsel', $tussenvoegsel);
            $stmt->bindParam(':achternaam', $achternaam);
            $stmt->bindParam(':straatnaam', $straatnaam);
            $stmt->bindParam(':huisnummer', $huisnummer);
            $stmt->bindParam(':toevoeging', $toevoeging);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->bindParam(':plaats', $plaats);
            $stmt->execute();
            header("Location: ../index.php");
        } elseif($type == "klant") {
            $sql = "UPDATE Klanten SET Voornaam = :voornaam, Tussenvoegsel = :tussenvoegsel, Achternaam = :achternaam, Straatnaam = :straatnaam, Huisnummer = :huisnummer, Toevoeging = :toevoeging, Postcode = :postcode, Plaats = :plaats WHERE Klantnummer = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':voornaam', $voornaam);
            $stmt->bindParam(':tussenvoegsel', $tussenvoegsel);
            $stmt->bindParam(':achternaam', $achternaam);
            $stmt->bindParam(':straatnaam', $straatnaam);
            $stmt->bindParam(':huisnummer', $huisnummer);
            $stmt->bindParam(':toevoeging', $toevoeging);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->bindParam(':plaats', $plaats);
            $stmt->execute();
            header("Location: ../klanten.php");
        } elseif($type == "werksoort") {
            $sql = "UPDATE Werksoort SET Werksoort = :werksoort, Tarief= :tarief, WHERE WerksoortId= :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':werksoort', $werksoort);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':tarief', $tarief);
            $stmt->execute();
            header("Location: ../diensten.php");
        }
    }

?>

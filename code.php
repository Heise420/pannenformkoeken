<?php
	include ('DBConnectie.php');

	// if ($BeginDatum != null) {
  //
	// 	$sql = "INSERT INTO ziekmeldingen (voornaam, achternaam, beginDatum, eindDatum) VALUES ('$Voornaam', '$Achternaam', '$BeginDatum', '$EindDatum')";
	// 	$connect->query($sql);
  //
	// 	echo '<script>alert("Verzonden")</script>';
	// }
  //
	// else if ($EindDatum != null) {
	// 	$result = mysqli_query($connect, "SELECT * FROM ziekmeldingen");
	// 		$currentDate = getdate();
  //
	// 		while($row = mysqli_fetch_array($result))
	// 		{
	// 			if ($row['voornaam'] == $Voornaam && $row['achternaam'] == $Achternaam)
	// 			{
	// 				if ($row['beginDatum'] != null || $row['beginDatum'] != "0000-00-00")
	// 				{
	// 					$sql = "UPDATE ziekmeldingen set eindDatum = '$EindDatum' where voornaam = '$Voornaam' and achternaam = '$Achternaam'";
	// 					$connect->query($sql);
	// 				}
	// 			}
	// 		}
  //
	// 		mysqli_close($connect);
	// }
  //
	// header('Location: beheer.php')



	/**
	 *
	 */
	class pannenkoeken
	{
		private $Naam, $Beleg;
	}

	$BelegKeuze = new pannenkoeken
	$BelegKeuze -> Naam = $_POST["naam"];
	$BelegKeuze -> Beleg = $_POST['eerstebeleg'];

//gegevens verzenden
	if ($this -> Beleg != "") {
		$keuze = mysqli_query($connect, "INSERT INTO pannenkoekenbeleg (naam, beleg) VALUES ($this-> Naam, $this-> Beleg)");
		$connect->query($keuze);

		echo '<script>alert("Verzonden")</script>';
	}

	elseif ($this -> EersteBeleg == "") {
		echo '<script>alert("Verplichte velden zijn niet ingevuld!")</script>';
	}

//top 5 gekozen belegen weergeven
	if () {
		$top5 = mysqli_query($connect, "SELECT beleg, COUNT(beleg) AS `value_occurrence` FROM pannenkoekenbeleg GROUP BY beleg ORDER BY `value_occurrence` DESC LIMIT 5");

			// while($row = mysqli_fetch_array($top5))
			// {
			//
			// }

			mysqli_close($connect);
	}





?>

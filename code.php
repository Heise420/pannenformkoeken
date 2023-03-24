<?php
	include ('DBConnectie.php');

	echo "<form action='code.php' method='post'>
        <h1>Wat doe jij op je pannenkoek?</h1>
        <input type='text'name='naam' placeholder='jouw naam'><br>
        <input type='text' name='beleg' placeholder='beleg'><br>
        <input type='submit' name='send' id='submit' value='verzenden'><br>
    </form>";

	class pannenkoeken
	{
		public string $naam, $beleg;

		function __construct($Naam, $Beleg)
		{
			$this->naam = $Naam;
			$this->beleg = $Beleg;
		}

		function getNaam()
		{
			return $this->naam;
		}

		function getBeleg()
		{
			return $this->beleg;
		}
	}

	$BelegKeuze = new pannenkoeken($_POST["naam"], $_POST["beleg"]);

//gegevens verzenden
	if ($_POST['beleg'] != "") {
		$keuze = mysqli_query($connect, "INSERT INTO pannenkoekenbeleg (naam, beleg) VALUES ('".$BelegKeuze->getNaam()."', '".$BelegKeuze->getBeleg()."');");
		//$connect->query($keuze);

		echo '<script>alert("Verzonden")</script>';
	}

	elseif ($BelegKeuze->getBeleg() == "") {
		echo '<script>alert("Verplichte velden zijn niet ingevuld!")</script>';
	}

	echo "<br>";
//top 5 gekozen belegen weergeven
$one = 1;
	if ($one == 1) {
		$top5 = mysqli_query($connect, "SELECT beleg, COUNT(beleg) AS `value_occurrence` FROM pannenkoekenbeleg GROUP BY beleg ORDER BY `value_occurrence` DESC LIMIT 5;");

			echo "<div style='display: grid; grid-template-columns: 20rem;'><h2>De Top 5 van wat mensen op hun pannenkoek doen</h2>";
			while($row = mysqli_fetch_array($top5))
			{
				echo "<div>".$row['beleg']."</div>";
			}
			echo "</div>";
	}

	echo "<br>";
//geschietenis weergeven
	if ($one == 1) {
		$history = mysqli_query($connect, "SELECT naam, beleg FROM pannenkoekenbeleg;");

			echo "<div style='display: grid; grid-template-columns: 20rem 40rem;'><h2>Naam</h2><h2>Beleg</h2>";
			while($row = mysqli_fetch_array($history))
			{
				echo "<div style='column: 1;'>".$row['naam']."</div><div style='column: 2;'>".$row['beleg']."</div>";
			}
			echo "</div>";
	}

	$BelegKeuze->Naam = "";
	$BelegKeuze->Beleg = "";

	mysqli_close($connect);
?>

<?php
	session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="quiz_css.css" type="text/css">
	<title>Quiz Resultat</title>
	

</head>

<body>

	<h1>Ditt resultat:</h1>
	<?php

		$name = $_SESSION['getName'];
			
		
		echo "<br/>";
		$points = 0; 
		$numChecked = 0;

		$checkBoxNames = array("q1","q2","q3","q4","q5","q6","q7","q8","q9","q10");

		for($x = 0; $x < sizeof($checkBoxNames); $x++)
		{
			if(!empty($_POST[$checkBoxNames[$x]])) 
			{
				$numChecked++;

	   			foreach($_POST[$checkBoxNames[$x]] as $check)
	    		{
	    			$points += $check; 
	            	//the value set in the HTML form for each checked checkbox.
	    		}
	    	}
	    	

		
		}

		echo "<strong>Du svarte på " . $numChecked . " spørsmål og fikk " . $points . " av 10 poeng</strong>"; 
		echo "<br/>";
		if($points == 0)
		{

			echo "Du må nok lese litt mer " . $name . ".";
		}
		else if($points > 0 && $points <= 2){
			echo "Dette var kanskje ikke så bra " . $name . "?";
		}
		else if($points > 2 && $points <= 4){
			echo "Flott " . $name . "!" . " Du er flink jo :)";
		}
		else if($points > 4 && $points <= 6){
			echo "Veldig bra! Bruk nettsidene våre til å forbedre deg " . $name . ".";
		}
		else if($points > 6 && $points < 10){
			echo "Dette var ikke verst, " . $name . "." . " Bra jobba!";
		}
		else if($points == 10){
			echo "FULLPOT! " . $name . ", dette var <em>MEGET</em> bra. Gratulerer, dette mestrer du =)";
		}

	

	?>

	
	<form action="quiz.php">
	<br/>
    <input type="submit" value="Ta på nytt">
	</form>
	
	

	
	

</body>
</html>
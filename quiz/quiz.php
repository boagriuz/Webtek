<?php
	session_start();
?>
<!--php session to use the form-input from user in other pages (ex.g: name and age)-->
<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="quiz_css.css" type="text/css">

	</head>

	<body>
		<h1>Quiz: Norsk politikk</h1>
		<div id="headerText">
			Hvor mye vet du om norsk politikk?<br/>
			Quizen presenterer deg for en rekke relevante spørsmål innen norsk politikk.<br/>
			Øk dine politiske kunnskaper ved å lese om partiene, deres politiske framgang og ideologier.<br/>
			<em>Dine svar blir ikke lagret og er anonyme.</em><br/>
			Start quizen ved å fylle ut litt info om deg selv nedenfor og trykk "Start Quiz!".
			<br/>
		</div>
	
		<!--Create form with fieldset; name and age-->
		<section id="personalia">
			<fieldset>
				<legend>Personalia:</legend>
					<form name="input" action="questions.php" method="POST">
						Navn: <input type="text" id="name" name="name" placeholder="Hva heter du?" style="height: 20px; width: 135px;" required data-validation-required-message="Vennligst skriv inn ditt navn">
						<br/>
						Alder: <input type="number" id="age" name="age" min="1" max="140" placeholder="Hvor gammel er du?" style="height: 20px; width: 135px;" required data-validation-required-message="Vennligst skriv inn din alder">
						<br/><br/>

						<input type="submit" value="Start Quiz!" >
					</form>
				
			</fieldset>
		</section>
		
	
	</body>
</html>
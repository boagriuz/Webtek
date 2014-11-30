
<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<meta charset="UTF-8">
		<!--<script src="quiz_js.js" type="text/JavaScript"></script>-->
		<link rel="stylesheet" href="quiz_css.css" type="text/css">

		
	</head>

	<body>
		<h1>Quiz: Norsk politikk</h1>

		<!--Get the form-input from prev page, and print/echo it to page-->
		<?php
			
				$_SESSION['getName'] = $_POST['name'];
				$_SESSION['getAge'] = $_POST['age'];
				echo "<strong>Velkommen til vår politiske quiz, " . $_SESSION['getName'] . "!<br/></strong>";
				echo $_SESSION['getAge'] . " år er en flott alder!<br/><br/>";
			
		?>

		<!--C-->
		

		<script type="text/javascript">
					//jQuery fade 
					//setTimeout trigger en funksjon bare en gang
					//setInterval trigger funksjonen igjen og igjen
					//samme syntaks setInterval("function", milliseconds);

					//jqueryFade(questionid) determines which question will be faded out and in
					function jqueryFade(questionid)
					{

						$(document).ready(function() 
						{ 
							//list of questions id's
							var questionArray = ["a1","a2","a3","a4","a5","a6","a7","a8","a9","a10"];
							for(var i = 0; i < questionArray.length; i++){
								var questionId = document.getElementById(questionArray[i]);


							}
							//create elements to be used
							var a1 = document.getElementById("a1");
							var a2 = document.getElementById("a2");
							var a3 = document.getElementById("a3");
							var a4 = document.getElementById("a4");
							var a5 = document.getElementById("a5");
							var a6 = document.getElementById("a6");
							var a7 = document.getElementById("a7");
							var a8 = document.getElementById("a8");
							var a9 = document.getElementById("a9");
							var a10 = document.getElementById("a10");

							var fadeOutSpeed = 200;
							var fadeInSpeed = 500;
							var delay = 500;

							if(questionid == "a1"){
								$(a1).fadeOut(fadeOutSpeed);
								$(a2).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a2"){
								$(a2).fadeOut(fadeOutSpeed);
								$(a3).delay(delay).fadeIn(fadeInSpeed);
								loadImage(); 
							}
							else if(questionid == "a3"){
								$(a3).fadeOut(fadeOutSpeed);
								$(a4).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a4"){
								$(a4).fadeOut(fadeOutSpeed);
								$(a5).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a5"){
								$(a5).fadeOut(fadeOutSpeed);
								$(a6).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a6"){
								$(a6).fadeOut(fadeOutSpeed);
								$(a7).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a7"){
								$(a7).fadeOut(fadeOutSpeed);
								$(a8).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a8"){
								$(a8).fadeOut(fadeOutSpeed);
								$(a9).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a9"){
								$(a9).fadeOut(fadeOutSpeed);
								$(a10).delay(delay).fadeIn(fadeInSpeed);
							}
							else if(questionid == "a10"){
								
								$(a10).fadeOut(fadeOutSpeed);
								var resultButtonId = document.getElementById("resultButton");
								$(resultButton).delay(delay).fadeIn(fadeInSpeed);
							}

							

						});
						
					}

				//loadImage() uses canvas to draw images and determines which image is to be loaded
				//images are loaded from different server to save space and due to copyright(?), 
				function loadImage()
				{
					//img one; erna
		            var ca = document.getElementById("canvasOne");
		            var contexta = ca.getContext("2d");

		            var imgOne = new Image();
					imgOne.src = "http://www.dagbladet.no/statsministerpoll/img/erna2.jpg";
		            contexta.drawImage(imgOne, 15, 15, 260, 300);

		            //img two; krf
		            var cb = document.getElementById("canvasTwo");
		            var contextb = cb.getContext("2d");

		            var imgTwo = new Image();
		            imgTwo.src = "https://www.holderdeord.no/uploads/party/logo/krf/44d3792bbf4e251f74ba35a5c43fe979.png";
		            contextb.drawImage(imgTwo, 15, 15, 250, 250);

		            //img three: sv
		            var cc = document.getElementById("canvasThree");
		            var contextc = cc.getContext("2d");
		           
		           	var imgThree = new Image();
		            imgThree.src = "http://www.hoosays.com/files/classifieds/categories/ic256-community.png";
		            contextc.drawImage(imgThree, 15, 15, 350, 300);
		           	
		           	//img four: venstre
		           	var cd = document.getElementById("canvasFour");
		            var contextd = cd.getContext("2d");
		           
		           	var imgFour = new Image();
		            imgFour.src = "http://upload.wikimedia.org/wikipedia/commons/1/15/Lyspære.png";
		            contextd.drawImage(imgFour, 15, 15, 350, 300);
		       		

	       		 }
	        	 window.addEventListener("load", loadImage, false);
						
				
		</script>
		<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>

		<!--the question form, contains all questions, radio buttons and images, method="POST" because the result is calculated in the next page result.php-->
		<form name="input" action="result.php" method="POST">
			<div class="questions">
				<div class="answers" id="a1"> 
					<h2>Spørsmål: 1/10</h2>     
					<p class="question">Når ble nåværende statsminister i Norge født?</p>       
					<input type="radio" name="q1[]" value="0" id="q1a"><label for="q1a">1972</label><br/>          
					<input type="radio" name="q1[]" value="0" id="q1b"><label for="q1b">1985</label><br/>            
					<input type="radio" name="q1[]" value="1" id="q1c"><label for="q1c">1961</label><br/>            
					<input type="radio" name="q1[]" value="0" id="q1d"><label for="q1d">1936</label><br/>    
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a1')" OnMouseOver="green;"> 
				</div>   

				<div class="answers" id="a2"> 
					<h2>Spørsmål: 2/10</h2>
					<p>Hvem er dette?</p> 
						
						<div class="questionPicture">
							<!--Cavas element one-->
							 <canvas id="canvasOne" height="350" width="350"> 
							 	Your browser does not support the &lt;canvas&gt; element.
							 </canvas>
						</div>   
						<input type="radio" name="q2[]" value="0" id="q2a"><label for="q2a">Den norske dronningen</label><br/>           
						<input type="radio" name="q2[]" value="1" id="q2b"><label for="q2b">Statsminister Erna Solberg</label><br/>            
						<input type="radio" name="q2[]" value="0" id="q2c"><label for="q2c">Tone Damli</label><br/>           
						<input type="radio" name="q2[]" value="0" id="q2d"><label for="q2d">Kristine Berg, leder for Venstre parti</label><br/> 
						<br/>   
						<input type="button" value="Neste" onclick="jqueryFade('a2')"> 
					
				</div>              

				<div class="answers" id="a3">  
					<h2>Spørsmål: 3/10</h2>
					<p>Hvem er leder for AP?</p>            
					<input type="radio" name="q3[]" value="0" id="q3a"><label for="q3a">Finn Egil Holm</label><br/>            
					<input type="radio" name="q3[]" value="0" id="q3b"><label for="q3b">Siv Jensen</label><br/>            
					<input type="radio" name="q3[]" value="0" id="q3c"><label for="q3c">Erna Solberg</label><br/>           
					<input type="radio" name="q3[]" value="1" id="q3d"><label for="q3d">Jonas Gahr Støre</label><br/> 
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a3')">       
				</div>        
	       

				<div class="answers" id="a4">  
					<h2>Spørsmål: 4/10</h2>
					<p>Hvem er landets <em>nest</em> eldste partiorganisasjon?</p>          
					<input type="radio" name="q4[]" value="0" id="q4a"><label for="q4a">Venstre</label><br/>            
					<input type="radio" name="q4[]" value="0" id="q4b"><label for="q4b">Arbeiderpartiet</label><br/>            
					<input type="radio" name="q4[]" value="1" id="q4c"><label for="q4c">Høyre</label><br/>            
					<input type="radio" name="q4[]" value="0" id="q4d"><label for="q4d">Kristelig Folkeparti</label><br/> 
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a4')">        
				</div>               

				<div class="answers" id="a5"> 
					<h2>Spørsmål: 5/10</h2>
					<p>Hva er mottoet til FrP?</p>            
					<input type="radio" name="q5[]" value="0" id="q5a"><label for="q5a">"Lenge leve FrP"</label><br/>            
					<input type="radio" name="q5[]" value="1" id="q5b"><label for="q5b">"For folk flest"</label><br/>            
					<input type="radio" name="q5[]" value="0" id="q5c"><label for="q5c">"Gi til de fattige, ta fra de rike"</label><br/>           
					<input type="radio" name="q5[]" value="0" id="q5d"><label for="q5d">"For alt vi er, og alt vi eier"</label><br/> 
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a5')">        
				</div>        
	      

				<div class="answers" id="a6">  
					<h2>Spørsmål: 6/10</h2>
					
					<p>Når ble Kristelig Folkeparti(KrF) stiftet?</p>  

					<div class="questionPicture">
							 <canvas id="canvasTwo" height="300" width="300"> 
							 	Your browser does not support the &lt;canvas&gt; element.
							 </canvas>
					</div>            
					<input type="radio" name="q6[]" value="1" id="q6a"><label for="q6a">1933</label><br/>            
					<input type="radio" name="q6[]" value="0" id="q6b"><label for="q6b">1945</label><br/>            
					<input type="radio" name="q6[]" value="0" id="q6c"><label for="q6c">1904</label><br/>            
					<input type="radio" name="q6[]" value="0" id="q6d"><label for="q6d">1992</label><br/> 
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a6')">        
				</div>       
	       

				<div class="answers" id="a7"> 
					<h2>Spørsmål: 7/10</h2>
					<p>I hvilken by har Senterpartiet kontor?</p>            
					<input type="radio" name="q7[]" value="0" id="q7a"><label for="q7a">Trondheim</label><br/>            
					<input type="radio" name="q7[]" value="0" id="q7b"><label for="q7b">Stavanger</label><br/>            
					<input type="radio" name="q7[]" value="0" id="q7c"><label for="q7c">Tromsø</label><br/>            
					<input type="radio" name="q7[]" value="1" id="q7d"><label for="q7d">Oslo</label><br/> 
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a7')">        
				</div>                

				<div class="answers" id="a8"> 
					<h2>Spørsmål: 8/10</h2>
					<p>Hva forbinder du med Sosialistisk Venstreparti(SV)?</p> 

					<div class="questionPicture">
							 <canvas id="canvasThree" height="350" width="350"> 
							 	Your browser does not support the &lt;canvas&gt; element.
							 </canvas>
					</div>            
					<input type="radio" name="q8[]" value="0" id="q8a"><label for="q8a">Intolerante mennesker og svada-eksperter</label><br/>            
					<input type="radio" name="q8[]" value="0" id="q8b"><label for="q8b">Terrorister og slavedrivere</label><br/>            
					<input type="radio" name="q8[]" value="1" id="q8c"><label for="q8c">Sosialistisk, feministisk og antirasistisk</label><br/>            
					<input type="radio" name="q8[]" value="0" id="q8d"><label for="q8d">Naturlig, upolitisk og mektig</label><br/>  
					<br/>  
					<input type="button" value="Neste" onclick="jqueryFade('a8')">    
				</div>        
	       

				<div class="answers" id="a9"> 
					<h2>Spørsmål: 9/10</h2>
					<p>Hvilken farge har Miljøpartiet De Grønne(MDG) på logoen?</p>            
					<input type="radio" name="q9[]" value="1" id="q9a"><label for="q9a">Grønn</label><br/>            
					<input type="radio" name="q9[]" value="0" id="q9b"><label for="q9b">Blå</label><br/>            
					<input type="radio" name="q9[]" value="0" id="q9c"><label for="q9c">Svart</label><br/>            
					<input type="radio" name="q9[]" value="0" id="q9d"><label for="q9d">Lilla</label><br/> 
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a9')">        
				</div>        
	        

				<div class="answers" id="a10">     
					<h2>Spørsmål: 10/10</h2>
					<p>Hvilken erklært ideologi har Venstre?</p>  

					<div class="questionPicture">
							<!--Cavas element one-->
							 <canvas id="canvasFour" height="350" width="350"> 
							 	Your browser does not support the &lt;canvas&gt; element.
							 </canvas>
					</div>       
					<input type="radio" name="q10[]" value="0" id="q10a"><label for="q10a">Konservatisme</label><br/>            
					<input type="radio" name="q10[]" value="0" id="q10b"><label for="q10b">Liberalisme</label><br/>            
					<input type="radio" name="q10[]" value="0" id="q10c"><label for="q10c">Anarkisme</label><br/>            
					<input type="radio" name="q10[]" value="1" id="q10d"><label for="q10d">Sosialliberalisme</label><br/>
					<br/>
					<input type="button" value="Neste" onclick="jqueryFade('a10')"> 
				</div> 
				<div class="getResult">
					<br/>
					<input type="submit" id="resultButton" value="Se ditt resultat" style="margin-left: 40px;">  
				</div>  
			</div>
		</form>

	</body>
</html>
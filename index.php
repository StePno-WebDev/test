<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {font-family: Arial, Helvetica, sans-serif;}

		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 100px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  background-color: #fefefe;
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 80%;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		</style>
</head>
<body>
	<!-- Trigger/Open The Modal -->
	<button id="myBtn">Calcule ton IMC</button>

	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
	    <span class="close">&times;</span>
		    <form action="" method="post" name="ideal" id="ideal">
		    	<h1>Calculer votre imc</h1>
		    	<h4>Indice de Masse Corporelle</h4>
			<input type="text" value="Entrez votre taille (en cm) ici." name="taille" OnFocus="this.value=''" size="30"><br /><br />
			<input type="text" value="Entrez votre poids ici." name="poids" OnFocus="this.value=''" size="30"><br /><br />
			<input type="button" value="Calculer" name="calculez" OnClick="Valider(this.form)"><br />
			<input type="reset" value="Remettre à zero" name="reset"><br /><br /><br />
		</form>
	</div>

	</div>

	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
	</script>

	<script language="JavaScript" type="text/javascript">

				function Valider(ideal)
				    {
				        
						var taille = document.ideal.taille.value
						var poids = document.ideal.poids.value
				            if ((taille == "Entrez votre taille (en cm) ici.")|| (taille == "")|| (poids == "Entrez votre poids ici.")|| (poids == ""))   //alert si un champ n'esp pas renseigné
				                {
				                    alert("Votre taille est incorrecte. Elle doit être uniquement composée de chiffres.");
				                }
								else
								{
								//Fonction calcul de l'imc
				            var nombre1 = (taille*0.01)          //convertion de la taille des centimètres en mètres
							var nombre2 = (nombre1*nombre1)      //taille au carré
							var nombre3 = (poids/nombre2)        //poids divisé par la taille
							alert("Votre indice de masse corporel est de: " + nombre3 + "!");
							
							// Message d'alerte en fonction de l'imc
							
							if (nombre3 <= 16,5)
							{
							alert("Vous êtes en dénutrition")
							}
							if (nombre3 <=18,5 && nombre3 >16,5)
							{
							alert("Vous êtes en état de maigreur");
							}
							if (nombre3 <=25 && nombre3 >18,5)
							{
							alert("Votre corpulence est normale");
							}
							if (nombre3 <=30 && nombre3 >25)
							{
							alert("Vous êtes en surpoids");
							}
							if (nombre3 <=35 && nombre3 >30)
							{
							alert("Vous êtes en obésité modérée (classe1)");
							}
							if (nombre3 <=40 && nombre3 >35)
							{
							alert("Vous êtes en obésité grave (classe2)");
							}
							if (nombre3 <=70 && nombre3 >40)
							{
							alert("Vous êtes en obésité morbide ou massive (classe3)");
							}
							if (nombre3 >70)
							{
							alert("Cet IMC est trop important, vous avez sans doute fait une erreur : êtes-vous sûr que vous mesurez valeurTaille centimètres  et que vous pesez valeurPoids kilogrammes ? Votre taille doit être en centimètres, et votre poids en kilogrammes.");
							}
							
							//Fonction calcul du poid parfait
							
							var nombre4 = (22*nombre2)         //22 est l'indice parfait
							alert("Votre poids idéal est de: " + nombre4 + "!");
								
						        }
				    }
				</script>

</body>
</html>

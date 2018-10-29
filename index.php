<?php 

	try {
	$bdd = new PDO('mysql:host=localhost;dbname=chatlibre', 'root'); 
	} catch (PDOException $e) {

		var_dump($e);
	}

	$req = $bdd->query('SELECT c.nom, c.sexe, c.date_priseencharge, c.date_primovaccination, c.date_rappel, c.date_sterilisation, c.date_identification, c.lieudevie, c.numero_identification  FROM chat c');
	$chats = $req->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8" />
		<title>Base de données chats libres</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
</head>

<body>	

	<h1 class="text-center">Interface de gestion de chats</h1> <br>	

	<table class="text-center" id="table">
		<thead>
			<tr>
				
				<th>Nom</th>
				<th>Sexe</th>
				<th>Date de prise en charge</th>
				<th>Date de primovaccination</th>			
				<th>Date de rappel</th>			
				<th>Date de stérilisation</th>				
				<th>Date d'identification</th>				
				<th>Lieu de vie</th>				
				<th>Numéro d'identification</th>				
			</tr>
		</thead>
		
		<tbody>

			<?php foreach ($chats as $key => $value):?>
					<tr>
						
						<td><?= $value['nom'] ?></td>
						<td><?= $value['sexe'] ?></td>
						<td><?= $value['date_priseencharge'] ?></td>
						<td><?= $value['date_primovaccination'] ?></td>
						<td><?= $value['date_rappel'] ?></td>
						<td><?= $value['date_sterilisation'] ?></td>
						<td><?= $value['date_identification'] ?></td>
						<td><?= $value['lieudevie'] ?></td>
						<td><?= $value['numero_identification'] ?></td>
						<td> <?= '<button class="modifier" type="submit" class="btn btn-default">Modifier</button>'?></td>
						<td> <?= '<button class="supprimer" type="submit" class="btn btn-default">Supprimer</button>'?></td>
																	
					</tr>
			<?php endforeach; ?>

		</tbody>
	</table> <br>

	<h3 class="text-center">Add a cat :</h1>
	<!-- Formulaire pour la saisie des données -->	
	<form id="chat" action="ajout.php" method="POST" class="text-center">
		<p>
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="sexe">Sexe :</label>
			<input type="text" name="sexe" id="sexe" placeholder="(champ obligatoire)" required>
		</p>	
		<p>
			<label for="date_priseencharge">Date de prise en charge :</label>
			<input type="date" name="date_priseencharge" id="date_priseencharge" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="date_primovaccination">Date de primovaccination :</label>
			<input type="date" name="date_primovaccination" id="date_primovaccination" placeholder="(champ obligatoire)">
		</p>
		<p>
			<label for="date_rappel">Date de rappel :</label>
			<input type="date" name="date_rappel" id="date_rappel" placeholder="(champ obligatoire)">
		</p>
		<p>
			<label for="date_sterilisation">Date de stérilisation :</label>
			<input type="date" name="date_sterilisation" id="date_sterilisation" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="date_identification">Date d'identification :</label>
			<input type="date" name="date_identification" id="date_identification" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="lieudevie">Lieu de vie :</label>
			<input type="text" name="lieudevie" id="lieudevie" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="numero_identification">Numéro d'identification :</label>
			<input type="text" name="numero_identification" id="numero_identification" placeholder="(champ obligatoire)" required>
		</p>


		<p>
				<input type="submit" name="submit" class="btn btn-primary" value="Submit" id="submit"> <br><br>
			<a href="index.php" style="text-decoration: none">

				<input type="button" value="Retour à la page principale" class="btn btn-primary"/></a>	
			</p>

		<!-- <p class="text-center">
			<a href="ajout.php" style="text-decoration: none">
				<input type="submit" class="btn btn-primary buttons" name="submit" value="Ajout d'un nouveau chat" id="submit"/>
			</a>
		</p> -->
	</form>

	<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter un chat :</h4>
        </div>
        <div class="modal-body">
          <form id="chat" action="ajout.php" method="POST" class="text-center">
		<p>
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="sexe">Sexe :</label>
			<input type="text" name="sexe" id="sexe" placeholder="(champ obligatoire)" required>
		</p>	
		<p>
			<label for="date_priseencharge">Date de prise en charge :</label>
			<input type="date" name="date_priseencharge" id="date_priseencharge" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="date_primovaccination">Date de primovaccination :</label>
			<input type="date" name="date_primovaccination" id="date_primovaccination" placeholder="(champ obligatoire)">
		</p>
		<p>
			<label for="date_rappel">Date de rappel :</label>
			<input type="date" name="date_rappel" id="date_rappel" placeholder="(champ obligatoire)">
		</p>
		<p>
			<label for="date_sterilisation">Date de stérilisation :</label>
			<input type="date" name="date_sterilisation" id="date_sterilisation" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="date_identification">Date d'identification :</label>
			<input type="date" name="date_identification" id="date_identification" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="lieudevie">Lieu de vie :</label>
			<input type="text" name="lieudevie" id="lieudevie" placeholder="(champ obligatoire)" required>
		</p>
		<p>
			<label for="numero_identification">Numéro d'identification :</label>
			<input type="text" name="numero_identification" id="numero_identification" placeholder="(champ obligatoire)" required>
		</p>


		<p>
				<input type="submit" name="submit" class="btn btn-primary" value="Submit" id="submit"> <br><br>
			<a href="index.php" style="text-decoration: none">

				<input type="button" value="Retour à la page principale" class="btn btn-primary"/></a>	
			</p>

		<!-- <p class="text-center">
			<a href="ajout.php" style="text-decoration: none">
				<input type="submit" class="btn btn-primary buttons" name="submit" value="Ajout d'un nouveau chat" id="submit"/>
			</a>
		</p> -->

		<div id="response"></div>
	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

	<!-- message de retour du serveur -->


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	

	<script>



	$(document).ready(function() {

		$('#submit').click(function(e){
			e.preventDefault();


			var nom = $("#nom").val();
			var sexe = $("#sexe").val();
			var date_priseencharge = $("#date_priseencharge").val();
			var date_primovaccination = $("#date_primovaccination").val();
			var date_rappel = $("#date_rappel").val();
			var date_sterilisation = $("#date_sterilisation").val();
			var date_identification = $("#date_identification").val();
			var lieudevie = $("#lieudevie").val();
			numero_identification = $("#numero_identification").val();


			$.ajax({
				url: "ajout.php",
				type:"post",
				data:$('#chat').serialize(),
				success:function(data){
					$('form').trigger("reset");  
                      $('#response').fadeIn().html(data);  
                      setTimeout(function(){  
                           $('#response').fadeOut("slow");  
                      }, 10000);  
				}
			});
			
		});		

	});


</script>
    
</body>
</html>
<?php 	
	 
	try {
	    // http://php.net/manual/en/pdo.connections.php
	    $bdd = new PDO('mysql:host=localhost;dbname=chatlibre', 'root', '');	    
	    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo $e->getMessage();
	}



if(isset($_POST['submit'])) {
	$nom = $_POST['nom'];
	$sexe = $_POST['sexe'];
	$date_priseencharge = $_POST['date_priseencharge'];
	$date_primovaccination = $_POST['date_primovaccination'];
	$date_rappel = $_POST['date_rappel'];
	$date_sterilisation = $_POST['date_sterilisation'];
	$date_identification = $_POST['date_identification'];
	$lieudevie = $_POST['lieudevie'];
	$numero_identification = $_POST['numero_identification'];

}

	// $toto = "INSERT INTO chat (nom, sexe, date_priseencharge, date_primovaccination, date_rappel, date_sterilisation, date_identification, lieudevie, numero_identification) 
	// VALUES (:nom, :sexe, :date_priseencharge, :date_primovaccination, :date_rappel,:date_sterilisation,:date_identification,:lieudevie, :numero_identification)"
	$req = $bdd->prepare('INSERT INTO chat (nom, sexe, date_priseencharge, date_primovaccination, date_rappel, date_sterilisation, date_identification, lieudevie, numero_identification) 
	VALUES (:nom, :sexe, :date_priseencharge, :date_primovaccination, :date_rappel,:date_sterilisation,:date_identification,:lieudevie, :numero_identification)');


        $req->bindValue(':nom', $nom);
		$req->bindValue(':sexe', $sexe);
	    $req->bindValue(':date_priseencharge', $date_priseencharge);
	    $req->bindValue(':date_primovaccination', $date_primovaccination);
	    $req->bindValue(':date_rappel', $date_rappel);
	    $req->bindValue(':date_sterilisation', $date_sterilisation);
	    $req->bindValue(':date_identification', $date_identification);
	    $req->bindValue(':lieudevie', $lieudevie);
	    $req->bindValue(':numero_identification', $numero_identification);
	    
        $req->execute();

		echo '<p class="success">Success !</p>';	

 ?>
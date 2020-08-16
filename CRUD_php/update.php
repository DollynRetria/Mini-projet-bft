<?php 
	require_once 'Etudiant.php';
	$myEtudiant = new Etudiant();
	
	if(isset($_POST["nom"]) AND !empty($_POST["nom"]) AND isset($_POST["prenom"]) AND !empty($_POST["prenom"]) AND isset($_POST["matiere"]) AND !empty($_POST["matiere"]) AND isset($_POST["note"]) AND !empty($_POST["note"]))
	{
		$idEtudiant = $_POST["idEtudiant"];
		//print_r($idPhoto);
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$matiere = $_POST["matiere"];
		$note = $_POST["note"];
		
		$queryEtudiant = "UPDATE `etudiant` SET nom='".$nom."', prenom='".$prenom."', matiere='".$matiere."', note='".$note."' WHERE id_etudiant=".$idEtudiant;
		$updateEtudiant = $myEtudiant->executerRequete($queryEtudiant);
		
		if($updateEtudiant){
			echo "modification reussie";
		}else{
			echo "modification echoue";
		}
	}
?>
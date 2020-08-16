<?php 
	require_once 'Etudiant.php';
	$myEtudiant = new Etudiant();
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$deleteEtudiant = "DELETE FROM `etudiant` WHERE id_etudiant=".$id;
		$resDelEtudiant = $myEtudiant->executerRequete($deleteEtudiant);
		if($resDelEtudiant){
			echo "suppression reussie";
		}else{
			echo "suppression echouee";
		}

	}else{
		throw new Exception("identifiant non reconnu");
	}
?>
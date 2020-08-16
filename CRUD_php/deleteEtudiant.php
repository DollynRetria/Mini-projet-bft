<?php 
	require_once 'Etudiant.php';
	$myEtudiant = new Etudiant();
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$deleteEtudiant = "DELETE FROM `etudiant` WHERE id_etudiant=".$id;
		$resDelEtudiant = $myEtudiant->executerRequete($deleteEtudiant);
		if($resDelEtudiant){
			echo '<a href="readEtudiant.php">Supression reussie</a>';
			header('Refresh:3;url=readEtudiant.php');
		}else{
			echo '<a href="readEtudiant.php">Supression echouee</a>';
		}

	}else{
		throw new Exception("identifiant non reconnu");
	}
?>
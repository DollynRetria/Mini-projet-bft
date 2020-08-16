

<?php 
	require_once 'Etudiant.php';
	$myEtudiant = new Etudiant();
	if(isset($_POST["nom"]) AND !empty($_POST["nom"]) AND isset($_POST["prenom"]) AND !empty($_POST["prenom"]) AND isset($_POST["matiere"]) AND !empty($_POST["matiere"]) AND isset($_POST["note"]) AND !empty($_POST["note"]))
	{
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$matiere = $_POST["matiere"];
		$note = $_POST["note"];
		
		$queryEtudiant = "INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `matiere`, `note`) VALUES('','".$nom."', '".$prenom."', '".$matiere."', '".$note."')";
		
		//retoure l'identifiant de la dernière insertion
		$insertEtudiant = $myEtudiant->executerRequete($queryEtudiant);
		
		if($insertEtudiant){
			echo "insertion reussie";
			//header('Location: readEtudiant.php');
			header('Refresh:2;url=readEtudiant.php');
		}else{
			echo '<a href="formulaires.php">insertion echouee</a>';
			//header('Location: formulaires.php');
		}
	}else{
		throw new Exception("erreur de transmission de donnee");
	}
?>
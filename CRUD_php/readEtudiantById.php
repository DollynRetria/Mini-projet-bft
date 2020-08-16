<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>
<body>

<?php 
	require_once 'Etudiant.php';
	$myEtudiant = new Etudiant();
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		//print_r($id);

		$query = "SELECT * FROM `etudiant` WHERE id_etudiant=".$id;
		//print_r($query);
		$etudiant = $myEtudiant->selectData($query);
		//print_r($etudiant);
		if($etudiant){
?>

	<form action="update.php" method="post">
    <?php while($row = $etudiant->fetchObject()): ?>
    	<?php //print_r("id etudiant:".$row->id_etudiant) ; ?><br />

    	<input type="hidden" name="idEtudiant" value="<?php echo $row->id_etudiant; ?>" />

    	<label>Nom :</label>
        <input type="text" name="nom" value="<?php echo $row->nom; ?>"/><br /><br />
        <label>Prenom : </label>
        <input type="text" name="prenom" value="<?php echo $row->prenom; ?>"/><br /><br />
        <label>Adresse :</label>
        <input type="text" name="matiere" value="<?php echo $row->matiere; ?>" /><br /><br />
        <label>Téléphone :</label>
        <input type="text" name="note" value="<?php echo $row->note; ?>"/><br /><br />
    <?php endwhile; ?>
        <input type="submit" value="valider"/>
    </form>
		<?php } ?>
    
<?php
	}else{
		$id = NULL;
		exit();
	}
?>
</body>
</html>
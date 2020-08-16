<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulaire d'ajout</title>
</head>

<body>
    <form action="insertEtudiant.php" method="post">
    	<label>Nom :</label>
        <input type="text" name="nom" /><br /><br />
        <label>Prenom : </label>
        <input type="text" name="prenom" /><br /><br />
        <label>Matière :</label>
        <input type="text" name="matiere" /><br /><br />
        <label>Note :</label>
        <input type="text" name="note" /><br /><br />
        <button type="submit" />Valider</button>
    </form>
</body>
</html>
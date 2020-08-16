<a href="formulaires.php">ajout</a><br><br>
<?php 
	require_once 'Etudiant.php';
	$myEtudiant = new Etudiant();
	$query = "SELECT * FROM etudiant";
	
	$read = $myEtudiant->selectData($query);
	
	if($read):
	?>
    <table border="1" cellpadding="10">
    	<tr>
        	<th>Nom</th>
            <th>Prenom</th>
            <th>Matière</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
        <?php while($row=$read->fetchObject()):?>
        <tr>
        	<td><?php echo $row->nom; ?></td>
            <td><?php echo $row->prenom; ?></td>
            <td><?php echo $row->matiere; ?></td>
            <td><?php echo $row->note; ?></td>
            <td><a href="readEtudiantById.php?id=<?php echo $row->id_etudiant ?>">modifier</a> | <a href="deleteEtudiant.php?id=<?php echo $row->id_etudiant ?>">supprimer</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
	<?php 
	else:
	?>
	<p>Base de donnée vide</p>
	<?php endif;?>
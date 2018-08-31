<?php
include('../../../../model/db.php');
if(isset($_POST['edit']))
{ 
	
$id = $_GET['id'];

$nom_societe = $_POST['nom_societe'];
$pays_societe = $_POST['pays_societe'];
$tva_societe = $_POST['tva_societe'];
$telephone_societe = $_POST['telephone_societe'];
$types_id_types = $_POST['types_id_types'];

$sql = "UPDATE societe SET nom_societe=:nom_societe, pays_societe=:pays_societe, tva_societe=:tva_societe, telephone_societe=:telephone_societe, types_id_types=:types_id_types WHERE id=:id";
$query = $db->prepare($sql);

    $stmt->bindParam(':nom_societe', $nom_societe);
    $stmt->bindParam(':pays_societe', $pays_societe);
    $stmt->bindParam(':tva_societe', $tva_societe);
    $stmt->bindParam(':telephone_societe', $telephone_societe);
    $stmt->bindParam(':types_id_types', $types_id_types);

$result = $query->execute();
header("Location: ../public/view/frontend/societe.php");
}
?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM societe WHERE id=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $nom_societe = $row['nom_societe'];
    $pays_societe = $row['pays_societe'];
	$tva_societe = $row['tva_societe'];
	$telephone_societe = $row['telephone_societe'];
    $types_id_types = $row['types_id_types'];
}
?>


<?php include('../head.php');?>
<body>
	<a href="../societe.php">Societe</a>
	<h1>Ajouter une societe</h1>
	<form action="edit-societe.php" method="post">
		<div>
			<label for="name">Nom de la societe</label>
			<input type="text" name="nom_societe" value="<?php echo $nom_societe;?>">
		</div>
        <div>
			<label for="pays">Pays de la societe</label>
			<input type="text" name="pays_societe" value="<?php echo $pays_societe;?>">
		</div>
		<div>
			<label for="tva">Nº de TVA</label>
			<input type="number" name="tva_societe" value="<?php echo $tva_societe;?>">
		</div>
		<div>
			<label for="telephone">Nº de téléphone</label>
			<input type="number" name="telephone_societe" value="<?php echo $telephone_societe;?>">
		</div>
		<div>
			<label for="types">Types</label>
			<select name="types_id_types">
				<option value="1">Fournisseur</option>
				<option value="2">Client</option>
			</select>
		</div>
		<button type="submit" name="edit">Envoyer</button>
	</form>
</body>
</html>
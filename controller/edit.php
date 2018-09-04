<?php
include('../../../../model/db.php');
if(isset($_POST['edit-societe']))
{
$id_societe = $_POST['id_societe'];

$nom_societe = $_POST['nom_societe'];
$pays_societe = $_POST['pays_societe'];
$tva_societe = $_POST['tva_societe'];
$telephone_societe = $_POST['telephone_societe'];
$types_id_types = $_POST['types_id_types'];

$sql = "UPDATE societe SET nom_societe=:nom_societe, pays_societe=:pays_societe, tva_societe=:tva_societe, telephone_societe=:telephone_societe, types_id_types=:types_id_types
WHERE id_societe=:id_societe";
$query = $db->prepare($sql);

	$query->bindParam(':id_societe', $id_societe);
    $query->bindParam(':nom_societe', $nom_societe);
    $query->bindParam(':pays_societe', $pays_societe);
    $query->bindParam(':tva_societe', $tva_societe);
    $query->bindParam(':telephone_societe', $telephone_societe);
    $query->bindParam(':types_id_types', $types_id_types);

$result = $query->execute();
header("Location: ../../../../public/view/frontend/societe.php");
}

$id = $_GET['id'];
$sql = "SELECT * FROM societe WHERE id_societe=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $id_societe = $row['id_societe'];
    $nom_societe = $row['nom_societe'];
    $pays_societe = $row['pays_societe'];
	$tva_societe = $row['tva_societe'];
	$telephone_societe = $row['telephone_societe'];
    $types_id_types = $row['types_id_types'];
}



if(isset($_POST['edit-personnes']))
{
$id_personne = $_POST['id_personnes'];

$nom_personne = $_POST['nom_personne'];
$prenom_personne = $_POST['prenom_personne'];
$telephone_personne = $_POST['telephone_personne'];
$mail_personne = $_POST['email_personne'];
$societe_id_societe = $_POST['societe_id_societe'];

$sql = "UPDATE personnes SET prenom_personnes=:prenom_personnes, nom_personnes=:nom_personnes, telephone_personnes=:telephone_personnes, email_personnes=:email_personnes, societe_id_societe=:societe_id_societe
WHERE id_personnes=:id_personnes";
$query = $db->prepare($sql);

	$query->bindParam(':id_personnes', $id_personne);
    $query->bindParam(':nom_personnes', $nom_personne);
    $query->bindParam(':prenom_personnes', $prenom_personne);
    $query->bindParam(':telephone_personnes', $telephone_personne);
    $query->bindParam(':email_personnes', $mail_personne);
    $query->bindParam(':societe_id_societe', $societe_id_societe);

$result = $query->execute();
header("Location: ../../../../public/view/frontend/clients.php");
}

$id_p = $_GET['id'];
$sql_p = "SELECT * FROM personnes WHERE id_personnes=:id";
$query_p = $db->prepare($sql_p);
$query_p->execute(array(':id' => $id_p));

while($row = $query_p->fetch(PDO::FETCH_ASSOC))
{
	$id_personne = $row['id_personnes'];

	$nom_personne = $row['nom_personnes'];
	$prenom_personne = $row['prenom_personnes'];
	$telephone_personne = $row['telephone_personnes'];
	$mail_personne = $row['email_personnes'];
	$societe_id_societe = $row['societe_id_societes'];
}





?>

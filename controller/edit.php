<?php
include('../model/db.php');
if(isset($_POST['edit']))
{ 
$id_societe = $_GET['id'];

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
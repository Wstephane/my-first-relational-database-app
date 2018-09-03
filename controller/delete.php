<?php
include('../model/db.php');
$id_societe = $_GET['id'];
$sql = "DELETE FROM societe WHERE id_societe=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id_societe));
header("Location: ../public/view/frontend/societe.php");

// Facture
$id_facture = $_GET['id'];
$sql = "DELETE FROM facture WHERE id_facture=id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id_facture));
header("Location: ../public/view/frontend/facture.php");
?>
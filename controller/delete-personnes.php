<?php
include('../model/db.php');
$id_personnes= $_GET['id'];
$sql = "DELETE FROM personnes WHERE id_personnes=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id_personnes));
header("Location: ../public/view/frontend/clients.php");
?>

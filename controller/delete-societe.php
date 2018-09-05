<?php
session_start();
include('../model/db.php');
if ($_SESSION['role'] !== 'ADMIN'){
    header("Location: ../public/view/frontend/list/societe.php?error=1");
}else{
$id_societe = $_GET['id'];
$sql = "DELETE FROM societe WHERE id_societe=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id_societe));
header("Location: ../public/view/frontend/list/societe.php");
}
?>

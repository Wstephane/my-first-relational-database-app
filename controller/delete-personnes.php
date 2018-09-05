<?php
include('../model/db.php');
if ($_SESSION['role'] !== 'ADMIN'){
    header("Location: ../public/view/frontend/clients.php?error=1");
}else{
    $id_personnes= $_GET['id'];
    $sql = "DELETE FROM personnes WHERE id_personnes=:id";
    $query = $db->prepare($sql);
    $query->execute(array(':id' => $id_personnes));
    header("Location: ../public/view/frontend/clients.php");
}
?>

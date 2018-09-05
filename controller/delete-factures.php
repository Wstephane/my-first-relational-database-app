<?php
$id_facture = $_GET['id'];
if ($_SESSION['role'] !== 'ADMIN'){
    header("Location: ../public/view/frontend/factures.php?error=1");
}else{
    $sql = "DELETE FROM facture WHERE id_facture=id";
    $query = $db->prepare($sql);
    $query->execute(array(':id' => $id_facture));
    header("Location: ../public/view/frontend/factures.php");
}
?>
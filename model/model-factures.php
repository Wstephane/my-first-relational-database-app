<?php
    include("db.php");

    if (isset($_POST['submit'])) {
        include('../controller/controller-factures.php');

        $stmt = $db->prepare("INSERT INTO facture (id_factures, numero_facture, date_facture, objet facture, societe_id_societe, personnes_id_personnes)
        VALUES  (:id_factures, :numero_facture, :date_facture, :objet facture, : societe_id_societe, :personnes_id_personnes)");

        $stmt->bindParam(':id_factures', $id_factures);
        $stmt->bindParam(':numero_facture', $id_numero_facture);
        $stmt->bindParam(':date_facture', $id_date_facture);
        $stmt->bindParam(':objet facture', $id_objet_facture);
        $stmt->bindParam(':societe_id_societe', $id_societe_id_societe);
        $stmt->bindParam(':personnes_id_personnes', $personnes_id_personnes);

        $stmt->Execute();
        header("Location: ../vue/factures");
    }
?>


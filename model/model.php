<?php
  include('db.php');

  if (isset($_POST['submit']))
  {
    include('../controller/controller.php');

    $stmt = $db->prepare("INSERT INTO societe (nom_societe, pays_societe, tva_societe, telephone_societe, types_id_types) 
    VALUES (:nom_societe, :pays_societe, :tva_societe, :telephone_societe, :types_id_types)");

    // $stmt->bindParam(':id_societe', $id_societe);
    $stmt->bindParam(':nom_societe', $nom_societe);
    $stmt->bindParam(':pays_societe', $pays_societe);
    $stmt->bindParam(':tva_societe', $tva_societe);
    $stmt->bindParam(':telephone_societe', $telephone_societe);
    $stmt->bindParam(':types_id_types', $types_id_types);
    
    $stmt->execute();
    header("Location: ../public/view/frontend/societe.php");
  }

    if (isset($_POST['submit_factures'])) {
        include('../controller/controller.php');

        $stmt = $db->prepare("INSERT INTO facture (id_factures, numero_facture, date_facture, objet facture, societe_id_societe, personnes_id_personnes)
        VALUES  (:id_factures, :numero_facture, :date_facture, :objet facture, : societe_id_societe, :personnes_id_personnes)");

        $stmt->bindParam(':id_factures', $id_factures);
        $stmt->bindParam(':numero_facture', $id_numero_facture);
        $stmt->bindParam(':date_facture', $id_date_facture);
        $stmt->bindParam(':objet facture', $id_objet_facture);
        $stmt->bindParam(':societe_id_societe', $id_societe_id_societe);
        $stmt->bindParam(':personnes_id_personnes', $personnes_id_personnes);

        $stmt->Execute();
        header("Location: ../public/view/frontend/factures.php");
    }
?>
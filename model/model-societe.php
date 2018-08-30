<?php
  include('db.php');

  if (isset($_POST['submit']))
  {
    include('../controller/controller-societe.php');

    $stmt = $db->prepare("INSERT INTO societe (id_societe, nom_societe, pays_societe, tva_societe, telephone_societe, factures_id_factures, personnes_id_personnes) 
    VALUES (:id_societe, :nom_societe, :pays_societe, :tva_societe, :telephone_societe, :factures_id_factures, :personnes_id_personnes)");

    $stmt->bindParam(':id_societe', $id_societe);
    $stmt->bindParam(':nom_societe', $nom_societe);
    $stmt->bindParam(':pays_societe', $pays_societe);
    $stmt->bindParam(':tva_societe', $tva_societe);
    $stmt->bindParam(':telephone_societe', $telephone_societe);
    $stmt->bindParam(':factures_id_factures', $factures_id_factures);
    $stmt->bindParam(':personnes_id_personnes', $personnes_id_personnes);
    
    $stmt->execute();
    header("Location: ../vue/societe.php");
  }
?>
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

  else if (isset($_POST['submit-clients']))
  {
    include('../controller/controller.php');

    $stmt = $db->prepare("INSERT INTO personnes (prenom_personnes, nom_personnes, telephone_personnes, email_personnes,societe_id_societe)
    VALUES (:prenom_personnes, :nom_personnes, :telephone_personnes, :email_personnes, :societe_id_societe)");

    // $stmt->bindParam(':id_societe', $id_societe);
    $stmt->bindParam(':prenom_personnes', $prenom_personne);
    $stmt->bindParam(':nom_personnes', $nom_personne);
    $stmt->bindParam(':telephone_personnes', $telephone_personne);
    $stmt->bindParam(':email_personnes', $email_personne);
    $stmt->bindParam(':societe_id_societe', $societe_id_societe);

    $stmt->execute();
    header("Location: ../public/view/frontend/clients.php");
  }


?>

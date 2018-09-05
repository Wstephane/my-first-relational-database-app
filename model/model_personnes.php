<?php
if (isset($_POST['submit-clients']))
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
    header("Location: ../public/view/frontend/list/clients.php");
  }

?>

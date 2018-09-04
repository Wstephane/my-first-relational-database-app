 <?php

  // Factures

  if (isset($_POST['submit_facture'])) {
    include('../controller/controller.php');
    
    $stmt = $db->prepare("INSERT INTO factures (id_factures, numero_facture, date_facture, objet_facture, societe_id_societe, personnes_id_personnes)
    VALUES (:id_factures, :numero_facture, :date_facture, :objet_facture, :societe_id_societe, :personnes_id_personnes)");
    
    $stmt->bindParam(':id_factures', $id_factures);
    $stmt->bindParam(':numero_facture', $numero_facture);
    $stmt->bindParam(':date_facture', $date_facture);
    $stmt->bindParam(':objet_facture', $objet_facture);
    $stmt->bindParam(':societe_id_societe', $societe_id_societe);
    $stmt->bindParam(':personnes_id_personnes', $personnes_id_personnes);
    
    $stmt->Execute();
    header("Location: ../public/view/frontend/factures.php");
    }

  // if (count($error_list) != 0){
  //   $string = '../public/view/frontend/forms/add-facture.php?status=false';
  //   foreach ($error_list as $index=>$value) {
  //       $string .= '&'.$value.'=false';
  //   }
  //   var_dump($string);
  //   header('Location: '.$string);

  // } else {
    
  //   header('Location: ../public/view/index.php');
  // }

  ?>
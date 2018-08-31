<?php
  include('db.php');

  if (isset($_POST['submit_societe']))
  {
    include('../controller/controller.php');

    $stmt = $db->prepare("INSERT INTO societe (nom_societe, pays_societe, tva_societe, telephone_societe, types_id_types) 
    VALUES (:nom_societe, :pays_societe, :tva_societe, :telephone_societe, :types_id_types)");

    $stmt->bindParam(':nom_societe', $nom_societe);
    $stmt->bindParam(':pays_societe', $pays_societe);
    $stmt->bindParam(':tva_societe', $tva_societe);
    $stmt->bindParam(':telephone_societe', $telephone_societe);
    $stmt->bindParam(':types_id_types', $types_id_types);
    
    $stmt->execute();
    header("Location: ../public/view/frontend/societe.php");
  }

  if(count($error_list) != 0){
    $string = '../public/view/frontend/forms/add-societe.php?status=false';
    foreach($error_list as $index=>$value){
        $string .= '&'.$value.'=false';
    }
    var_dump($string);
    header('Location: '.$string);
  }else{
    header('Location: ../public/view/index.php');
  }

  // Factures

  if (isset($_POST['submit_factures'])) {
    include('../controller/controller.php');
    
    $stmt = $db->prepare("INSERT INTO facture (id_factures, numero_facture, date_facture, objet_facture, societe_id_societe, personnes_id_personnes)
    VALUES (:id_factures, :numero_facture, :date_facture, :objet facture, : societe_id_societe, :personnes_id_personnes)");
    
    $stmt->bindParam(':id_factures', $id_factures);
    $stmt->bindParam(':numero_facture', $numero_facture);
    $stmt->bindParam(':date_facture', $date_facture);
    $stmt->bindParam(':objet_facture', $objet_facture);
    $stmt->bindParam(':societe_id_societe', $societe_id_societe);
    $stmt->bindParam(':personnes_id_personnes', $personnes_id_personnes);
    
    $stmt->Execute();
    header("Location: ../public/view/frontend/factures.php");
    }

  if (count($error_list) != 0){
    $string = '../public/view/frontend/forms/add-facture.php?status=false';
    foreach ($error_list as $index=>$value) {
        $string .= '&'.$value.'=false';
    }
    var_dump($string);
    header('Location: '.$string);

  } else {
    
    header('Location: ../public/view/index.php');
  }

?>
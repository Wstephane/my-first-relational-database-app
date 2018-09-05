<?php
include('../../../../model/db.php');

if(isset($_POST['edit-facture']))
{ 	
    $id_facture = $_POST['id_facture'];
    
    $numero_facture = $_POST['numero_facture'];
    $date_facture = $_POST['date_facture'];
    $objet_facture = $_POST['objet_facture'];
    $societe_id_societe = $_POST['societe_id_societe'];
    $personnes_id_personnes = $_POST['personnes_id_personnes'];
    
    if ($_SESSION['role'] !== 'ADMIN'){
        header("Location: ../../../../public/view/index.php?error=1");
    
    }else{
    $sql = "UPDATE facture SET numero_facture=:numero_facture, date_facture=:date_facture, objet_facture=:objet_facture, societe_id_societe=:societe_id_societe, personnes_id_personnes=:personnes_id_personnes
    WHERE id_facture=:id_facture";
    $query = $db->prepare($sql);
    }

        $query->bindParam(':id_facture', $id_facture);
        $query->bindParam(':numero_facture', $numero_facture);
        $query->bindParam(':date_facture', $date_facture);
        $query->bindParam(':objet_facture', $objet_facture);
        $query->bindParam(':societe_id_societe', $societe_id_societe);
        $query->bindParam(':personnes_id_personnes', $personnes_id_personnes);

    $result = $query->execute();
    header("Location: ../../../../public/view/frontend/facture.php");
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM facture WHERE id_facture=:id";
    $query = $db->prepare($sql);
    $query->execute(array(':id' => $id));

    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
        $id_facture = $row['id_facture'];
        $numero_facture = $row['numero_facture'];
        $date_facture = $row['date_facture'];
        $objet_facture = $row['objet_facture'];
        $societe_id_societe = $row['societe_id_societe'];
        $personnes_id_personnes = $row['personnes_id_personnes'];
    }
?>

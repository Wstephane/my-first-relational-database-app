<?php 
    // $id_societe = $_POST['id_societe'];
    $nom_societe = $_POST['nom_societe'];
    $pays_societe = $_POST['pays_societe'];
    $tva_societe = $_POST['tva_societe'];
    $telephone_societe = $_POST['telephone_societe'];
    $types_id_types = $_POST['types_id_types'];

    switch($types_id_types){
        case 1:
        echo "Fournisseur";
        break;
        case 2:
        echo "Client";
        break;
    }

    $id_facture = $_POST["id_facture"];
    $date_facture = $_POST["date_facture"];
    $numero_facture = $_POST["numero_facture"];
    $objet_facture = $_POST["objet_facture"];

?>    
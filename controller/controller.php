<?php 
    $error_list = [];
 
    // $id_societe = $_POST['id_societe'];
    $nom_societe = $_POST['nom_societe'];
    $pays_societe = $_POST['pays_societe'];
    $tva_societe = $_POST['tva_societe'];
    $telephone_societe = $_POST['telephone_societe'];
    $types_id_types = $_POST['types_id_types'];

    //Sanitization

    $san_nom_societe = filter_var($nom_societe,FILTER_SANITIZE_STRING);
    $san_pays_societe = filter_var($pays_societe, FILTER_SANITIZE_STRING);
    $san_tva_societe = filter_var($tva_societe, FILTER_SANITIZE_NUMBER_INT);
    $san_telephone_societe = filter_var($telephone_societe, FILTER_SANITIZE_NUMBER_INT);

    if(!$san_nom_societe){
        array_push($error_list, "san_nom_societe");
    }

    if(!$san_pays_societe){
        array_push($error_list, "san_pays_societe");
    }

    if(!$san_tva_societe){
        array_push($error_list, "san_tva_societe");
    }

    if(!$san_telephone_societe){
        array_push($error_list, "san_telephone_societe");
    }

    if(strlen($san_telephone_societe)< 6){
        array_push($error_list, "san_telephone_societe");
    }

    //Facture

    $id_factures = $_POST["id_factures"];
    $date_facture = $_POST["date_facture"];
    $numero_facture = $_POST["numero_facture"];
    $objet_facture = $_POST["objet_facture"];
    $societe_id_societe = $_POST["societe_id_societe"];
    $personne_id_societe = $_POST["personne_id_personne"];

    //Sanitization

    $san_date_facture = filter_var($date_facture,FILTER_SANITIZE_NUMBER_INT);
    $san_numero_facture = filter_var($numero_facture, FILTER_SANITIZE_NUMBER_INT);
    $san_objet_facture = filter_var($objet_facture, FILTER_SANITIZE_STRING);

    if (!$san_date_facture) {
        array_push($error_list, "san_date_facture");
    }

    if (!$san_numero_facture) {
        array_push($error_list, "san_numero_facture");
    }

    if (!$san_objet_facture) {
        array_push($error_list, "san_objet_facture");
    }

    //Clients

    $prenom_personne = $_POST['prenom_personne'];
    $nom_personne = $_POST['nom_personne'];
    $telephone_personne = $_POST['telephone_personne'];
    $email_personne = $_POST['email_personne'];
    $societe_id_societe = $_POST['societe_id_societe'];
?>

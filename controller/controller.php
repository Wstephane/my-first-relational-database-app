<?php
$error_list = [];

    // $id_societe = $_POST['id_societe'];
    $nom_societe = $_POST['nom_societe'];
    $pays_societe = $_POST['pays_societe'];
    $tva_societe = $_POST['tva_societe'];
    $telephone_societe = $_POST['telephone_societe'];
    $types_id_types = $_POST['types_id_types'];

    $prenom_personne = $_POST['prenom_personne'];
    $nom_personne = $_POST['nom_personne'];
    $telephone_personne = $_POST['telephone_personne'];
    $email_personne = $_POST['email_personne'];
    $societe_id_societe = $_POST['societe_id_societe'];

    $san_nom_societe = filter_var($nom_societe,FILTER_SANITIZE_STRING);
    $san_pays_societe = filter_var($pays_societe, FILTER_SANITIZE_STRING);
    $san_tva_societe = filter_var($tva_societe, FILTER_SANITIZE_NUMBER_INT);
    $san_telephone_societe = filter_var($telephone_societe, FILTER_SANITIZE_NUMBER_INT);
    $san_nom_personne = filter_var($nom_personne,FILTER_SANITIZE_STRING);
    $san_prenom_personne = filter_var($prenom_personne,FILTER_SANITIZE_STRING);
    $san_email_personne = filter_var($email_personne,FILTER_SANITIZE_STRING);
    $san_telephone_personne = filter_var($telephone_personne, FILTER_SANITIZE_NUMBER_INT);

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

    if(!$san_nom_personne){
        array_push($error_list, "san_nom_personne");
    }
    if(!$san_prenom_personne){
        array_push($error_list, "san_prenom_personne");
    }
    if(!$san_email_personne){
        array_push($error_list, "san_email_personne");
    }

    if(!$san_telephone_personne){
        array_push($error_list, "san_telephone_personne");
    }

    if(strlen($san_telephone_personne)< 6){
        array_push($error_list, "san_telephone_personne");
    }

    print_r($error_list);
?>

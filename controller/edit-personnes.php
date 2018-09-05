<?php
include('../../../../model/db.php');

if(isset($_POST['edit-personnes']))
{
    $id_personne = $_POST['id_personnes'];
    
    $nom_personne = $_POST['nom_personne'];
    $prenom_personne = $_POST['prenom_personne'];
    $telephone_personne = $_POST['telephone_personne'];
    $mail_personne = $_POST['email_personne'];
    $societe_id_societe = $_POST['societe_id_societe'];
    
    if ($_SESSION['role'] !== 'ADMIN'){
        header("Location: ../../../../public/view/index.php?error=1");
    
    }else{
    $sql = "UPDATE personnes SET prenom_personnes=:prenom_personnes, nom_personnes=:nom_personnes, telephone_personnes=:telephone_personnes, email_personnes=:email_personnes, societe_id_societe=:societe_id_societe
    WHERE id_personnes=:id_personnes";
    $query = $db->prepare($sql);
    }

        $query->bindParam(':id_personnes', $id_personne);
        $query->bindParam(':nom_personnes', $nom_personne);
        $query->bindParam(':prenom_personnes', $prenom_personne);
        $query->bindParam(':telephone_personnes', $telephone_personne);
        $query->bindParam(':email_personnes', $mail_personne);
        $query->bindParam(':societe_id_societe', $societe_id_societe);

    $result = $query->execute();
    header("Location: ../../../../public/view/frontend/clients.php");
    }

    $id_p = $_GET['id'];
    $sql_p = "SELECT * FROM personnes WHERE id_personnes=:id";
    $query_p = $db->prepare($sql_p);
    $query_p->execute(array(':id' => $id_p));

    while($row = $query_p->fetch(PDO::FETCH_ASSOC))
    {
        $id_personne = $row['id_personnes'];
        $nom_personne = $row['nom_personnes'];
        $prenom_personne = $row['prenom_personnes'];
        $telephone_personne = $row['telephone_personnes'];
        $mail_personne = $row['email_personnes'];
        $societe_id_societe = $row['societe_id_societes'];
    }
?>

<?php include('frontend/head.php');?>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php include('frontend/header.php');?>
<?php 
if ( isset($_GET['error']) && $_GET['error'] == 1 )
{
     echo 
     "<div class='notif'>
    <p>Vous n'avez pas les droits d'éditer ou effacer…!</p>
    </div>";
}
?>
<div class="row heading_table">
<h1>Sociétés</h1>
    <div class="waves-effect waves-light btn blue accent-4 add">
        <a href="frontend/forms/add-societe.php">Ajouter une société</a>
    </div>
 </div>   
    <div class="row">
        <table>
            <thead>
            <tr class="row-titles">
                <th class="table-first">Nom</th>
                <th>Pays</th>
                <th>Nº TVA</th>
                <th>Téléphone</th>
                <th colspan= '4'>Type</th>
            </tr>
            </thead>
            <tbody>
                <?php include('../../model/model_societe.php');
                $result = $db->query('SELECT * FROM societe ORDER BY id_societe DESC LIMIT 5');
                $type_name = array(
                    1 => 'Fournisseur',
                    2 => 'Client'
                    );
                    while ($data = $result->fetch())
                {
                ?>
            <tr>
            <td class="table-first"><input name="nom_societe" value="<?=$data["nom_societe"]?>" readonly class="input-read"></td>
            <td><input name="pays_societe" value="<?=$data["pays_societe"]?>" readonly class="input-read"></td>
            <td><input name="tva_societe" value="<?=$data["tva_societe"]?>" readonly class="input-read"></td>
            <td><input name="telephone_societe" value="<?=$data["telephone_societe"]?>" readonly class="input-read"></td>
            <td><input name="types_id_types" value="<?=$type_name[$data['types_id_types']]?>" readonly class="input-read"></td>
            <td><a href="frontend/forms/view-societe.php?id=<?=$data["id_societe"]?>"><i class="far fa-eye"></i></a></td>
            <td><a href="frontend/forms/edit-societe.php?id=<?=$data["id_societe"]?>"><i class="fas fa-pen"></i></a></td>
            <td class="table-last"><a href="../../controller/delete-societe.php?id=<?=$data["id_societe"]?>"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="index-links">
            <a href="frontend/societe.php">Gérér les Sociétés</a>
        </div>
    </div>
<<<<<<< HEAD

=======
>>>>>>> pedro-v2
    <div class="row heading_table">
        <h1>Facture</h1>
        <div class="waves-effect waves-light btn blue accent-4 add">
            <a href="frontend/forms/add-societe.php">Ajouter une facture</a>
        </div>
    </div>
    <div class="row">
        <table>
            <thead>
            <tr class="row-titles">
                <th class="table-first">Numéro</th>
                <th>Date</th>
                <th>Objet</th>
                <th>Personnes</th>
                <th colspan= '4'>Sociétés</th>
            </tr>
            </thead>
            <tbody>
                <?php include('../../model/model_facture.php');
                $result = $db->query('SELECT * FROM factures ORDER BY id_factures DESC LIMIT 5');
                while ($data = $result->fetch())
                {
                ?>
                <tr>
                    <td class="table-first"><input name="numero_facture" value="<?=$data["numero_facture"]?>" readonly class="input-read"></td>
                    <td><input name="date_facture" value="<?=$data["date_facture"]?>" readonly class="input-read"></td>
                    <td><input name="objet_facture" value="<?=$data["objet_facture"]?>" readonly class="input-read"></td>
                    <td><input name="personnes_id_personnes" value="<?=$type_name[$data['personnes_id_personnes']]?>" readonly class="input-read"></td>
                    <td><input name="societe_id_societe" value="<?=$type_name[$data['societe_id_societe']]?>" readonly class="input-read"></td>
                    <td><a href="frontend/forms/view-facture.php?id=<?=$data["id_facture"]?>"><i class="far fa-eye"></i></a></td>
                    <td><a href="frontend/forms/edit-facture.php?id=<?=$data["id_facture"]?>"><i class="fas fa-pen"></i></a></td>
                    <td class="table-last"><a href="../../controller/delete.php?id=<?=$data["id_societe"]?>"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="index-links">
            <a href="frontend/societe.php">Gérér les Factures</a>
        </div>
    </div>

    <div class="row heading_table">
        <h1>Clients</h1>
        <div class="waves-effect waves-light btn blue accent-4 add">
            <a href="frontend/forms/add-clients.php">Ajouter un client</a>
        </div>
    </div>
    <div class="row">
        <table>
            <thead>
            <tr class="row-titles">
                <th class="table-first">Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Téléphone</th>
                <th colspan= '4'>Société</th>
            </tr>
            </thead>
            <tbody>
                <?php include('../../model/model_clients.php');
                $result = $db->query('SELECT * FROM personnes ORDER BY id_personnes DESC LIMIT 5');
                while ($data = $result->fetch())
                {
                ?>
                <tr>
                    <td class="table-first"><input name="nom_personnes" value="<?=$data["nom_personnes"]?>" readonly class="input-read"></td>
                    <td><input name="prenom_personne" value="<?=$data["prenom_personne"]?>" readonly class="input-read"></td>
                    <td><input name="email_personnes" value="<?=$data["email_personnes"]?>" readonly class="input-read"></td>
                    <td><input name="telephone_personnes" value="<?=$data["telephone_personnes"]?>" readonly class="input-read"></td>
                    <td><input name="societe_id_societe" value="<?=$type_name[$data['societe_id_societe']]?>" readonly class="input-read"></td>
                    <td><a href="frontend/forms/view-personnes.php?id=<?=$data["id_societe"]?>"><i class="far fa-eye"></i></a></td>
                    <td><a href="frontend/forms/edit-personnes.php?id=<?=$data["id_societe"]?>"><i class="fas fa-pen"></i></a></td>
                    <td class="table-last"><a href="../../controller/delete.php?id=<?=$data["id_societe"]?>"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="index-links">
            <a href="frontend/clients.php">Gérér les Clients</a>
        </div>
    </div>
</body>
</html>
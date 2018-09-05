<?php include('../head.php');?>
</head>
<body>
<?php include('../header.php');?>
<!-- <section class="menu">
        <a href="index.php">Accueil</a>
        <a href="fournisseurs.php">Founisseurs</a>
        <a href="clients.php">Clients</a>
</section> -->
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
        <a href="../forms/add-societe.php">Ajouter une société</a>
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
                <?php include('../../../../model/model_societe.php');
                $result = $db->query('SELECT * FROM societe');
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
            <td><a href="../forms/view-societe.php?id=<?=$data["id_societe"]?>"><i class="far fa-eye"></i></a></td>
            <td><a href="../forms/edit-societe.php?id=<?=$data["id_societe"]?>"><i class="fas fa-pen"></i></a></td>
            <td class="table-last"><a href="../../../../controller/delete-societe.php?id=<?=$data["id_societe"]?>"><i class="far fa-trash-alt"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <?php include('../footer.php');?>

</body>
</html>

<?php include('../head.php');?>
</head>
<body>
<?php include('../header.php');?>
<?php
if ( isset($_GET['error']) && $_GET['error'] == 1 )
{
     echo
     "<div class='notif'>
    <p>Vous n'avez pas les droits d'Ã©diter ou effacerâ€¦!</p>
    </div>";
}
?>
<div class="row heading_table">
    <h1>Fournisseurs</h1>
</div>
<div class="row">
        <table>
            <thead>
            <tr class="row-titles">
                <th class="table-first">Nom</th>
                <th>Pays</th>
                <th>NÂº TVA</th>
                <th>TÃ©lÃ©phone</th>
            </tr>
            </thead>
            <tbody>
                <?php include('../../../../model/model_societe.php');
                $result = $db->query('SELECT * FROM societe WHERE types_id_types=1');
                // $type_name = array(
                //     1 => 'Fournisseur',
                //     2 => 'Client'
                //     );
                    while ($data = $result->fetch())
                {
                ?>
            <tr>
            <td class="table-first"><input name="nom_societe" value="<?=$data["nom_societe"]?>" readonly class="input-read"></td>
            <td><input name="pays_societe" value="<?=$data["pays_societe"]?>" readonly class="input-read"></td>
            <td><input name="tva_societe" value="<?=$data["tva_societe"]?>" readonly class="input-read"></td>
            <td><input name="telephone_societe" value="<?=$data["telephone_societe"]?>" readonly class="input-read"></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <?php include('../footer.php');?>
</body>
</html>
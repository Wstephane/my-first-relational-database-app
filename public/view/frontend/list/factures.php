<?php include('../head.php')?>
</head>
<body>
<?php include('../header.php')?>
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
  <h1>Liste de Facture</h1>
  <div class="waves-effect waves-light btn blue accent-4 add">
      <a href="../forms/add-facture.php">Ajouter une facture</a>
  </div>
</div>
<div class="row">
    <table>
        <thead>
          <tr class="row-titles">
            <th>Numéro</th>
            <th>Date</th>
            <th>Objet</th>
            <th>Société</th>
            <th>Personnes</th>
        </tr>
        </thead>
        <tbody>
            <?php
                include('../../../../model/model_facture.php');
                $result = $db->query('SELECT * FROM factures');
                while ($data = $result->fetch())
                {
                    ?>
                    <tr>
                        <td><input class="input-read" name="numero_facture" readonly value="<?=$data["numero_facture"]?>"></td>
                        <td><input class="input-read" name="date_facture" readonly value="<?=$data["date_facture"]?>"></td>
                        <td><input class="input-read" name="objet_facture" readonly value="<?=$data["objet_facture"]?>"></td>
                        <td><input class="input-read" name="societe_id_societe" readonly value="<?=$data["societe_id_societe"]?>"></td>
                        <td><input class="input-read" name="personnes_id_personnes" readonly value="<?=$data['personnes_id_personnes']?>"></td>
                        <td><a href="../forms/view-facture.php?id=<?=$data["id_societe"]?>"><i class="far fa-eye"></i></a></td>
                        <td><a href="../forms/edit-facture.php?id=<?=$data["id_societe"]?>"><i class="fas fa-pen"></i></a></td>
                        <td><a href="../../../../controller/delete-factures.php?id=<?=$data["id_facture"]?>"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                    <?php
                }
            ?>
      </tbody>
    </table>
  </div>
    <?php include('../footer.php');?>

</body>
</html>

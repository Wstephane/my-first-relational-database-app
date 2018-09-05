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
	<h1>Liste clients</h1>
  <div class="waves-effect waves-light btn blue accent-4 add">
      <a href="forms/add-contact.php">Ajouter un Client</a>
  </div>
</div>
<div class="row">
    <table>
        <thead>
     <tr class="row-titles">
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
			<th>E-mail</th>
      <th>Société</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
			<?php include('../../../../model/db.php');
			$result = $db->query('SELECT * FROM societe');
			$societe_name = array();
			$i =1;
				while ($data = $result->fetch()){
					$societe_name[$i] = $data['nom_societe'];
					$i ++;
				}
			?>
            <?php include('../../../../model/model_personnes.php');
            $result = $db->query('SELECT * FROM personnes');
                while ($data = $result->fetch())
            {
            ?>
        <tr>
          <td><input class="input-read" name="nom_personne" readonly value="<?=$data["nom_personnes"]?>"></td>
          <td><input class="input-read" name="prenom_personne" readonly value="<?=$data["prenom_personnes"]?>"></td>
          <td><input class="input-read" name="telephone_personne" readonly value="<?=$data["telephone_personnes"]?>"></td>
          <td><input class="input-read" name="email_personne"  readonly value="<?=$data["email_personnes"]?>"></td>
		  <td><input class="input-read" name="societe_id_societe" readonly value="<?=$societe_name[$data["societe_id_societe"]]?>"></td>
		  <td><a href="../forms/view-personnes.php?id=<?=$data["id_personnes"]?>"><i class="far fa-eye"></i></a></td>
		  <td><a href="../forms/edit-personnes.php?id=<?=$data["id_personnes"]?>"><i class="fas fa-pen"></i></a></td>
          <td><a href="../../../../controller/delete-personnes.php?id=<?=$data["id_personnes"]?>"><i class="far fa-trash-alt"></i></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
     </div>
    <?php include('../footer.php');?>

</body>
</html>

<?php include('head.php')?>
<body>
<?php 
if ( isset($_GET['error']) && $_GET['error'] == 1 )
{
     echo 
     "<div class='notif'>
    <p>Vous n'avez pas les droits d'éditer ou effacer…!</p>
    </div>";
}
?>
	<h1>Liste clients</h1>
    <a href="forms/add-contact.php">Ajouter</a>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
						<th>E-mail</th>
            <th>Société</th>
        </tr>
        </thead>
        <tbody>

							<?php include('../../../model/db.php');
							$result = $db->query('SELECT * FROM societe');
							$societe_name = array();
							$i =1;


								while ($data = $result->fetch())
									{
										$societe_name[$i] = $data['nom_societe'];
										$i ++;
									}
							?>
            <?php include('../../../model/model_clients.php');
            $result = $db->query('SELECT * FROM personnes');
                while ($data = $result->fetch())
            {
            ?>
        <tr>
          <td><input name="nom_personne" value="<?=$data["nom_personnes"]?>"></td>
          <td><input name="prenom_personne" value="<?=$data["prenom_personnes"]?>"></td>
          <td><input name="telephone_personne" value="<?=$data["telephone_personnes"]?>"></td>
          <td><input name="email_personne" value="<?=$data["email_personnes"]?>"></td>
					<td><input name="societe_id_societe" value="<?=$societe_name[$data["societe_id_societe"]]?>"></td>
					<td><a href="forms/view-personnes.php?id=<?=$data["id_personnes"]?>"><i class="far fa-eye"></i></a></td>
					<td><a href="forms/edit-personnes.php?id=<?=$data["id_personnes"]?>"><i class="fas fa-pen"></i></a></td>
          <td><a href="../../../controller/delete-personnes.php?id=<?=$data["id_personnes"]?>"><i class="far fa-trash-alt"></i></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>

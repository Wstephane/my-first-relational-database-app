<?php
include("../../../../controller/edit.php");
include('../head.php');
?>
<body>
	<a href="../clients.php">Société</a>
	<h1>Editer Société</h1>
	<form action="edit-personnes.php" method="post">
	<input type="text" name="id_personnes" value="<?php echo $id_personne;?>" class="display-none">
  <div>
    <label for="nom_personne">Nom du membre</label>
    <input type="text" name="nom_personne" value="<?php echo $nom_personne;?>">
  </div>
  <div>
    <label for="prenom_personne">Prénom du membre</label>
    <input type="text" name="prenom_personne" value="<?php echo $prenom_personne;?>">
  </div>
  <div>
    <label for="telephone_personne">Nº de Téléphone</label>
    <input type="number" name="telephone_personne" value="<?php echo $telephone_personne;?>">
  </div>
  <div>
    <label for="email_personne">E-mail du membre</label>
    <input type="mail" name="email_personne" value="<?php echo $mail_personne;?>">
  </div>
		<div>
      <label for="types">Société</label>
      <select name="societe_id_societe" value="<?php echo $societe_id_societe;?>">
      <?php include('../../../../model/db.php');
      $result = $db->query('SELECT * FROM societe');
      $societe_name = array();
      // $i =1;
        while ($data = $result->fetch())
          {
            // $societe_name[$i] = $data['nom_societe'];
            echo "<option value='".$data["id_societe"]."'>".$data['nom_societe']."</option>";
            // $i ++;
          }
      ?>
      </select>
		</div>
		<button type="submit" name="edit-personnes">Envoyer</button>
	</form>
</body>
</html>

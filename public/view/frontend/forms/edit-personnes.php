<?php include("../../../../controller/edit-personnes.php");?>
<?php include('../head.php');?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
<?php include('../../frontend/header-form.php');?>

<div class="container">
	<div class="form-container">
		<div class="row heading_table heading_edit">
			<h1>Editer Membre</h1>
		</div>
	<form action="edit-personnes.php" method="post">
	<input type="text" name="id_personnes" value="<?php echo $id_personne;?>" class="display-none">
  <div class="input-field">
    <label for="nom_personne">Nom du membre</label>
    <input type="text" name="nom_personne" value="<?php echo $nom_personne;?>">
  </div>
  <div class="input-field">
    <label for="prenom_personne">Prénom du membre</label>
    <input type="text" name="prenom_personne" value="<?php echo $prenom_personne;?>">
  </div>
  <div class="input-field">
    <label for="telephone_personne">Nº de Téléphone</label>
    <input type="number" name="telephone_personne" value="<?php echo $telephone_personne;?>">
  </div>
  <div class="input-field">
    <label for="email_personne">E-mail du membre</label>
    <input type="email" name="email_personne" value="<?php echo $mail_personne;?>">
  </div>
		<div>
      <label for="types">Société</label>
      <select name="societe_id_societe" value="<?php echo $societe_id_societe;?>"class="browser-default">
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
		<div class="controls-btn">
			<button type="submit" name="edit-personnes" class="waves-effect waves-light btn blue accent-4 add">Envoyer</button>
			<div class="btn white"><a href="../societe.php">Annuler</a></div>
		</div>
	</form>
</body>
</html>

<?php include('../head.php');?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
<?php include('../../frontend/header.php');?>
	<section class="menu">
		<a href="index.php">Accueil</a>
		<a href="fournisseurs.php">Founisseurs</a>
		<a href="clients.php">Clients</a>   
	</section>
	<div class="container">
		<div class="form-container">
		<div class="row heading_table heading_edit">
			<h1>Ajouter un membre</h1>
		</div>
	<form action="../../../../model/model_personnes.php" method="post" class="add-edit">
		<div class="input-field">
			<label for="nom_personne">Nom du membre</label>
			<input type="text" name="nom_personne" value="">
		</div>
    	<div class="input-field">
			<label for="prenom_personne">Prénom du membre</label>
			<input type="text" name="prenom_personne" value="">
		</div>
		<div class="input-field">
			<label for="telephone_personne">Nº de Téléphone</label>
			<input type="number" name="telephone_personne" value="">
		</div>
		<div class="input-field">
			<label for="email_personne">E-mail du membre</label>
			<input type="email" name="email_personne" value="">
		</div>
		<label for="types">Société</label>
		<select name="societe_id_societe" class="browser-default">
		<?php include('../../../../model/db.php');
		$result = $db->query('SELECT * FROM societe');
		$societe_name = array();
			while ($data = $result->fetch()){
				echo "<option value='".$data["id_societe"]."'>".$data['nom_societe']."</option>";
			}
		?>
		</select>
		<div class="controls-btn">
		<button type="submit" name="submit-clients" class="waves-effect waves-light btn blue accent-4 add">Envoyer</button>
			<div class="btn white"><a href="../personnes.php">Annuler</a></div>
		</div>
	</form>
	</div>
</div>
</body>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
   		var elems = document.querySelectorAll('.autocomplete');
		var instances = M.Autocomplete.init(elems, options);
  	   });
  	</script>
</html>

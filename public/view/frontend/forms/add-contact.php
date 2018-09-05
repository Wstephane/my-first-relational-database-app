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
	<a href="../personnes.php">Personnel</a>
	<h1>Ajouter un membre</h1>
	<form action="../../../../model/model_personnes.php" method="post">
		<div>
			<label for="nom_personne">Nom du membre</label>
			<input type="text" name="nom_personne" value="">
		</div>
    	<div>
			<label for="prenom_personne">Prénom du membre</label>
			<input type="text" name="prenom_personne" value="">
		</div>
		<div>
			<label for="telephone_personne">Nº de Téléphone</label>
			<input type="number" name="telephone_personne" value="">
		</div>
		<div>
			<label for="email_personne">E-mail du membre</label>
			<input type="mail" name="email_personne" value="">
		</div>
		<label for="types">Société</label>
		<select name="societe_id_societe">
		<?php include('../../../../model/db.php');
		$result = $db->query('SELECT * FROM societe');
		$societe_name = array();
			while ($data = $result->fetch()){
				echo "<option value='".$data["id_societe"]."'>".$data['nom_societe']."</option>";
			}
		?>
		</select>
		<button type="submit" name="submit-clients">Envoyer</button>
	</form>
</body>
</html>

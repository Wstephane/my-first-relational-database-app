<?php include('../head.php');?>
<body>
	<a href="../clients.php">Personnel</a>
	<h1>Ajouter un membre</h1>
	<form action="../../../../model/model.php" method="post">
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
		// $i =1;
			while ($data = $result->fetch())
				{
					// $societe_name[$i] = $data['nom_societe'];
					echo "<option value='".$data["id_societe"]."'>".$data['nom_societe']."</option>";
					// $i ++;
				}

		?>
		</select>
		<!-- <div>
			<label for="types">Types</label>
			<select name="types_id_types">
				<option value="1">Fournisseur</option>
				<option value="2">Client</option>
			</select>
		</div> -->
		<button type="submit" name="submit-clients">Envoyer</button>
	</form>
</body>
</html>

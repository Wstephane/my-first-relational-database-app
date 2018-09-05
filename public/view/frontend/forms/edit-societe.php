<?php include("../../../../controller/edit-societe.php"); ?>
<?php include('../head.php');?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
<?php include('../../frontend/header-form.php');?>

<div class="container">
	<div class="form-container">
		<div class="row heading_table heading_edit">
			<h1>Editer Société</h1>
		</div>
	<form action="edit-societe.php" method="post" class="add-edit">
	<input type="text" name="id_societe" value="<?php echo $id_societe;?>" class="display-none">
		<div>
			<label for="name">Nom de la societe</label>
			<input type="text" name="nom_societe" value="<?php echo $nom_societe;?>" required>
		</div>
        <div>
			<label for="pays">Pays de la societe</label>
			<input type="text" name="pays_societe" value="<?php echo $pays_societe;?>" required>
		</div>
		<div>
			<label for="tva">Nº de TVA</label>
			<input type="number" name="tva_societe" value="<?php echo $tva_societe;?>" required>
		</div>
		<div>
			<label for="telephone">Nº de téléphone</label>
			<input type="number" name="telephone_societe" value="<?php echo $telephone_societe;?>" required>
		</div>
		<div>
			<label for="types">Types</label>
			<select name="types_id_types" class="browser-default">
				<option value="1">Fournisseur</option>
				<option value="2">Client</option>
			</select>
		</div>
		<div class="controls-btn">
			<button type="submit" name="edit-societe" class="waves-effect waves-light btn blue accent-4 add">Envoyer</button>
			<div class="btn white"><a href="../societe.php">Annuler</a></div>
		</div>
	</form>
	</div>
</div>
</body>
</html>

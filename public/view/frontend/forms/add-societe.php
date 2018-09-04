<?php include('../head.php');?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
<?php include('../../frontend/header.php');?>
	<div class="container">
		<div class="form-container">
		<div class="row heading_table heading_edit">
			<h1>Ajouter une Société</h1>
		</div>
			<form action="../../../../model/model_societe.php" method="post" enctype="multipart/form-data" class="add-edit">
				<div class="input-field">
					<label for="name">Nom de la societe</label>
					<input type="text" name="nom_societe" value="">
					<?php
					if(!isset($_GET['san_nom_societe'])){
						$_GET['san_nom_societe'] = "";}
						if($_GET['san_nom_societe'] == "false"){
							echo '<p class="error">Veuillez introduire un nom correct.</p>';
						}	
					?>
				</div>
				<div class="input-field">
					<label for="pays">Pays de la societe</label>
					<input type="text" name="pays_societe" value="">
					<?php
					if(!isset($_GET['san_pays_societe'])){
						$_GET['san_pays_societe'] = "";}
						if($_GET['san_pays_societe'] == "false"){
							echo '<p class="error">Veuillez introduire un pays correct.</p>';
						}	
					?>
				</div>
				<div class="input-field">
					<label for="tva">Nº de TVA</label>
					<input type="number" name="tva_societe" value="">
					<?php
					if(!isset($_GET['san_tva_societe'])){
						$_GET['san_tva_societe'] = "";}
						if($_GET['san_tva_societe'] == "false"){
							echo '<p class="error">Veuillez introduire un número correct.</p>';
						}	
					?>
				</div>
				<div class="input-field">
					<label for="telephone">Nº de téléphone</label>
					<input type="number" name="telephone_societe" value="">
					<?php
					if(!isset($_GET['san_telephone_societe'])){
						$_GET['san_telephone_societe'] = "";}
						if($_GET['san_telephone_societe'] == "false"){
							echo '<p class="error">Veuillez introduire un número correct.</p>';
						}	
					?>
				</div>
				<div class="input-select">
					<label for="types">Types</label>
					<select name="types_id_types" class="browser-default">
						<option value="1">Fournisseur</option>
						<option value="2">Client</option>
					</select>
				</div>
				<div class="controls-btn">
					<button type="submit" name="submit_societe" class="waves-effect waves-light btn blue accent-4 add">Envoyer</button>
					<div class="btn white"><a href="../societe.php">Annuler</a></div>
				</div>
			</form>
		</div>
	</div>
	<script>
		  document.addEventListener('DOMContentLoaded', function() {
   			var elems = document.querySelectorAll('.autocomplete');
   			var instances = M.Autocomplete.init(elems, options);
  		});
  </script>
</body>
</html>
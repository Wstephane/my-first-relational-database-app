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
			<h1>Ajouter une Facture</h1>
		</div>
	<form action="../../../../model/model_facture.php" method="post" enctype="multipart/form-data" class="add-edit">
		<div class="input-field">
			<label for="numero_facture">Numéro de facture</label>
			<input type="number" name="numero_facture" value="">
			<?php
			if(!isset($_GET['san_numero_facture'])){
				$_GET['san_numero_facture'] = "";}
                if($_GET['san_numero_facture'] == "false"){
                    echo '<p class="error">Veuillez introduire un numéro de facture correct.</p>';
				}
            ?>
		</div>
		<div>
			<label for="date_facture">Date de la facture</label>
			<input type="date" name="date_facture" value="">
			<?php
			if(!isset($_GET['san_date_facture'])){
				$_GET['san_date_facture'] = "";}
                if($_GET['san_date_facture'] == "false"){
                    echo '<p class="error">Veuillez introduire une date correct.</p>';
				}
            ?>
		</div>
		<div class="input-field">
			<label for="objet">Objet de la facture</label>
			<input type="text" name="objet_facture" value="">
			<?php
			if(!isset($_GET['san_objet_facture'])){
				$_GET['san_objet_facture'] = "";}
                if($_GET['san_objet_facture'] == "false"){
                    echo '<p class="error">Veuillez introduire un objet correct.</p>';
				}
            ?>
		</div>
		<div class="controls-btn">
			<button type="submit" name="submit_facture" class="waves-effect waves-light btn blue accent-4 add">Envoyer</button>
			<div class="btn white"><a href="../factures.php">Annuler</a></div>
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
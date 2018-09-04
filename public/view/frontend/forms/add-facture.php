<?php include('../head.php');?>
<body>
	<a href="../factures.php">Facture</a>
	<h1>Ajouter une Facture</h1>
	<form action="../../../../model/model_facture.php" method="post" enctype="multipart/form-data">
		<div>
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
		<div>
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
		<button type="submit" name="submit_facture">Envoyer</button>
	</form>
</body>
</html>
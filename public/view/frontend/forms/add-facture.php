<?php include('../head.php');?>
<body>
	<a href="../factures.php">Facture</a>
	<h1>Ajouter une facture</h1>
	<form action="../model/model.php" method="post">
		<div>
			<label for="numero">Numéro de facture</label>
			<input type="number" name="numero_facture" value="">
		</div>
        <div>
			<label for="date_facture">Date de la facture</label>
			<input type="date" name="date_facture" value="">
		</div>
		<div>
			<label for="objet">Objet de la facture</label>
			<input type="text" name="objet_facture" value="">
		</div>
		<button type="submit" name="submit_facture">Envoyer</button>
	</form>
</body>
</html>
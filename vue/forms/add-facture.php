<?php include('../head.php');?>
<body>
	<a href="../factures.php">Facture</a>
	<h1>Ajouter une facture</h1>
	<form action="../../model/model-factures.php" method="post">
		<div>
			<label for="numero">Numéro de facture</label>
			<input type="text" name="numero_de_facture" value="">
		</div>
        <div>
			<label for="date_facture">Date de la facture</label>
			<input type="text" name="date_facture" value="">
		</div>
		<div>
			<label for="objet">Objet de la facture</label>
			<input type="number" name="objet" value="">
		</div>
		<button type="submit" name="submit">Envoyer</button>
	</form>
</body>
</html>
<?php include('../head.php');?>
<body>
	<a href="../societe.php">Societe</a>
	<h1>Ajouter une societe</h1>
	<form action="../../model/model-societe.php" method="post">
		<div>
			<label for="name">Nom de la societe</label>
			<input type="text" name="nom_societe" value="">
		</div>
        <div>
			<label for="pays">Pays de la societe</label>
			<input type="text" name="pays_societe" value="">
		</div>
		<div>
			<label for="tva">Nº de TVA</label>
			<input type="number" name="tva_societe" value="">
		</div>
		<div>
			<label for="telephone">Nº de téléphone</label>
			<input type="number" name="telephone_societe" value="">
		</div>
		<button type="submit" name="submit">Envoyer</button>
	</form>
</body>
</html>
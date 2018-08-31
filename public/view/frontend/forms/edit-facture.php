<?php
include("../../../../controller/edit.php");
include('../head.php');
?>
<body>
	<a href="../facture.php">Société</a>
	<h1>Editer Facture</h1>
	<form action="edit-facture.php" method="post">
	<input type="text" name="id_facture" value="<?php echo $id_facture;?>" class="display-none">
		<div>
			<label for="numero_facture">Numéro de facture</label>
			<input type="number" name="numero_facture" value="<?php echo $numero_facture;?>">
		</div>
        <div>
			<label for="date_facture">Date de la facture</label>
			<input type="date" name="date_facture" value="<?php echo $date_facture;?>">
		</div>
		<div>
			<label for="objet_facture">Objet de la facture</label>
            <input type="text" name="objet_facture" value="<?php echo $objet_facture;?>">
		</div>
		<button type="submit" name="edit-facture">Envoyer</button>
	</form>
</body>
</html>
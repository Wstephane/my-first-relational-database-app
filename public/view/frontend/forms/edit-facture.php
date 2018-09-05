<?php include("../../../../controller/edit-factures.php");?>
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
	<a href="../facture.php">Facture</a>
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
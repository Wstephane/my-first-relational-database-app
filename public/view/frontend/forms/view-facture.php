<?php include("../../../../controller/edit.php");?>
<?php include('../head.php'); ?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
	<body>
	<?php include('../../frontend/header-form.php');?>

		<div class="container">
			<div class="form-container view">
				<div class="input-view">
					<label for="numero">Numéro de la Facture</label>
					<p><?php echo $numero_facture;?></p>
				</div>
				<div class="input-view">
					<label for="date">Date de la Facture</label>
					<p><?php echo $date_facture;?></p>
				</div>
				<div class="input-view">
					<label for="objet">Objet de la Facture</label>
					<p><?php echo $objet_facture;?></p>
				</div>
				<div class="controls-btn btn-edit">
					<div class="waves-effect waves-light btn blue accent-4 add"><a href="edit-facture.php?id=<?=$id_societe?>">Éditer</a></div>
					<div class="btn white"><a href="../factures.php">Retour</a></div>
				</div>
			</div>
		</div>
	</body>
</html>

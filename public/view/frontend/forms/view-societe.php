<?php include("../../../../controller/edit.php");?>
<?php include('../head.php'); ?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
	<body>
	<?php include('../../frontend/header.php');?>
		<div class="container">
			<div class="form-container view">
				<div class="input-view">
					<label for="name">Nom de la societe</label>
					<p><?php echo $nom_societe;?></p>
				</div>	
				<div class="input-view">
					<label for="pays">Pays de la societe</label>
					<p><?php echo $pays_societe;?></p>
				</div>		
				<div class="input-view">	
					<label for="tva">Nº de TVA</label>
					<p><?php echo $tva_societe;?></p>
				</div>		
				<div class="input-view">	
					<label for="telephone">Nº de téléphone</label>
					<p><?php echo $telephone_societe;?></p>
				</div>		
				<div class="input-view">	
					<label for="types">Type</label>
					<p>
						<?php 
							if($types_id_types == 1){
								echo "Fournisseur";
							}else{
								echo "Client";
							}
						?>
					</p>
				</div>	
				<div class="controls-btn btn-edit">	
					<div class="waves-effect waves-light btn blue accent-4 add"><a href="edit-societe.php?id=<?=$id_societe?>">Éditer</a></div>
					<div class="btn white"><a href="../societe.php">Retour</a></div>
				</div>	
			</div>
		</div>
	</body>
</html>
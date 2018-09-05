<?php include("../../../../controller/edit.php");?>
<?php include('../head.php');?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
<?php include('../../frontend/header-form.php');?>

	<div class="container">
 <div class="form-container view">
	 <div class="input-view">
		 <label for="name">Nom de la personne</label>
		 <p><?php echo $nom_personne.' '.$prenom_personne;?></p>
	 </div>
	 <label for="number">Téléphone de la personne</label>
		 <div class="input-view">
		 <p><?php echo $telephone_personne;?></p>
	 </div>
	 <div class="input-view">
		 <label for="Email">E-mail de la personne</label>
		 <p><?php echo $mail_personne;?></p>
	 </div>
	 <div class="input-view">
		 <label for="text">Nom de la société</label>
		 <p><?php echo $nom_societe;?></p>
	 </div>
 </div>
 </div>
</body>
</html>

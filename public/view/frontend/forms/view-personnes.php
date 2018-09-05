<?php include("../../../../controller/edit.php");?>
<? include('../head.php');?>
<link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body>
<?php include('../../frontend/header.php');?>
	<section class="menu">
        <a href="index.php">Accueil</a>
        <a href="fournisseurs.php">Founisseurs</a>
        <a href="clients.php">Clients</a>   
	</section>
	<a href="../clients.php">Membres</a>
	<h2><?php echo $nom_personne.' '.$prenom_personne;?></h2>
	<p><?php echo $telephone_personne;?></p>
	<p><?php echo $mail_personne;?></p>
	<p><?php echo $nom_societe;?></p>
</body>
</html>

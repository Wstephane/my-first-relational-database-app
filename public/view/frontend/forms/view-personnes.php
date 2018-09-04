<?php
include("../../../../controller/edit.php");
include('../head.php');
?>
<body>
	<a href="../clients.php">Membres</a>
	<h2><?php echo $nom_personne.' '.$prenom_personne;?></h2>
	<p><?php echo $telephone_personne;?></p>
	<p><?php echo $mail_personne;?></p>
	<p><?php echo $nom_societe;?></p>
</body>
</html>

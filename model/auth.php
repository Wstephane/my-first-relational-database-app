<?php
	//Formulaire soumis
    if(!empty($_POST['login'])){
	
		//Activer le gestionnaire de session.
		session_start();
		
		//Obtenir la saisie de l'internaute
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];
		
		//Le code SQL
		$query = "SELECT * FROM users WHERE login='$login' AND pwd='$pwd';";
		
		//Lien de connexion (API MySQLi)
		$db = mysqli_connect('localhost','root','root','cogip') or die("Connexion impossible " . mysqli_error());
		
		//Execution et obtention d'un curseur
		$curseur = mysqli_query($db, $query) or die("exec impossible " . mysqli_error());
		
		//Test du nombre de lignes obtenu
		if(mysqli_num_rows($curseur) == 1){
			//Authentification OK, obtenir les infos
			$data = mysqli_fetch_object($curseur);
			
			//Compte actif ou pas?
			if($data->active == 1){
				//Variables de session
				$_SESSION['auth'] = $login;
				$_SESSION['nom'] = $data->nom;
				$_SESSION['prenom'] = $data->prenom;
				$_SESSION['active'] = $data->active;
				$_SESSION['role'] = $data->role;
				
				//Test des droits
				switch($data->role){
					case 'ADMIN': header("location:" . "../public/view/index.php");
					exit;
					break;
					
					case 'OPERATEUR': header("location:" . "../public/view/index.php");
					exit;
					break;
					
				}
			}
			else{
				//Le compte est inactif
				$msg = "Login ou mot de passe incorrect";
				
				//Redirection
				header("location:" . "../public/view/login.php?msg=$msg");
				exit;
			}
		}
		else{
			//Aucun utilisateur
			$msg = "Login ou mot de passe incorrect";
			
			//Redirection
			header("location:" . "../public/view/login.php?msg=$msg");
			exit;
		}
	}
?>
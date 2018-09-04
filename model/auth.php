<?php
    if(!empty($_POST['login'])){
		session_start();
		$login = $_POST['login'];
		$pwd = $_POST['pwd'];

		$query = "SELECT * FROM users WHERE login='$login' AND pwd='$pwd';";
		$db = mysqli_connect('localhost','root','root','cogip') or die("Connexion impossible " . mysqli_error());

		$curseur = mysqli_query($db, $query) or die("exec impossible " . mysqli_error());
		
		if(mysqli_num_rows($curseur) == 1){
			$data = mysqli_fetch_object($curseur);
			
			if($data->active == 1){
				$_SESSION['auth'] = $login;
				$_SESSION['nom'] = $data->nom;
				$_SESSION['prenom'] = $data->prenom;
				$_SESSION['active'] = $data->active;
				$_SESSION['role'] = $data->role;
				
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
				$msg = "Login ou mot de passe incorrect.";
				header("location:" . "../public/view/login.php?msg=$msg");
				exit;
			}
		}
		else{
			$msg = "Login ou mot de passe incorrect.";
			header("location:" . "../public/view/login.php?msg=$msg");
			exit;
		}
	}
?>
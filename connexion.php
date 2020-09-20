<?php
session_start();
try
{
	$bdd = new PDO("mysql:host=db674816893.db.1and1.com;dbname=db674816893","dbo674816893","fatnajo");

}
catch(Exception $e)
{
	die("erreur de connexion");
}


if(isset($_POST['submit']))
{
	extract($_POST);

	$requete = $bdd->prepare("SELECT * FROM candidat
                                    WHERE pseudo = :pseudo
                                    AND mdp = :mdp");
	$requete->bindValue(":pseudo",$pseudo, PDO::PARAM_STR);
	$requete->bindValue(":mdp", $mdp, PDO::PARAM_STR);
	$requete->execute();

	$requetes = $bdd->query("SELECT * FROM candidat WHERE pseudo = '".$pseudo."' AND mdp = '".$mdp."'");
	$reponse = $requetes->fetch();

	if(!empty($_POST['pseudo'])&&!empty($_POST['mdp']))

	{

		$_SESSION['connecte'] = true;
		$_SESSION['id'] = $reponse['id'];


		if($reponse)
		{
			header("Location:accueil.php");
		}
?>
<FONT COLOR="red" ><?php echo'mauvais identifiant'?></FONT>;
<?php
	}

?>
<FONT COLOR="red" ><?php echo 'champs vide' ?></FONT>;
<?php

}

if(isset($_COOKIE['auth']))
{
	$auth = $_COOKIE['auth'];
	$auth = explode('-----',$auth);
	$user = $bdd->prepare("SELECT * FROM candidat WHERE id=:id");
	$user->bindValue(':id',$auth[0],PDO::PARAM_INT);
	$user->execute();
	$donnee = $user->fetch();
	$key = sha1($donnee['pseudo'].$donnee['mdp'].$_SERVER['REMOTE_ADDR']);
	if($key == $auth[1])
	{
		$_SESSION['connecte'] = true;
		$_SESSION['id'] = $donnee['id'];
		setcookie('auth', $donnee['id'].'-----'.sha1($donnee['pseudo'].$donnee['mdp'].$_SERVER['REMOTE_ADDR']), time()+(3600*24*3));
		//le dernier argument evite que le cookie soit editable en javascript


	}
	else
	{
		setcookie('auth','',time()-3600);
		//
	}
}



?>

<html>
	<head>
		<meta charset="utf-8">



		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/connexion.css" rel="stylesheet">





		<title>CONNEXION</title>
	</head>
	<body background="img/autoecole.jpg">
		<div class="row">
			<div class="col-md-offset-4 col-md-4">

				<form action="#" method="post">

					<h1>Connexion</h1><br>
					<div class="form-group">
						<input type="text" id="contact_nom" class="form-control" placeholder="Pseudo" name="pseudo" required/>
					</div>
					<div class="form-group">
						<input type="password" id="contact_mdp" class="form-control" placeholder="Mot de passe" name="mdp" required/>
					</div>
					<br>                                
					<button type="submit" class="btn btn-warning" name="submit">Connexion</button>
				</form>
			</div>
		</div>
		<div class="col-md-offset-5 col-md-2 retour">
			<a href="index.html"><p>Retour à l'écran d'accueil</p></a>
		</div>





	</body>
</html>
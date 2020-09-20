<?php
session_start();//demarre une session

try
{
	$bdd = new PDO("mysql:host=db674816893.db.1and1.com;dbname=db674816893","dbo674816893","fatnajo");

}
catch(Exception $e)
{
	die("erreur de connexion");
}



if (isset($_POST['submit']))
{
	extract($_POST);

	/*$i=0;
            $message="";

            $login=$_POST['login'];
            $mdp=$_POST['mdp'];
            $confirm=$_POST['confirm'];
            $email=$_POST['email'];

            extract($_POST);

            if(empty($mdp) || !preg_match("#^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$#",$mdp))
            {
                $i++;
                $message .= "Votre mdp n'est pas valide<br/>";
                echo $message;
            }

            if(empty($email) || !preg_match("#^[a-z0-9._-]{2,20}@[a-z0-9._-]{2,20}\.[a-z]{2,6}$#",$email))
            {
                $i++;
                $message .= "Votre email n'est pas valide<br/>";
                echo $message;
            }

            if(empty($tel) || !preg_match("#^[0-9]{9}$#",$tel))
            {
                $i++;
                $message .= "Votre tel n'est pas valide<br/>";
                echo $message;
            }

            else
                $requete->bindValue(":mdp",$mdp,PDO::PARAM_STR);
            {*/
	$requete = $bdd->prepare("INSERT INTO candidat(pseudo, mdp, email, nom, prenom, tel) VALUES(:pseudo,:mdp,:email,:nom,:prenom,:tel)");
	$requete->bindValue(":pseudo",$pseudo,PDO::PARAM_STR);
	$requete->bindValue(":mdp", $mdp, PDO::PARAM_STR);
	$requete->bindValue(":email",$email,PDO::PARAM_STR);
	$requete->bindValue(":nom",$nom,PDO::PARAM_STR);
	$requete->bindValue(":prenom",$prenom,PDO::PARAM_STR);
	$requete->bindValue(":tel",$tel,PDO::PARAM_STR);

	$requete->execute();
	header("Location:https://www.jfdev.fr/Casta/confirmation.html");
}

?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>PRE-INSCRIPTION</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/inscription.css" rel="stylesheet">
	</head>
	<body>
		<div class="row">
			<div class="col-md-offset-4 col-md-4">

				<form action="#" method="post">

					<h1>Pré-inscription</h1><br>
					<div class="form-group">
						<input type="Nom" id="contact_nom" class="form-control" placeholder="Nom" name="nom" required/>
					</div> 
					<div class="form-group">
						<input type="Prenom" id="contact_prenom" class="form-control" placeholder="Prenom" name="prenom" required/>
					</div>                  
					<div class="form-group">
						<input type="Tel" id="contact_tel" class="form-control" placeholder="Tel" name="tel" required/>
					</div>
					<div class="form-group">
						<input type="email" id="contact_email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._-]{2,20}@[a-z0-9._-]{2,20}\.[a-z]{2,6}" required/>
					</div>
					<div class="form-group">
						<input type="text" id="contact_nom" class="form-control" placeholder="Pseudo" name="pseudo" required/>
					</div>
					<div class="form-group">
						<input type="password" id="contact_mdp" class="form-control" placeholder="Mot de passe" name="mdp" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$=@%_])([-+!*$=@%_\w]{8,15})$" required/>
					</div>
					<br>                                
					<button type="submit" class="btn btn-warning" name="submit">Valider</button>
				</form>
			</div>
		</div>
		<div class="col-md-offset-5 col-md-2 retour">
			<a href="index.html"><p>Retour à l'écran d'accueil</p></a>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>


	</body>
</html>





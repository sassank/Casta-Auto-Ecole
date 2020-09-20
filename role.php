
<?php
session_start();
try
{
$bdd = new PDO($bdd = new PDO("mysql:host=db674816893.db.1and1.com;dbname=db674816893","dbo674816893","fatnajo",
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
/*
       $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

        $requete = $bdd->query("SELECT * FROM membre WHERE pseudo = '".$pseudo."' AND mdp = '".$mdp."'");
        $reponse = $requete->fetch();

        //var_dump($reponse);

        if((!isset($_POST['pseudo']))&&(!isset($_POST['mdp'])))
        {
            echo "veuillez vous connecter";
        }

        else
        {
            if($reponse)
            {
                
                echo "bonjour";
                header('Location: planning.php');
            }
            else
            {
                echo "identifiants faux";
            }
        }
    
*/if(isset($_COOKIE['auth']))
        {
            $auth = $_COOKIE['auth'];
            $auth = explode('-----',$auth);
            $user = $bdd->prepare("SELECT * FROM membre WHERE id=:id");
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

        if(isset($_POST['submit']))
        {
            extract($_POST);

            $requete = $bdd->prepare("SELECT * FROM membre
                                    WHERE pseudo = :pseudo
                                    AND mdp = :mdp");
            $requete->bindValue(":pseudo",$pseudo, PDO::PARAM_STR);
            $requete->bindValue(":mdp",sha1($mdp), PDO::PARAM_STR);
            $requete->execute();

        $requete = $bdd->query("SELECT * FROM membre WHERE pseudo = '".$pseudo."' AND mdp = '".$mdp."'");
        $reponse = $requete->fetch();

            if(!empty($_POST['pseudo'])&&!empty($_POST['mdp']))
            
            {

                $_SESSION['connecte'] = true;
                $_SESSION['id'] = $reponse['id'];


                if($reponse)
                {
                    header("Location:planning.php");
                }
                ?>
                <FONT COLOR="red" ><?php echo'mauvais identifiant'?></FONT>;
                <?php
            }

            ?>
                <FONT COLOR="red" ><?php echo 'champs vide' ?></FONT>;
            <?php

        }


?>

<html>
    <head>
    <meta charset="utf-8">



    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/role.css" rel="stylesheet">

    



        <title>CONNEXION</title>
    </head>
    <body>
        <div class="">
        <div class="section">
            <a href="connexion.php">SECRETARIAT</a>
            <a href="connexion.php">MONITEUR</a>
            <a href="connexion.php">ELEVE</a>
        </div>
        </div>





    </body>
</html>
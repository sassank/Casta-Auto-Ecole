
<?php
session_start();
try
{
         $bdd = new PDO("mysql:host=db674816893.db.1and1.com;dbname=db674816893","dbo674816893","fatnajo");
		
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>





<?php 

$mois = date('m');
$annee = date('Y');

?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/calendar.css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <title>PLANNING</title> 
</head>
<body>
    <div class="titre">
    <p>Voici votre Planning</p> 
		<a href=deconnexion.php><button type ="button" class="btn btn-primary">Deconnexion</button></a>
</div>

<div>
    <img id="prev" src="img/image.png" height="40px" width="40px" style="float:left;"/>
    <img id="next" src="img/image1.png" height="40px" width="40px" style="float:right;"/>
</div>

<div id="content">
</div>

<script type="text/javascript">
    
jQuery(function($){

    var mois = <?php echo $mois; ?>;
    var annee = <?php echo $annee; ?>;

    $(document).ready(function(){

        $("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");

    });

    $("#prev").click(function(){

        mois--;

        if (mois < 1) {
            annee--;
            mois = 12;
        }

        $("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");

    });

    $("#next").click(function(){

        mois++;

        if (mois > 12) {
            annee++;
            mois = 1;
        }

        $("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");

    });

});

</script>
</body>
</html>
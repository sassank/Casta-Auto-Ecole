<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CASTELLANE-AUTO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
</head>
<body style="background-color:#140B53">

<nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>CASTA-AUTO</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
		<li><a href="index.html#contact">Contact</a></li>
		<li><a href="planning.php">Planning</a></li>
		<li><a href="video.php">Entrainement</a></li>
		<li><a href=deconnexion.php><button type ="button" class="btn btn-default">Deconnexion</button></a>
           </li>		
		<!--<li><a href="#"><button type="button" class="btn btn-primary">Déconnexion</button></a></li>-->
      </ul>
          
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
	<section class="jumbotron">
		<div class="row">
			<div class="col-md-6">
			<embed src="video1.mp4" height="336" width="420" />
			</div>
			<div class="col-md-6">
			<br/><br/><br/>
			<p style="color: black; font-family: arial black ">Je peux dépasser le véhicule devant moi</p><br/>
				<input type="submit" class="btn btn-default" value="A" onclick="alert('La reponse etait B')"/>&nbsp;&nbsp;&nbsp;OUI<br/><br/>
				<input type="submit" class="btn btn-default" value="B" onclick="alert('Réponse Correct')"/>&nbsp;&nbsp;&nbsp;NON<br/>
			
		</div>
			</div>
		
			</section>
			<section class="jumbotron">
		<div class="row">
			<div class="col-md-6">
			<embed src="video2.mp4" height="336" width="420" />
			</div>
			<div class="col-md-6">
			<br/><br/><br/>
		<!--<p style="color: black; font-family: arial black ">Je peux dépasser le véhicule devant moi</p><br/>-->
				<p style="color: black; font-family: arial black">Je franchis le feu et je passe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-default" value="A" onclick="alert('La reponse etait B')"/></p><br/><br/>
				<p style="color: black; font-family: arial black">Je freine et je m'arrête avant le feu &nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-default" value="B" onclick="alert('Réponse correcte')"/></p><br/><br/>
			
		</div>
			</div>
		
			</section>
			
			<section class="jumbotron">
		<div class="row">
			<div class="col-md-6">
			<embed src="video3.mp4" height="336" width="420" />
			</div>
			<div class="col-md-6">
			<br/><br/><br/>
			<p style="color: black; font-family: arial black ">Je cède le passage à gauche</p><br/>
				<input type="submit" class="btn btn-default" value="A" onclick="alert('Réponse correcte')"/>&nbsp;&nbsp;&nbsp;OUI<br/><br/>
				<input type="submit" class="btn btn-default" value="B" onclick="alert('La réponse était A')"/>&nbsp;&nbsp;&nbsp;NON<br/>
			
		</div>
			</div>
		
			</section>
		
	</div>
	</body>
</html>
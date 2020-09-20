<?php
$heures   = 00;  // les heures < 24
$minutes  = 00;   // les minutes  < 60
$secondes = 17;  // les secondes  < 60

$annee = date("Y");  // par defaut cette année
$mois  = date("m");  // par defaut ce mois
$jour  = date("d");  // par defaut aujourd

$redirection = 'http://www.phpsources.org'; // quand le compteur arrive à 0
                                            
$secondes = mktime(date("H") + $heures,
                            date("i") + $minutes,
                            date("s") + $secondes,
                            $mois,
                            $jour,
                            $annee
                            ) - time();
?>

<html>
<head>
<title>Demo compte a rebour</title>
<script type="text/javascript">
var temps = <?php echo $secondes;?>;
var timer =setInterval('CompteaRebour()',1000);
function CompteaRebour(){

  temps-- ;
  j = parseInt(temps) ;
  h = parseInt(temps/3600) ;
  m = parseInt((temps%3600)/60) ;
  s = parseInt((temps%3600)%60) ;
  document.getElementById('minutes').innerHTML= (s<10 ? "0"+s : s) + ' s ';
if ((s == 0 && m ==0 && h ==0)) {
   clearInterval(timer);
   url = "<?php echo $redirection;?>"
   Redirection(url)
}
}
function Redirection(url) {
setTimeout("window.location=url", 500)
}
</script>
</head>

<body onload="timer">
<?php
// la condition est que le nombre de seconde soit etre superieur a 24 heures
if ($secondes <= 3600*24) {
?>
<div id="minutes" style="font-size: 36px;"></div></span>
<?php
 }
?>
<body>
<html>
<!DOCTYPE html>
<html lang="fr">
<head><title>test page for local time</title>
<!-- below 2 lines will enable you to use bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- below line for your own css file
<link rel="stylesheet" type="text/css" href="modelHTML5.css" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="test page for french characters">
<meta charset="utf8">
<style>
body {max-width:600px;margin:0 20px;padding:20px;}
.variablecolor {color: red;}
</style>
</head>
<body>
<h1>test for local time</h1>

<p>Hello there,
<br>I'm trying to incorporate the actual time in <a href=http://pgoh13.free.fr/mycourse2/lesson9.php> Lesson 9</a> but I'm not sure if the sentence below reflects local time (i.e. your time) or the time of my server in France. Wherever you are, your feedback on this will be highly appreciated.
<br>You can email me at the following address: <a href="mailto:p.goh@laposte.net">p.goh@laposte.net</a>
<br>Terima kasih! - pgoh (23/12/24)
</p>
<br>		
		<?php
		$texte1 = 'The time now is ' ;
		$texte2 = 'h' ;
$texte3 = '(Sekarang pukul ' ;
		$time1 = 'G';
		$date1 = date($time1) ;
		$time2 = 'i';
		$date2 = date($time2) ;
		echo "<p class='variablecolor'>".$texte1 .$date1 .$texte2 .$date2 . "<br>". $texte3 .$date1 .$texte2 .$date2 ;
echo ')'."</font>";
		?>

  
<br><br>

</body>
</html>
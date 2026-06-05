<!DOCTYPE html>
<html lang="fr">
<head><title>test page for french characters</title>
<!-- below 2 lines will enable you to use bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- below line for your own css file
<link rel="stylesheet" type="text/css" href="modelHTML5.css" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="test page for french characters">
<meta charset="utf8">



</head>
<body>
<h1>test local time</h1>

<?php
$format = 'd-m-y, g:i' ;
$date = date($format) ;
echo $date ;
?>
	
	<hr color=red>
		
		<?php
		$texte1 = 'The time now is ' ;
		$texte2 = 'h' ;
		$time1 = 'G';
		$date1 = date($time1) ;
		$time2 = 'i';
		$date2 = date($time2) ;
		echo  $texte1;
		echo $date1 ; echo $texte2; echo $date2 ;
		?>

  
<br><br>

</body>
</html>
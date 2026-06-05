<!DOCTYPE html>
<html lang="fr">
<head><title>Kelmarin/Semalam and Esok</title>
<link rel="stylesheet" type="text/css" href="modelHTML5.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="test page for french characters">
<meta charset="utf8">
</head>
<body>










<br><br>
<table style="table-layout: fixed;max-width:600px;padding:15px;"><tr>
<td style="padding:15px;" bgcolor=orange>
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Meaningful practice using Kelmarin and Esok
</font></font></font>

 <br> <br>
<em>Note: Find out from the locals if they use kelmarin or semalam for yesterday and use it accordingly.</em> 

<p>
<?

$today= strftime ("%A");
echo " Today is ".$today;
if ($today=="Sunday") $today="Ahad";
if ($today=="Monday") $today="Isnin";
if ($today=="Tuesday") $today="Selasa";
if ($today=="Wednesday") $today="Rabu";
if ($today=="Thursday") $today="Khamis";
if ($today=="Friday") $today="Jumaat";
if ($today=="Saturday") $today="Sabtu";
echo " = <font color=red>Hari ini hari</font> ".$today; 

?>
<br>
<?
$yesterday= strftime ("%A",time()-86400);
echo "Yesterday was ".$yesterday;
if ($yesterday=="Sunday") $yesterday="Ahad";
if ($yesterday=="Monday") $yesterday="Isnin";
if ($yesterday=="Tuesday") $yesterday="Selasa";
if ($yesterday=="Wednesday") $yesterday="Rabu";
if ($yesterday=="Thursday") $yesterday="Khamis";
if ($yesterday=="Friday") $yesterday="Jumaat";
if ($yesterday=="Saturday") $yesterday="Sabtu";
echo " = <font color=red>Kelmarin hari</font> ".$yesterday;
?>
<br>
<?
$tomorrow= strftime ("%A",time()+86400);
echo "Tomorrow will be ".$tomorrow;
if ($tomorrow=="Sunday") $tomorrow="Ahad";
if ($tomorrow=="Monday") $tomorrow="Isnin";
if ($tomorrow=="Tuesday") $tomorrow="Selasa";
if ($tomorrow=="Wednesday") $tomorrow="Rabu";
if ($tomorrow=="Thursday") $tomorrow="Khamis";
if ($tomorrow=="Friday") $tomorrow="Jumaat";
if ($tomorrow=="Saturday") $tomorrow="Sabtu";
echo " = <font color=red>Esok hari</font> ".$tomorrow;
?>
</p>



<hr color=red>
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Meaningful practice for telling the time</font></font></font>
	<br><br>	
		<?php
		$texte1 = 'Sekarang pukul ' ;
		$texte2 = 'h' ;
		$time1 = 'G';
		$date1 = date($time1) ;
		$time2 = 'i';
		$date2 = date($time2) ;
		echo  $texte1;
		echo $date1 ; echo $texte2; echo $date2 ;
		?>

  
</body>
</html>
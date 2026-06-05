<!DOCTYPE html>
<html lang="fr">
<head><title>Kelmarin/Semalam and Esok</title>
<link rel="stylesheet" type="text/css" href="modelHTML5.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="test page for french characters">
<meta charset="utf8">
</head>
<body>









<hr color=red>
<br><br>
<table style="table-layout: fixed;max-width:600px;padding:15px;"><tr>
<td style="padding:15px;" bgcolor=orange>
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Practices in using Kelmarin and Esok
</font></font></font>

 <br> <br>
<em>Note: Find out from the locals if they use kelmarin or semalam for yesterday and use it accordingly.</em> 

<p>
<?

$today= strftime ("%A");
echo " Today is ".$today;
if ($today=="Sunday") $today="hari Ahad";
if ($today=="Monday") $today="hari Isnin";
if ($today=="Tuesday") $today="hari Selasa";
if ($today=="Wednesday") $today="hari Rabu";
if ($today=="Thursday") $today="hari Khamis";
if ($today=="Friday") $today="hari Jumaat";
if ($today=="Saturday") $today="hari Sabtu";
echo " = Hari ini ".$today;
?>
<br>
<?
$yesterday= strftime ("%A",time()-86400);
echo "Yesterday was ".$yesterday;
if ($yesterday=="Sunday") $yesterday="hari Ahad";
if ($yesterday=="Monday") $yesterday="hari Isnin";
if ($yesterday=="Tuesday") $yesterday="hari Selasa";
if ($yesterday=="Wednesday") $yesterday="hari Rabu";
if ($yesterday=="Thursday") $yesterday="hari Khamis";
if ($yesterday=="Friday") $yesterday="hari Jumaat";
if ($yesterday=="Saturday") $yesterday="hari Sabtu";
echo " = Kelmarin ".$yesterday;
?>
<br>
<?
$tomorrow= strftime ("%A",time()+86400);
echo "Tomorrow will be ".$tomorrow;
if ($tomorrow=="Sunday") $tomorrow="hari Ahad";
if ($tomorrow=="Monday") $tomorrow="hari Isnin";
if ($tomorrow=="Tuesday") $tomorrow="hari Selasa";
if ($tomorrow=="Wednesday") $tomorrow="hari Rabu";
if ($tomorrow=="Thursday") $tomorrow="hari Khamis";
if ($tomorrow=="Friday") $tomorrow="hari Jumaat";
if ($tomorrow=="Saturday") $tomorrow="hari Sabtu";
echo " = Esok ".$tomorrow;
?>
</p>



<br><br>
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Practices in telling the time</font></font>
	<br>Pukul berapa sekarang?	
		<?php
		$texte1 = 'Sekarang pukul ' ;
		$texte2 = 'h' ;
		$time1 = 'h';
		$date1 = date($time1) ;
		$time2 = 'i';
		$date2 = date($time2) ;
		echo  $texte1;
		echo $date1 ; echo $texte2; echo $date2 ;
		?>




<?php                        
// Define the timezones and their offsets
// 'Zone Label' => Offset
$timezones = Array('GMT' => 0, 'US EST' => -5, 'US PST' => -8);

// Set up a form to change the timezone
// Automatically update the page on a timezone change
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
    <select name="tz" onChange="this.form.submit();">';

// Create a drop-down list of timezones
foreach($timezones as $zone => $offset)
{
    echo '<option value="'.$offset.'_'.$zone.'"';
    if($offset.'_'.$zone == $_POST['tz']){ echo ' selected'; }
    echo '>'.$zone.'</option>';
}
echo '</select>
</form>';

// Give a default zone of there is no zone given
if(!isset($_POST['tz']))
{
    $_POST['tz'] == '-5_US EST';
}

// Get the offset and timezone from the POST array
list($offset, $zone) = explode('_', $_POST['tz']);

// Display the current time
echo 'Pukul berapa? Pukul '.gmdate('h:i', time()+3600*($offset+date("I")));
echo '<br/>';
echo 'Pukul berapa? Pukul '.gmdate('h:i', time()+14400*($offset+date("I")));

?> 

<br><br>

French time for home page


  from https://phpcodeur.net/date-php/#affichage-dune-date-en-francais-avec-strftime
  <?php
setlocale(LC_TIME, 'fr_FR');
echo '<br/>';
echo 'Nous sommes le '.utf8_encode(strftime('%A %d %B %Y, %H:%M'));
?>
</body>
</html>
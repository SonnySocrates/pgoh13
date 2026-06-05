
<!DOCTYPE html>
<html lang="fr">
<head><title>Exercises in telling the time in Malay: Current time in New York, London, Paris, Kuala Lumpur, New Zealand, Hawaii</title>
<link rel="stylesheet" type="text/css" href="modelHTML5.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="test page for french characters">
<meta charset="utf8">
<style>
body {font-family:arial;padding-left:10px;}



.zui-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table-horizontal tbody td {
    border-left: none;
    border-right: none;
}
@media (max-width: 991px) {
    .zui-table-responsive, .zui-table-responsive thead, .zui-table-responsive thead tr, .zui-table-responsive thead th, .zui-table-responsive tbody, .zui-table-responsive tbody tr, .zui-table-responsive tbody td {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: block;
        width: 100%;
    }
    .zui-table-responsive {
        border-color: #BBDFDF;
    }
    .zui-table-responsive thead th {
        border-color: #BBDFDF;
        border-top: none;
        border-left: none;
        border-right: none;
    }
    .zui-table-responsive tbody tr {
        border-bottom: solid 1px #BBDFDF;
    }
    .zui-table-responsive tbody td {
        border-top: none;
        border-color: #EEF7F7;
    }
    .zui-table-responsive tbody tr:last-child, .zui-table-responsive tbody td:last-child {
        border-bottom: none;
    }
}



</style>
</head>
<body>

<a style="text-decoration:none;" href=http://pgoh13.free.fr/mycourse2/>Basic Malay language course of 64 lessons by pgoh13</a>
<br>
<a style="text-decoration:none;" href=http://pgoh13.free.fr/mycourse2/lesson9.php>Lesson 9: Telling the time in Malay</a>
<br>
<h1>Exercises in telling the time</h1>
	
<p style="max-width:400px;font-style:italic;font-weight:300;font-size:12px;">To avoid any possible misunderstanding in interpreting the time, the 24-hour time is shown here. But in spoken Malay you are expected to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night. And, by the way, this is not a running clock. You have to refresh the page to get the latest time!</p>
<br>
<table style="background-color:yellow;width:450px;"><tr><td><b>Telling the time for real (if online)<b><br></td></tr><tr>
<td>
<br>
<?
$today= strftime ("%H:%M",time()+25200);
$daytime= strftime ("%H:%M %A",time()+25200);
echo " <em>It is now ".$daytime." in Malaysia</em>";
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di Malaysia?</font>";
echo "<br>";
echo " <font color=red>Sekarang pukul ".$today." di Malaysia</font>";

echo "<br><br>";

$today= strftime ("%H:%M",time()+43200);
$daytime= strftime ("%H:%M %A",time()+43200);
echo " <em>It is now ".$daytime." in New Zealand</em>";
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di New Zealand?</font>";
echo "<br>";
echo " <font color=red>Sekarang pukul ".$today." di New Zealand</font>";
echo "<br><br>";

$today= strftime ("%H:%M");
$daytime= strftime ("%H:%M %A");
echo " <em>It is now ".$daytime." in France</em>";
echo "<br>";
echo " <font color=red>Sekarang pukul ".$today." di Perancis</font>";

echo "<br><br>";

$today= strftime ("%H:%M",time()-39600);
$daytime= strftime ("%H:%M %A",time()-39600);
echo " <em>It is now ".$daytime." in Hawaii</em>";
echo "<br>";
echo " <font color=red>Sekarang pukul ".$today." di Hawaii</font>";

echo "<br><br>";

$today= strftime ("%H:%M",time()-21600);
$daytime= strftime ("%H:%M %A",time()-21600);
echo " <em>It is now ".$daytime." in New York</em>";
echo "<br>";
echo " <font color=red>Sekarang pukul ".$today." di New York</font>";

echo "<br><br>";

$today= strftime ("%H:%M",time()-3600);
$daytime= strftime ("%H:%M %A",time()-3600);
echo " <em>It is now ".$daytime." in London</em>";
echo "<br>";
echo " <font color=red>Sekarang pukul ".$today." di London</font>";

echo "<br><br>";
?>
</td></tr></table>



















<h2>..... and the days of the week</h2>

<table class="zui-table zui-table-horizontal zui-table-responsive"><tr><td><span style="font-size:0.63em"><b>A quick revision:</b> hari Ahad (Sunday), Isnin (Monday), Selasa (Tuesday), Rabu (Wednesday), Khamis (Thursday), Jumaat (Friday), Sabtu (Saturday)</span><br></td></tr><tr>
<td>
<br>
<?
$day= strftime ("%A",time()-39600);
echo " <em>It is ".$day." in Hawaii</em>";
echo "<br>";
echo "<font color=red>Hari apa di Hawaii?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di Hawaii</font>";
echo "<br>";
echo " <em>Fill in the day of the week above with its Malay name.</em>";
echo "<br><br>";

$day= strftime ("%A",time()+43200);
echo "It is ".$day." in New Zealand";
echo "<br>";
echo "<font color=red>Hari apa di New Zealand?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di New Zealand</font>";
echo "<br><br>";

$day= strftime ("%A");
echo " <em>It is ".$day." in France</em>";
echo "<br>";
echo "<font color=red>Hari apa di Perancis?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di Perancis</font>";
echo "<br><br>";

$day= strftime ("%A",time()+25200);
echo "It is ".$day." in Malaysia";
echo "<br>";
echo "<font color=red>Hari apa di Malaysia?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di Malaysia</font>";
echo "<br><br>";


$day= strftime ("%A",time()-21600);
echo " <em>It is ".$day." in New York</em>";
echo "<br>";
echo "<font color=red>Hari apa di New York?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di New York</font>";
echo "<br><br>";

$day= strftime ("%A",time()-3600);
echo " <em>It is ".$day." in London</em>";
echo "<br>";
echo "<font color=red>Hari apa di London?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di London</font>";
echo "<br><br>";
?>
</td></tr></table>




















<table style="table-layout: fixed;max-width:450px;padding:5px;"><tr>
<td style="padding:5px;" bgcolor=green>
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Practices in using Kelmarin and Esok
</font></font></font>

 <br> <br>
<em>(If <font color=red>semalam</font> is used for "yesterday" in the State where you are, replace <font color=red>kelmarin</font> below with <font color=red>semalam</font>).</em> 

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
echo " = <font color=red>Hari ini ".$today." di Perancis</font>";
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
echo " = <font color=red>Kelmarin ".$yesterday ."</font>";
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
echo " = <font color=red>Esok ".$tomorrow ."</font>";
?>
</p>
</td></tr></table>





<br>
<a style="text-decoration:none;" href=http://pgoh13.free.fr/mycourse2/>Back to pgoh's 64 lessons Malay language course</a>
<br>


</body>
</html>
















<br>
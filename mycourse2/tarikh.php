

<html>
<head>
<title>Script that gives the current day and date
</title>
</head>
<body bgcolor=peachpuff>
<?/* The script below will give one line containing the day and the date
<SCRIPT LANGUAGE = "JavaScript">
<!--

// Array of day names
var dayNames = new Array("Sunday(Ahad)","Monday(Isnin)","Tuesday(Selasa)","Wednesday(Rabu)","Thursday(Khamis)","Friday(Jumaat)","Saturday(Sabtu)");

var monthNames = new Array("January","February","March","April","May","June","July",
                           "August","September","October","November","December");

var dt = new Date();
var y  = dt.getYear();

// Y2K compliant
if (y < 1000) y +=1900;

document.write(dayNames[dt.getDay()] + ", " + monthNames[dt.getMonth()] + " " + dt.getDate() + ", " + y);
// -->
</SCRIPT> */?>

<b><font color=darkblue>
<?
$today= strftime ("%A");
echo "<B>Today is ".$today.".";
echo "</font>";
if ($today=="Sunday") $today="hari Ahad";
if ($today=="Monday") $today="hari Isnin";
if ($today=="Tuesday") $today="hari Selasa";
if ($today=="Wednesday") $today="hari Rabu";
if ($today=="Thursday") $today="hari Khamis";
if ($today=="Friday") $today="hari Jumaat";
if ($today=="Saturday") $today="hari Sabtu";
echo "<br><font size=+2>  Hari ini ".$today;
?>
<br /><font size=3>Please note that the date is based on the "US/Central" timezone so it might not be correct (by a day) if you're in another country.<br />Anyway this is just an exercise on the order of the days of the week so that if today is Monday you will know that yesterday was Sunday, tomorrow will be Tuesday and the day after tomorrow will be Wednesday.  Thanks.  - Webmaster</font>
</body>
</html>
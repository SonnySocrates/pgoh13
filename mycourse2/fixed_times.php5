
<!DOCTYPE html>
<html lang="fr">
<head><title>Exercises in telling the time and day in Malay by pgoh13: Current time in New York, London, Paris, Kuala Lumpur, New Zealand, Hawaii, India, Sydney, Los Angeles, Nepal, Toronto</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="Exercises in telling the time and day in Malay by pgoh13: Current time in New York, London, Paris, Kuala Lumpur, New Zealand, Hawaii, India, Sydney, Los Angeles, Nepal, Toronto">
<meta charset="UTF-8">
<style>
body {font-family:arial;padding-left:10px;width:100%;max-width:800px;}
.imageflottante {float:left;padding-right:5px;}
table { font-size: 24px; }
a {text-decoration:none;}
</style>
</head>
<body>

<a style="text-decoration:none;" href="http://pgoh13.free.fr/mycourse2/table_contents.htm">Basic Malay language course of 64 lessons by pgoh13</a>
<br>(You should have studied Lessons 7 and 9 of the above course before coming here).

<br>
<h1 style="font-size:42px;">Exercises in telling the time and day in Malay</h1>
	
<p style="max-width:800px;font-style:normal;font-weight:300;font-size:18px;"><strong>Quick revision of the days of the week:</strong> Sunday (hari Ahad), Monday (hari Isnin), Tuesday (hari Selasa), Wednesday (hari Rabu), Thursday (hari Khamis), Friday (hari Jumaat) and Saturday (hari Sabtu)</p>

	
<p style="max-width:800px;font-style:italic;font-weight:300;font-size:18px;"><img src=clock_logo1.jpg class="imageflottante" />To avoid any possible misunderstanding in interpreting the time, the 24-hour time is shown here. But in spoken Malay you are expected to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night. (By the way, this is not a running clock, you have to refresh the page to get the latest time!)</p>
<br>
<table style="background-color:yellow;width:800px;padding-top:20px;padding-bottom:20px;"><tr><td><strong style="font-size:30px;padding-left:20px;">Telling the time and day in Malay for real (if online)</strong></td></tr>


<tr>
<td style="padding-left:20px;"><br>
<em style="color:green;">Add <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after saying the time. 
</em>
<br><br>
<?
$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
// Set the timezone
$timezone = new DateTimezone("Asia/Kolkata");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di India?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";
if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";
echo "<br>";
echo "Kelmarin hari apa di India?";
echo "<br>";
echo "Esok hari apa di India?";
echo "<br>";
echo "Betulkah?";
?>
<br><a href=https://time.is/IST>Check time in India</a>

<br><br>



<?
$date = new DateTime(null, new DateTimezone("Pacific/Auckland"));
// Set the timezone
$timezone = new DateTimezone("Pacific/Auckland");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di New Zealand?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";
echo "<br>";
echo "Kelmarin hari apa di New Zealand?";
echo "<br>";
echo "Esok hari apa di New Zealand?";
echo "<br>";
echo "Betulkah?";
?>
<br><a href=https://www.timeanddate.com/worldclock/new-zealand>Check time in New Zealand</a>

<br><br>











<?
$date = new DateTime(null, new DateTimezone("Pacific/Honolulu"));
// Set the timezone
$timezone = new DateTimezone("Pacific/Honolulu");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Hawaii?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";
echo "<br>";
echo "Kelmarin hari apa di Hawaii?";
echo "<br>";
echo "Esok hari apa di Hawaii?";
echo "<br>";
echo "Betulkah?";
?>
<br><a href=https://www.timeanddate.com/worldclock/usa/hawaii>Check time in Hawaii</a>


<br><br>


























<?
$date = new DateTime(null, new DateTimezone("Asia/Kathmandu"));
// Set the timezone
$timezone = new DateTimezone("Asia/Kathmandu");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Nepal?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";
echo "<br>";
echo "Kelmarin hari apa di Nepal?";
echo "<br>";
echo "Esok hari apa di Nepal?";
echo "<br>";
echo "Betulkah?";
?>
<br><a href=https://www.timeanddate.com/worldclock/nepal>Check time in Nepal</a>



<br><br>








<?
$date = new DateTime(null, new DateTimezone("Europe/Paris"));
// Set the timezone
$timezone = new DateTimezone("Europe/Paris");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Paris?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://www.timeanddate.com/worldclock/france/paris>Check time in Paris</a>

<br><br>





<?
$date = new DateTime(null, new DateTimezone("America/New_York"));
// Set the timezone
$timezone = new DateTimezone("America/New_York");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di New York?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://time.is/New_York>Check time in New York</a>


<br><br>





<?
$date = new DateTime(null, new DateTimezone("Europe/London"));
// Set the timezone
$timezone = new DateTimezone("Europe/London");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di London?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://time.is/London>Check time in London</a>


<br><br>






<?
$date = new DateTime(null, new DateTimezone("Asia/Kuala_Lumpur"));
// Set the timezone
$timezone = new DateTimezone("Asia/Kuala_Lumpur");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Malaysia?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://www.timeanddate.com/worldclock/malaysia>Check time in Malaysia</a>


<br><br>





<?
$date = new DateTime(null, new DateTimezone("America/Toronto"));
// Set the timezone
$timezone = new DateTimezone("America/Toronto");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Toronto?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://www.timeanddate.com/worldclock/canada/toronto>Check time in Toronto</a>


<br><br>






<?
$date = new DateTime(null, new DateTimezone("America/Los_Angeles"));
// Set the timezone
$timezone = new DateTimezone("America/Los_Angeles");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Los Angeles?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://www.timeanddate.com/worldclock/usa/los-angeles>Check time in Los Angeles</a>


<br><br>






<?
$date = new DateTime(null, new DateTimezone("Australia/Sydney"));
// Set the timezone
$timezone = new DateTimezone("Australia/Sydney");
// Get the current time in the specified timezone
$datetime = new DateTime('now', $timezone);
// Get the day of the week
$day_of_week = $datetime->format('l');

echo "Sekarang pukul berapa di Sydney?";
echo "<br>";
echo "Pukul " . $date->format('H:i');
echo "<br>";
echo "Hari apa?";
echo "<br>";

if ($day_of_week=="Sunday")
echo "Hari Ahad";
if ($day_of_week=="Monday")
echo "Hari Isnin";
if ($day_of_week=="Tuesday")
echo "Hari Selasa";
if ($day_of_week=="Wednesday")
echo "Hari Rabu";
if ($day_of_week=="Thursday")
echo "Hari Khamis";
if ($day_of_week=="Friday")
echo "Hari Jumaat";
if ($day_of_week=="Saturday")
echo "Hari Sabtu";

?>
<br><a href=https://www.timeanddate.com/worldclock/australia/sydney>Check time in Sydney</a>

</td></tr></table>


<p>NOTE: The times here will adjust themselves all year round, even when there are changes due to Daylight Saving Time.</p>


<?php
/* this inside php tags, not outside
echo "This time cannot be used as it's according to where the server is situated (on free.fr site it's time in Paris, on .eu site it's London time)<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "It is now " . date("H:i") . "<br>";
echo "Today is " . date("l");
*/
?>



</body>
</html>
















<br>
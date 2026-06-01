
<!DOCTYPE html>
<html lang="fr">
<head><title>Exercises in telling the time in Malay...for real!</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="Exercises in telling the time in Malay...for real!">
<meta charset="utf8">
<style>
body {font-family:arial;padding-left:10px;width:100%;max-width:450px;}
.imageflottante {float:left;padding-right:5px;}
</style>






  <!-- Javascript below for day and date and time is from Mistral.  -->

<script>
    function afficherDateHeure() {
        const maintenant = new Date();

        // Vérifier si c'est l'heure d'été en France (dernier dimanche de mars au dernier dimanche d'octobre)
        const annee = maintenant.getFullYear();
        const dernierDimancheMars = new Date(new Date(annee, 2, 31).setDate(31 - new Date(annee, 2, 31).getDay()));
        const dernierDimancheOctobre = new Date(new Date(annee, 9, 31).setDate(31 - new Date(annee, 9, 31).getDay()));
        const estHeureEteFrance = maintenant >= dernierDimancheMars && maintenant < dernierDimancheOctobre;
        const decalageFrance = estHeureEteFrance ? 2 : 1; // UTC+2 en été, UTC+1 en hiver

        // Noms des jours en malais et en anglais
        const joursMalais = ["Ahad", "Isnin", "Selasa", "Rabu", "Khamis", "Jumaat", "Sabtu"];
        const joursAnglais = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        // Heure en France (ajustée pour l'heure d'été/hiver)
        const heureFrance = new Date(maintenant.getTime() + (decalageFrance - 1) * 60 * 60000); // On ajuste par rapport à UTC+1
        const jourSemaineMalais = joursMalais[heureFrance.getDay()];
        const jourSemaineAnglais = joursAnglais[heureFrance.getDay()];
        const heuresFrance = heureFrance.getHours().toString().padStart(2, '0');
        const minutesFrance = heureFrance.getMinutes().toString().padStart(2, '0');

        // Calcul des heures pour les autres pays (basé sur l'heure française correcte)
        const nepalTime = new Date(heureFrance.getTime() + (4 * 60 + 45) * 60000);
        const malaysiaTime = new Date(heureFrance.getTime() + 7 * 60 * 60000);
        const londonTime = new Date(heureFrance.getTime() - 1 * 60 * 60000);
        const indiaTime = new Date(heureFrance.getTime() + (4 * 60 + 30) * 60000);

        // Récupération des jours et heures pour chaque pays
        const nepalDay = joursAnglais[nepalTime.getDay()];
        const nepalHeures = nepalTime.getHours().toString().padStart(2, '0');
        const nepalMinutes = nepalTime.getMinutes().toString().padStart(2, '0');

        const malaysiaDay = joursAnglais[malaysiaTime.getDay()];
        const malaysiaHeures = malaysiaTime.getHours().toString().padStart(2, '0');
        const malaysiaMinutes = malaysiaTime.getMinutes().toString().padStart(2, '0');

        const londonDay = joursAnglais[londonTime.getDay()];
        const londonHeures = londonTime.getHours().toString().padStart(2, '0');
        const londonMinutes = londonTime.getMinutes().toString().padStart(2, '0');

        const indiaDay = joursAnglais[indiaTime.getDay()];
        const indiaHeures = indiaTime.getHours().toString().padStart(2, '0');
        const indiaMinutes = indiaTime.getMinutes().toString().padStart(2, '0');

        // Affichage
        const dateHeure = `
        It is now ${heuresFrance}:${minutesFrance} (${jourSemaineAnglais}) in France.
        <br>Pukul berapa sekarang di Perancis?
        <br>Sekarang pukul ${heuresFrance}:${minutesFrance} di Perancis.
        <br><a href=https://www.timeanddate.com/worldclock/france>Check time in France</a>
        <br><br>

        It is now ${nepalHeures}:${nepalMinutes} (${nepalDay}) in Nepal (France +4 3/4 hours).
        <br>Pukul berapa sekarang di Nepal?
        <br>Sekarang pukul ${nepalHeures}:${nepalMinutes} di Nepal.
        <br><a href=https://www.timeanddate.com/worldclock/nepal>Check time in Nepal</a>
        <br><br>

        It is now ${malaysiaHeures}:${malaysiaMinutes} (${malaysiaDay}) in Malaysia (France +7 hours).
        <br>Pukul berapa sekarang di Malaysia?
        <br>Sekarang pukul ${malaysiaHeures}:${malaysiaMinutes} di Malaysia.
        <br><a href=https://www.timeanddate.com/worldclock/malaysia>Check time in Malaysia</a>
        <br><br>

        It is now ${londonHeures}:${londonMinutes} (${londonDay}) in London (France -1 hour).
        <br>Pukul berapa sekarang di London?
        <br>Sekarang pukul ${londonHeures}:${londonMinutes} di London.
        <br><a href=https://time.is/London>Check time in London</a>
        <br><br>

        It is now ${indiaHeures}:${indiaMinutes} (${indiaDay}) in India (France +4.5 hours).
        <br>Pukul berapa sekarang di India?
        <br>Sekarang pukul ${indiaHeures}:${indiaMinutes} di India.
        <br><a href=https://time.is/IST>Check time in India</a>
        <br><br>
        `;

        document.getElementById("date-heure").innerHTML = dateHeure;
    }

    // Mise à jour toutes les secondes
    setInterval(afficherDateHeure, 1000);

    // Appel initial
    afficherDateHeure();
</script>






</head>
<body onload="afficherDateHeure()">

<a style="text-decoration:none;" href=http://pgoh13.free.fr/>HOME PAGE</a>
<br>
<a style="text-decoration:none;" href=http://pgoh13.free.fr/mycourse2/>Basic Malay language course of 64 lessons by pgoh13</a>
<br>
<a style="text-decoration:none;" href=http://pgoh13.free.fr/mycourse2/lesson9.php>Lesson 9: Telling the time in Malay</a>
<br>
<h1 style="max-width:700px;">Exercises in telling the time in Malay.....for real!</h1>
	
<p style="max-width:700px;font-style:italic;font-weight:300;font-size:12px;"><img src=clock_logo1.jpg class="imageflottante" />Winter time in France starts on the last Sunday of October each year and lasts for 5 months (until the last Saturday of March) when it's changed to summer time (also called Daylight Saving Time).<br>To avoid any possible misunderstanding in interpreting the time, the 24-hour time is shown here. But in spoken Malay you are expected to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night.<span style="max-width:400px;font-style:italic;font-weight:300;font-size:12px;" id="server-time" style="font-size:16px;"></span> By the way the word <font color=red>sekarang</font> (meaning now) can also be put at the beginning or at the end of the question so <font color=red>Sekarang pukul berapa di London?</font> and <font color=red>Pukul berapa di London sekarang?</font> are equally correct.


<table style="background-color:#cccccc;max-width:700px;"><tr><td>
<p>This is a running clock. It will update the time every second. If you prefer a fixed clock (more practical for practice) go to the block in yellow below.</p>
<p id="date-heure" style="font-size:16px;"></p>
</td></tr></table>

<br>



<table style="background-color:yellow;max-width:700px;"><tr><td>
<tr>
<td style="padding-left:10px;">
<p>The times below will stay fixed. This is more practical for students because by the time you come up with the correct answer, the time might have changed!</p>
<br>
<?
$heure= strftime ("%H:%M",time());
$jour= strftime ("%A",time());
echo '<em>It is now ' . $heure . ' (' . $jour . ') in France</em>';
echo '<br>';
echo '<font color=red>Pukul berapa sekarang di Perancis?</font>';
echo '<br>';
echo '<font color=red>Sekarang pukul ' . $heure . ' di Perancis</font>';
?>


<br><br>   
<?
$heure= strftime ("%H:%M",time()+17100);
$jour= strftime ("%A",time()+17100);
echo '<em>It is now ' . $heure . ' (' . $jour . ') in Nepal (France +4 3/4 hours)</em>';
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di Nepal?</font>";
echo "<br>";
echo '<font color=red>Sekarang pukul ' . $heure . ' di Nepal</font>';
?>





<br><br>   
<?
$heure= strftime ("%H:%M",time()+25200);
$jour= strftime ("%A",time()+25200);
echo ' <em>It is now ' . $heure . ' (' . $jour . ') in Malaysia (France +7 hours)</em>';
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di Malaysia?</font>";
echo "<br>";
echo '<font color=red>Sekarang pukul ' . $heure . ' di Malaysia</font>';
?>


<br><br>   
<?
$heure= strftime ("%H:%M",time()-3600);
$jour= strftime ("%A",time()-3600);
echo ' <em>It is now ' . $heure . ' (' . $jour . ') in London (France -1 hour)</em>';
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di London?</font>";
echo "<br>";
echo '<font color=red>Sekarang pukul ' . $heure . ' di London</font>';
?>





<br><br>   
<?
$heure= strftime ("%H:%M",time()+16200);
$jour= strftime ("%A",time()+16200);
echo '<em>It is now ' . $heure . ' (' . $jour . ') in India (France +4.5 hours)</em>';
echo '<br>';
echo '<font color=red>Pukul berapa sekarang di India?</font>';
echo '<br>';
echo '<font color=red>Sekarang pukul ' . $heure . ' di India</font>';
?>
<br><br>    




</td></tr></table>




<p style="max-width:700px;">NOTE: <span style="font-size:smaller;font-style:italic;">By the way if my programme goes haywire and the time shown above is wrong not to worry. Take this opportunity to practise saying <font color=red>Tidak benar, jam itu tidak betul. Sebenarnya pukul _____  sekarang di ________!</font>
<br>I don't think I have mentioned it before. <font color=red>Sebenarnya...</font> means "Actually...".
</span></p>














<h2>..... and the days of the week</h2>

<table style="max-width:400px;background-color:white"><tr><td><span style="font-size:0.8em;"><b>A quick revision:</b> hari Ahad (Sunday), Isnin (Monday), Selasa (Tuesday), Rabu (Wednesday), Khamis (Thursday), Jumaat (Friday), Sabtu (Saturday)<br><br>
<b>Fill in the days of the week below with their Malay names:</b></span>
</td></tr><tr>
<td>
<br>
<?
$day= strftime ("%A",time()-43200);
echo " <em>It is ".$day." in Hawaii</em>";
echo "<br>";
echo "<font color=red>Hari apa di Hawaii?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di Hawaii</font>";
echo "<br><br>";


$day= strftime ("%A");
echo " <em>It is ".$day." in France</em>";
echo "<br>";
echo "<font color=red>Hari apa di Perancis?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di Perancis</font>";
echo "<br><br>";


$day= strftime ("%A",time()+25200);
echo " <em>It is ".$day." in Malaysia</em>";
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

$day= strftime ("%A",time()+16200);
echo " <em>It is ".$day." in India</em>";
echo "<br>";
echo "<font color=red>Hari apa di India?</font>";
echo "<br>";
echo " <font color=red>Hari _______ di India</font>";
echo "<br><br>";
?>
</td></tr></table>



















<br>
<table style="table-layout: fixed;max-width:700px;padding:5px;"><tr>
<td style="padding:10px; background-color:lime;">
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Practices in using <font color=red>Kelmarin</font> and <font color=red>Esok</font>
</font></font></font>

 <br> <br>
Note: <em>If <font color=red>semalam</font> is used for "yesterday" in the state where you are (some states in Malaysia use <font color=red>kelmarin</font> while others use <font color=red>semalam</font>), replace <font color=red>kelmarin</font> below with <font color=red>semalam</font>. Incidentally where <font color=red>semalam</font> is used for "yesterday", last night would be <font color=red>malam semalam</font>.</em> 
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



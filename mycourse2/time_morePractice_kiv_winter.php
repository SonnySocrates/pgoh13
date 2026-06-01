
<!DOCTYPE html>
<html lang="fr">
<head><title>More practice in telling the time in Malay</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="Exercises in telling the time in Malay...more practice">
<meta charset="utf8">
<style>
body {font-family:arial;padding:0 10px;width:100%;max-width:600px;}
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

        // Vérifier si c'est l'heure d'été à Auckland (dernier dimanche de septembre au premier dimanche d'avril)
        const dernierDimancheSeptembre = new Date(new Date(annee, 8, 30).setDate(30 - new Date(annee, 8, 30).getDay() + 7));
        const premierDimancheAvril = new Date(new Date(annee, 3, 1).setDate(1 + (7 - new Date(annee, 3, 1).getDay()) % 7 + 7));
        const estHeureEteAuckland = maintenant >= dernierDimancheSeptembre || maintenant < premierDimancheAvril;
        const decalageAuckland = estHeureEteAuckland ? 12 : 13; // UTC+12 en hiver, UTC+13 en été

        // Noms des jours et des mois en anglais
        const joursAnglais = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const moisAnglais = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];


          // no adjustment below for Heure en France (since server is in france)
const heureFrance = new Date(maintenant);
        const jourSemaineEn = joursAnglais[heureFrance.getDay()];
        const jourMois = heureFrance.getDate();
        const nomMoisEn = moisAnglais[heureFrance.getMonth()];
        const heuresFrance = heureFrance.getHours().toString().padStart(2, '0');
        const minutesFrance = heureFrance.getMinutes().toString().padStart(2, '0');

        // Affichage de la phrase en anglais dans la balise "server-time"
        document.getElementById("server-time").innerHTML =
            `The day, date and time of the various places given here are in relation to the time of my server in France which at the moment is ${heuresFrance}:${minutesFrance}, ${jourSemaineEn}, ${jourMois} ${nomMoisEn} ${annee}.`;

        // Calcul des heures pour les autres pays et affichage dans "date-heure"
        const nepalTime = new Date(heureFrance.getTime() + (4 * 60 + 45) * 60000);
        const malaysiaTime = new Date(heureFrance.getTime() + 7 * 60 * 60000);
        const londonTime = new Date(heureFrance.getTime() - 1 * 60 * 60000);
        const indiaTime = new Date(heureFrance.getTime() + (4 * 60 + 30) * 60000);
        const newYorkTime = new Date(heureFrance.getTime() - 6 * 60 * 60000);
        const hawaiiTime = new Date(heureFrance.getTime() - (10 + decalageFrance) * 60 * 60000);
        const jakartaTime = new Date(heureFrance.getTime() + 6 * 60 * 60000);
        const aucklandTime = new Date(heureFrance.getTime() + (decalageAuckland - decalageFrance + 1) * 60 * 60000);

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

        const newYorkDay = joursAnglais[newYorkTime.getDay()];
        const newYorkHeures = newYorkTime.getHours().toString().padStart(2, '0');
        const newYorkMinutes = newYorkTime.getMinutes().toString().padStart(2, '0');

        const hawaiiDay = joursAnglais[hawaiiTime.getDay()];
        const hawaiiHeures = hawaiiTime.getHours().toString().padStart(2, '0');
        const hawaiiMinutes = hawaiiTime.getMinutes().toString().padStart(2, '0');

        const jakartaDay = joursAnglais[jakartaTime.getDay()];
        const jakartaHeures = jakartaTime.getHours().toString().padStart(2, '0');
        const jakartaMinutes = jakartaTime.getMinutes().toString().padStart(2, '0');

        const aucklandDay = joursAnglais[aucklandTime.getDay()];
        const aucklandHeures = aucklandTime.getHours().toString().padStart(2, '0');
        const aucklandMinutes = aucklandTime.getMinutes().toString().padStart(2, '0');

        // Affichage des heures dans "date-heure"
        const dateHeure = `

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

        It is now ${newYorkHeures}:${newYorkMinutes} (${newYorkDay}) in New York (France -6 hours).
        <br>Pukul berapa sekarang di New York?
        <br>Sekarang pukul ${newYorkHeures}:${newYorkMinutes} di New York.
        <br><a href=https://www.timeanddate.com/worldclock/usa/new-york>Check time in New York</a>
<br><b>Note:</b> <em>New York's Daylight Saving Time started on 01/03/26 while France started 4 weeks later (on 29/03/26).  As the time here is based on that of France there will be 4 weeks (01/03/26 to 28/03/26) when the time for New York will not be correct. Time for you to practise saying <font color=red>Tidak benar, jam itu tidak betul. Sebenarnya pukul _____ sekarang di New York!</font></em>
        <br><br>


        It is now ${jakartaHeures}:${jakartaMinutes} (${jakartaDay}) in Jakarta (France +6 hours).
        <br>Pukul berapa sekarang di Jakarta?
        <br>Sekarang pukul ${jakartaHeures}:${jakartaMinutes} di Jakarta.
        <br><a href=https://www.timeanddate.com/worldclock/indonesia/jakarta>Check time in Jakarta</a>
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
<h1 style="max-width:600px;">More practice in telling the time.....</h1>
	
<p style="max-width:600px;font-style:italic;font-weight:300;font-size:12px;"><img src=clock_logo1.jpg class="imageflottante" />To avoid any possible misunderstanding in interpreting the time, the 24-hour time is shown here. But in spoken Malay you are expected to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night.<span style="max-width:400px;font-style:italic;font-weight:300;font-size:12px;" id="server-time" style="font-size:16px;"></span> By the way the word <font color=red>sekarang</font> (meaning now) can also be put at the beginning or at the end of the question so <font color=red>Sekarang pukul berapa di London?</font> and <font color=red>Pukul berapa di London sekarang?</font> are equally correct.


<table style="background-color:#cccccc;max-width:600px;"><tr><td>
<p>This is a running clock. It will update the time every second. If you prefer a fixed clock (more practical for students struggling to say the time in Malay) go to the block in yellow below.</p>
<p id="date-heure" style="font-size:16px;"></p>
</td></tr></table>

<br>



<table style="background-color:yellow;max-width:600px;"><tr><td>
<tr>
<td style="padding-left:10px;">
<p>The times below will stay fixed. This is more practical for students because by the time you come up with the correct answer, the time might have changed!  <br>In your answer remember to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night.</p>
<br>

<?php
$heure = strftime("%H:%M", time() + 17100);
$jour = strftime("%A", time() + 17100);
echo '<em>It is now ' . $heure . ' (' . $jour . ') in Nepal (France +4 3/4 hours)</em>';
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di Nepal?</font>";
echo "<br>";
echo '<font color=red>Sekarang pukul ' . $heure . ' di Nepal</font>';
?>

<br><br>
<?php
$heure = strftime("%H:%M", time() + 25200);
$jour = strftime("%A", time() + 25200);
echo ' <em>It is now ' . $heure . ' (' . $jour . ') in Malaysia (France +7 hours)</em>';
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di Malaysia?</font>";
echo "<br>";
echo '<font color=red>Sekarang pukul ' . $heure . ' di Malaysia</font>';
?>

<br><br>
<?php
$heure = strftime("%H:%M", time() - 3600);
$jour = strftime("%A", time() - 3600);
echo ' <em>It is now ' . $heure . ' (' . $jour . ') in London (France -1 hour)</em>';
echo "<br>";
echo " <font color=red>Pukul berapa sekarang di London?</font>";
echo "<br>";
echo '<font color=red>Sekarang pukul ' . $heure . ' di London</font>';
?>

<br><br>
<?php
$heure = strftime("%H:%M", time() + 16200);
$jour = strftime("%A", time() + 16200);
echo '<em>It is now ' . $heure . ' (' . $jour . ') in India (France +4.5 hours)</em>';
echo '<br>';
echo '<font color=red>Pukul berapa sekarang di India?</font>';
echo '<br>';
echo '<font color=red>Sekarang pukul ' . $heure . ' di India</font>';
?>


<br><br>    




</td></tr></table>




<p style="max-width:600px;font-size:16px">NOTE: <span style="font-size:smaller;font-style:italic;">By the way if the time shown above is incorrect, it can even be a good thing as you will be able to take the opportunity to practise saying <font color=red>Tidak benar, jam itu tidak betul. Sebenarnya pukul _____  sekarang di ________!</font>
<br>I don't think I have mentioned it before. <font color=red>Sebenarnya...</font> means "Actually...".
</span></p>














<h2>..... and the day of the week</h2>

<table style="max-width:600px;background-color:gray">
    <tr>
        <td>
            <span style="font-size:0.8em;">
                <b>A quick revision:</b> hari Ahad (Sunday), Isnin (Monday), Selasa (Tuesday), Rabu (Wednesday), Khamis (Thursday), Jumaat (Friday), Sabtu (Saturday)
                <br><br>
                <b>Fill in the day of the week below with its Malay equivalent:</b>
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <br>
            <?
            $day = strftime("%A", time() + 25200);
            echo " <em>It is " . $day . " in Malaysia</em>";
            echo "<br>";
            echo "<font color=red>Hari apa di Malaysia?</font>";
            echo "<br>";
            echo " <font color=red>Hari _______ di Malaysia</font>";
            echo "<br><br>";

            $day = strftime("%A", time() - 21600);
            echo " <em>It is " . $day . " in New York</em>";
            echo "<br>";
            echo "<font color=red>Hari apa di New York?</font>";
            echo "<br>";
            echo " <font color=red>Hari _______ di New York</font>";
            echo "<br><br>";

            $day = strftime("%A", time() - 3600);
            echo " <em>It is " . $day . " in London</em>";
            echo "<br>";
            echo "<font color=red>Hari apa di London?</font>";
            echo "<br>";
            echo " <font color=red>Hari _______ di London</font>";
            echo "<br><br>";

            $day = strftime("%A", time() + 16200);
            echo " <em>It is " . $day . " in India</em>";
            echo "<br>";
            echo "<font color=red>Hari apa di India?</font>";
            echo "<br>";
            echo " <font color=red>Hari _______ di India</font>";
            echo "<br><br>";
            ?>
        </td>
    </tr>
</table>



















<h2>..... and 'yesterday' and 'tomorrow'</h2>
<table style="table-layout: fixed;max-width:600px;padding:5px;"><tr>
<td style="padding:10px; background-color:lime;">
<span class="black">
<font color="darkblue"><font face="arial" size=3>
Practices in using <font color=red>Kelmarin</font> and <font color=red>Esok</font>
</font></font></font>

 <br> <br>
Note: <em>Some states in Malaysia use <font color=red>kelmarin</font> while others use <font color=red>semalam</font> for "yesterday". If <font color=red>semalam</font> is used in the state where you are, replace <font color=red>kelmarin</font> below with <font color=red>semalam</font>.
<br>Note that the verb "to be" (is, was, will be) is not needed in the Malay sentences below.

<!-- Incidentally where <font color=red>semalam</font> is used for "yesterday", last night would be <font color=red>malam semalam</font>. -->
</em> 
<p>

<?php
$todayFrance = strftime("%A");
echo "Today (is) " . $todayFrance . " in France";
if ($todayFrance == "Sunday") $todayFranceMalais = "hari Ahad";
if ($todayFrance == "Monday") $todayFranceMalais = "hari Isnin";
if ($todayFrance == "Tuesday") $todayFranceMalais = "hari Selasa";
if ($todayFrance == "Wednesday") $todayFranceMalais = "hari Rabu";
if ($todayFrance == "Thursday") $todayFranceMalais = "hari Khamis";
if ($todayFrance == "Friday") $todayFranceMalais = "hari Jumaat";
if ($todayFrance == "Saturday") $todayFranceMalais = "hari Sabtu";
echo " = <font color=red>Hari ini " . $todayFranceMalais . " di Perancis</font>";
?>
<br>

<?php
$yesterdayFrance = strftime("%A", time() - 86400);
echo "Yesterday (was) " . $yesterdayFrance . " in France";
if ($yesterdayFrance == "Sunday") $yesterdayFranceMalais = "hari Ahad";
if ($yesterdayFrance == "Monday") $yesterdayFranceMalais = "hari Isnin";
if ($yesterdayFrance == "Tuesday") $yesterdayFranceMalais = "hari Selasa";
if ($yesterdayFrance == "Wednesday") $yesterdayFranceMalais = "hari Rabu";
if ($yesterdayFrance == "Thursday") $yesterdayFranceMalais = "hari Khamis";
if ($yesterdayFrance == "Friday") $yesterdayFranceMalais = "hari Jumaat";
if ($yesterdayFrance == "Saturday") $yesterdayFranceMalais = "hari Sabtu";
echo " = <font color=red>Kelmarin " . $yesterdayFranceMalais . " di Perancis</font>";
?>
<br>

<?php
$tomorrowFrance = strftime("%A", time() + 86400);
echo "Tomorrow (will be) " . $tomorrowFrance . " in France";
if ($tomorrowFrance == "Sunday") $tomorrowFranceMalais = "hari Ahad";
if ($tomorrowFrance == "Monday") $tomorrowFranceMalais = "hari Isnin";
if ($tomorrowFrance == "Tuesday") $tomorrowFranceMalais = "hari Selasa";
if ($tomorrowFrance == "Wednesday") $tomorrowFranceMalais = "hari Rabu";
if ($tomorrowFrance == "Thursday") $tomorrowFranceMalais = "hari Khamis";
if ($tomorrowFrance == "Friday") $tomorrowFranceMalais = "hari Jumaat";
if ($tomorrowFrance == "Saturday") $tomorrowFranceMalais = "hari Sabtu";
echo " = <font color=red>Esok " . $tomorrowFranceMalais . " di Perancis</font>";
?>
<br><br>



<?php
$todayLondon = strftime("%A", time() - 3600); // Londres est en UTC+0 (ou UTC+1 en heure d'été)
echo "Today (is) " . $todayLondon . " in London";
if ($todayLondon == "Sunday") $todayLondonMalais = "hari Ahad";
if ($todayLondon == "Monday") $todayLondonMalais = "hari Isnin";
if ($todayLondon == "Tuesday") $todayLondonMalais = "hari Selasa";
if ($todayLondon == "Wednesday") $todayLondonMalais = "hari Rabu";
if ($todayLondon == "Thursday") $todayLondonMalais = "hari Khamis";
if ($todayLondon == "Friday") $todayLondonMalais = "hari Jumaat";
if ($todayLondon == "Saturday") $todayLondonMalais = "hari Sabtu";
echo " = <font color=red>Hari ini " . $todayLondonMalais . " di London</font>";
?>
<br>
From the above sentence make the following deductions:
<br><font color=red>Kelmarin hari __________</font>	
<br><font color=red>Esok hari __________</font>
<br><br>

<?php
$todayNewYork = strftime("%A", time() - 21600); // New York est en UTC-5 (ou UTC-4 en heure d'été)
echo "Today (is) " . $todayNewYork . " in New York";
if ($todayNewYork == "Sunday") $todayNewYorkMalais = "hari Ahad";
if ($todayNewYork == "Monday") $todayNewYorkMalais = "hari Isnin";
if ($todayNewYork == "Tuesday") $todayNewYorkMalais = "hari Selasa";
if ($todayNewYork == "Wednesday") $todayNewYorkMalais = "hari Rabu";
if ($todayNewYork == "Thursday") $todayNewYorkMalais = "hari Khamis";
if ($todayNewYork == "Friday") $todayNewYorkMalais = "hari Jumaat";
if ($todayNewYork == "Saturday") $todayNewYorkMalais = "hari Sabtu";
echo " = <font color=red>Hari ini " . $todayNewYorkMalais . " di New York</font>";
?>
<br><font color=red>Kelmarin hari __________</font>	
<br><font color=red>Esok hari __________</font>
<br><br>

<?php
$todayKualaLumpur = strftime("%A", time() + 28800); // Kuala Lumpur est en UTC+8
echo "Today (is) " . $todayKualaLumpur . " in Kuala Lumpur";
if ($todayKualaLumpur == "Sunday") $todayKualaLumpurMalais = "hari Ahad";
if ($todayKualaLumpur == "Monday") $todayKualaLumpurMalais = "hari Isnin";
if ($todayKualaLumpur == "Tuesday") $todayKualaLumpurMalais = "hari Selasa";
if ($todayKualaLumpur == "Wednesday") $todayKualaLumpurMalais = "hari Rabu";
if ($todayKualaLumpur == "Thursday") $todayKualaLumpurMalais = "hari Khamis";
if ($todayKualaLumpur == "Friday") $todayKualaLumpurMalais = "hari Jumaat";
if ($todayKualaLumpur == "Saturday") $todayKualaLumpurMalais = "hari Sabtu";
echo " = <font color=red>Hari ini " . $todayKualaLumpurMalais . " di Kuala Lumpur</font>";
?>
<br><font color=red>Kelmarin hari __________</font>	
<br><font color=red>Esok hari __________</font>
<br><br>

<?php
$todayNewDelhi = strftime("%A", time() + 19800); // New Delhi est en UTC+5:30
echo "Today (is) " . $todayNewDelhi . " in New Delhi";
if ($todayNewDelhi == "Sunday") $todayNewDelhiMalais = "hari Ahad";
if ($todayNewDelhi == "Monday") $todayNewDelhiMalais = "hari Isnin";
if ($todayNewDelhi == "Tuesday") $todayNewDelhiMalais = "hari Selasa";
if ($todayNewDelhi == "Wednesday") $todayNewDelhiMalais = "hari Rabu";
if ($todayNewDelhi == "Thursday") $todayNewDelhiMalais = "hari Khamis";
if ($todayNewDelhi == "Friday") $todayNewDelhiMalais = "hari Jumaat";
if ($todayNewDelhi == "Saturday") $todayNewDelhiMalais = "hari Sabtu";
echo " = <font color=red>Hari ini " . $todayNewDelhiMalais . " di New Delhi</font>";
?>
<br><font color=red>Kelmarin hari __________</font>	
<br><font color=red>Esok hari __________</font>
</td></tr></table>





<br>
<a style="text-decoration:none;" href=http://pgoh13.free.fr/mycourse2/>Back to pgoh's 64 lessons Malay language course</a>
<br>


</body>
</html>




<!DOCTYPE html>
<html lang="fr">
<head><title>Exercises in telling the time in Malay...for real!</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0 />
<meta name=description content="Exercises in telling the time in Malay...for real!">
<meta charset="utf8">
<style>
body {font-family:arial;padding:0 10px;width:100%;max-width:600px;}
.imageflottante {float:left;padding-right:5px;}
</style>





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
        const hawaiiDay = joursAnglais[hawaiiTime.getDay()];
        const hawaiiHeures = hawaiiTime.getHours().toString().padStart(2, '0');
        const hawaiiMinutes = hawaiiTime.getMinutes().toString().padStart(2, '0');
        const aucklandDay = joursAnglais[aucklandTime.getDay()];
        const aucklandHeures = aucklandTime.getHours().toString().padStart(2, '0');
        const aucklandMinutes = aucklandTime.getMinutes().toString().padStart(2, '0');

        // Affichage des heures dans "date-heure"
        const dateHeure = `
        It is now ${heuresFrance}:${minutesFrance} (${jourSemaineEn}) in France.
        <br>Pukul berapa sekarang di Perancis?
        <br>Sekarang pukul ${heuresFrance}:${minutesFrance} di Perancis.
        <br><a href=https://www.timeanddate.com/worldclock/france>Check time in France</a>
        <br><br>

        It is now ${aucklandHeures}:${aucklandMinutes} (${aucklandDay}) in Auckland (France +11/+12 hours).
        <br>Pukul berapa sekarang di Auckland?
        <br>Sekarang pukul ${aucklandHeures}:${aucklandMinutes} di Auckland.
        <br><a href=https://www.timeanddate.com/worldclock/new-zealand/auckland>Check time in Auckland</a>
        <br><br>

        It is now ${hawaiiHeures}:${hawaiiMinutes} (${hawaiiDay}) in Honolulu (France -11/-12 hours).
        <br>Pukul berapa sekarang di Honolulu?
        <br>Sekarang pukul ${hawaiiHeures}:${hawaiiMinutes} di Honolulu.
        <br><a href=https://www.timeanddate.com/worldclock/usa/honolulu>Check time in Honolulu</a>
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


<table style="background-color:orange;max-width:600px;"><tr><td>
<tr>
<td style="padding-left:10px;">
<p>The times below will stay fixed. This is more practical for students because by the time you come up with the correct answer, the time might have changed!  <br>In your answer remember to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night.</p>
<br>
<?php
$heure = strftime("%H:%M", time());
$jour = strftime("%A", time());
echo '<em>It is now ' . $heure . ' (' . $jour . ') in France</em>';
echo '<br>';
echo '<font color=red>Pukul berapa sekarang di Perancis?</font>';
echo '<br>';
echo '<font color=red>Sekarang pukul ' . $heure . ' di Perancis</font>';
?>

<br><br>
<?php
$heure = strftime("%H:%M", time() + 43200); // Auckland est en UTC+12 (ou UTC+13 en heure d'été)
$jour = strftime("%A", time() + 43200);
echo '<em>It is now ' . $heure . ' (' . $jour . ') in Auckland (France +11/+12 hours)</em>';
echo '<br>';
echo '<font color=red>Pukul berapa sekarang di Auckland?</font>';
echo '<br>';
echo '<font color=red>Sekarang pukul ' . $heure . ' di Auckland</font>';
?>

<br><br>
<?php
$heure = strftime("%H:%M", time() - 39600); // Honolulu est en UTC-10, donc France -11 heures en hiver et France -12 heures en été
$jour = strftime("%A", time() - 39600);
echo '<em>It is now ' . $heure . ' (' . $jour . ') in Honolulu (France -11/-12 hours)</em>';
echo '<br>';
echo '<font color=red>Pukul berapa sekarang di Honolulu?</font>';
echo '<br>';
echo '<font color=red>Sekarang pukul ' . $heure . ' di Honolulu</font>';
?>

<br><br>    




</td></tr></table>

</body>
</html>



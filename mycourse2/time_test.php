
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

<p style="max-width:600px;font-style:italic;font-weight:300;font-size:12px;"><img src=clock_logo1.jpg class="imageflottante" />To avoid any possible misunderstanding in interpreting the time, the 24-hour time is shown here. But in spoken Malay you are expected to use the 12-hour time and say <font color=red>pagi, tengah hari, petang</font> or <font color=red>malam</font> after it depending on whether it is morning, afternoon, evening or night.<span style="max-width:400px;font-style:italic;font-weight:300;font-size:12px;" id="server-time" style="font-size:16px;"></span> By the way the word <font color=red>sekarang</font> (meaning now) can also be put at the beginning or at the end of the question so <font color=red>Sekarang pukul berapa di Perancis?</font> and <font color=red>Pukul berapa di Perancis sekarang?</font> are both equally correct.


<table style="background-color:lime;max-width:600px;"><tr><td>
<p>This is a running clock. It will update the time every second. If you prefer a fixed clock (more practical for students struggling to say the time in Malay) go to the block in orange below.</p>
<p id="date-heure" style="font-size:16px;"></p>
</td></tr></table>

<br>

</body>
</html>






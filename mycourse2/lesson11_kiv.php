<HTML><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="description"
 content="A basic course in Bahasa Malaysia (also known as Bahasa Melayu or the Malay language)">
   <meta name="keywords" 
content="bahasa, Malay language, Malaysian language, langue Malaisienne, bahasa Melayu, bahasa Malaysia, national language of Malaysia, lessons, course, tutorial"> 
<TITLE>A basic course in Bahasa Malaysia (also known as Bahasa Melayu or the Malay language) </TITLE>
<style>
.blue {color:blue}
.red {color:red}
.black {color:black}
.yellow {color:yellow}
.green {color:green}
.white {color:white}
</style>
<script type="text/javascript">
function mailto(domain,user) 
{ 
document.location.href = "mailto:" + user + "@" + domain;
}
</script>
</head>
<style type="text/css">
h1 {font-size:36pt;font-family:helvetica;color:darkblue}
h2 {font-size:30pt;font-family:helvetica;color:black}
h3 {font-size:24pt;font-family:helvetica;color:darkgreen}
</style>

<?php
include "leftmenu.inc";
?>

<?
include "copyright.inc" 
?>
<body bgcolor="#999999"><br><br>
<center><img src=l11greetings.gif width=400></center>
<center><img src=l11greetings2.gif width=400></center>
<H1>Lesson 11  - Greetings</H1></span> 
<?
/*
** Le jour de la semaine
*/
$english_Day = date("l");

/*
** Trouver la correspondance en malais
*/
if($english_Day == "Monday")
{
  $malay_Day = "hari Isnin";
}
elseif($english_Day == "Tuesday")
{
  $malay_Day = "hari Selasa";
}
elseif($english_Day == "Wednesday")
{
  $malay_Day = "hari Rabu";
}
elseif($english_Day == "Thursday")
{
  $malay_Day = "hari Khamis";
}
elseif($english_Day == "Friday")
{
  $malay_Day = "hari Jumaat";
}
elseif($english_Day == "Saturday")
{
  $malay_Day = "hari Sabtu";
}
else
{
  // On conclut que c'est dimanche (Sunday)
  $malay_Day = "hari Ahad";
}
/*
** Affiche les équivalents en anglais et en malais
*/
/*$english_Day=date("l",time()+6*3600)*/
echo "<B>Sekarang pukul ",date(" h:i a ",time()+6*3600)." di Malaysia";
print("<BR>");
echo "<B>= It's now ",date(" h:i a ",time()+6*3600)."(",date("l",time()+6*3600).") in Malaysia";
echo "<br>";
?>
<FONT FACE="arial"><FONT SIZE=+1><b>
<font color=darkgreen>
If you are in Malaysia at this moment I'll be wishing you:<br>
<?
$today= strftime ("%H:%M",time()+21600);
$sekarang= strftime ("%H:%M ",time()+21600);
$hour= strftime ("%H",time()+21600);
function pagi()
{
global $hour;
echo "<b>Selamat pagi (= Good morning) "."<br>";
}

function tengah()
{
global $hour;
echo "<b>Selamat tengah hari (= Good afternoon) "."<br>";
}

function petang1()
{
global $hour;
echo "<b>Selamat petang (= Good afternoon)"."<br>";
}

function petang2()
{
global $hour;
echo "<b>Selamat petang (= Good evening) "."<br>";
}

function malam()
{
global $hour;
echo "<b>Selamat malam (= Good night) "."<br>";
}

if($hour>=0 AND $hour<12) $salut="pagi";
elseif($hour>=12 AND $hour<14) $salut="tengah";
elseif($hour>=14 AND $hour<=17) $salut="petang1";
elseif($hour>=18 AND $hour<=20) $salut="petang2";
else  $salut="malam";
$salut();
?></font></font></font>
<FONT FACE="arial"><FONT SIZE=-1><b><p>
<b><u>Greetings according to the time of the day:</u></font><br>

<a href="l11greetings.wav"><b>Click to listen&nbsp;&nbsp;<img src="audio.gif"></a><br />
<span class="inmalay">Selamat pagi</span> (=Good morning)
<br><span class="inmalay">Selamat tengah hari</span> (=Good afternoon - from noon to 2p.m. or so)
<br><span class="inmalay">Selamat petang</span> (=Good afternoon/Good evening)
<br><span class="inmalay">Selamat malam</span> (=Good night)
<br><u>Other greetings:</u>
<br> <span class="inmalay">Selamat datang </span>(=Welcome)
<br><span class="inmalay">Apa khabar? </span>(=How are you?)
<br><span class="inmalay">Khabar baik, terima kasih.</span>(=I'm fine, thank you.)

<br> <span class="inmalay">Selamat tinggal </span>(=Goodbye).  The guest (<span class="inmalay">tetamu</span>) i.e. the one who is leaving will say this when taking leave of his host.  This of course has to take place at the host's house and not at a restaurant if the host is also leaving at the same time since <span class="inmalay">tinggal</span> here means to stay (back)!
<br> <span class="inmalay">Selamat jalan </span>(=Goodbye).  The host (<span class="inmalay">tuan rumah</span>) i.e. the one who  is remaining in the house will say this to his departing guest to wish him a safe journey back (though <span class="inmalay">jalan</span> means to walk).  
<br><span class="inmalay">Jumpa lagi. </span>  (Be seeing you).  The word <span class="inmalay">jumpa</span> alone means "to meet" as in this sentence:
<br><span class="inmalay">Saya akan jumpa dia esok. </span>(= I shall be meeting him/her tomorrow).
<p><font color="darkblue"><b><u>For those who want to know more:</u></b></font>
<br><em>Note:  The following rules are not at all rigid.  They are only meant to be used as a guide:</em>
<br>From sunrise (about 5 or 6 a.m.)  to 12 noon, you say <span class="inmalay"> Selamat pagi.</span>
<br>Between 12 noon and 2 p.m. or so, you say<span class="inmalay"> Selamat tengah hari.</span> 
<br>From 2 p.m. until sunset (about 8 or 9 p.m.) , you say <span class="inmalay"> Selamat petang. </span>
<br>From sunset   to midnight, you can say <span class="inmalay"> Selamat petang</span> or <span class="inmalay"> Selamat malam</span> (depending on whether you are arriving at an evening function or leaving).
<br>But after midnight and until sunrise you can either say (considering that it is already a.m.) <span class="inmalay">Selamat pagi</span> or, if you are taking leave of your colleagues after a night shift <span class="inmalay">Selamat malam</span>.
<br>A word that does not go by the clock hour is <span class="inmalay">siang hari </span>which means daytime i.e. when you don't need to turn on the lights.
<br>If all this sounds too complicating to you a passe-partout (or all-purpose) greeting which can be used at any time of the day is <span class="inmalay"> Apa khabar?</span>   It's equivalent to "How are you?" in English or "Qué tal?" in Spanish.  The standard answer is <em><span class="inmalay"> Khabar baik, terima kasih.</span></em> (=I'm fine, thank you.)
<br>Incidentally if someone says <span class="inmalay">Terima kasih</span> (=Thank you) to you the standard reply is <em><span class="inmalay">Sama-sama</span></em> (=You're welcome).  An Indonesian though would reply <em><span class="inmalay">Kembali</span></em> instead of <em><span class="inmalay">Sama-sama</span></em> but that's another story.
<br>Another useful expression to learn is <span class="inmalay">Maafkan saya</span> when you wish to apologise for something.  Instead of this you could also say <span class="inmalay">Minta maaf</span> or <span class="inmalay">Harap maaf</span> (= Excuse me).    The usual reply to this would be <em><span class="inmalay">Tak apa</span></em> (=It doesn't matter) or <em><span class="inmalay">Tak apalah</span></em> (see Lesson 20).  Note that the suffix <span class="inmalay">lah</span> is always added to soften the tone or to make something less formal.  (<i>"Yeslah it's true"</i> I can hear your Malaysian friends saying!)

<br>Note also that greetings in Malay are normally followed by the name of the person to whom we greet.  Thus if we are greeting Mr. Ahmad, we don't just say <span class="inmalay">Selamat pagi</span> but <span class="inmalay"> Selamat pagi, Encik Ahmad</span> or <span class="inmalay">Selamat pagi, Cik Ahmad.</span>.  Note that while in the written form "Cik" is equivalent to "Miss", in its spoken form "Encik" for Mr. is very often contracted to "Cik".
<br>If we are greeting someone whose name we do not know  (as when asking a stranger for information) we can use "encik" (mister) or "puan" (madam).  Thus:  <span class="inmalay">Selamat pagi, encik</span> or  <span class="inmalay">Selamat pagi, puan</span> (for a married or elderly woman).
<br>When addressing someone whom we know to be a teacher we can use <span class="inmalay">cikgu</span> eg.
<span class="inmalay"> Apa khabar, cikgu?</span>
<br>By the way the Malay word for "teacher" is <span class="inmalay">guru</span>.
<br>Example: <span class="inmalay">Dia guru anak saya.</span> (He/She is my son/daughter's teacher).
<br>When addressing a titled person we can just use his title without his name.  Thus <span class="inmalay"> Apa khabar, Datuk?</span> or <span class="inmalay"> Selamat pagi, Tan Sri.</span>  
<br>"Datuk" (sometimes spelt Dato or Dato'), which literally means grandfather, is  a title conferred to "prominent" Malaysians <i>(ah, I'm treading on dangerous ground here by using the word "prominent" since there have been cases of such titles being bought!)</i> by the King or Sultans  on their birthdays.  The wife of a "Datuk" should be addressed as "Datin" but if it is a woman who has the title of "Datuk" in her own right (which is quite rare) her husband is not affected by her title.
<br>Higher up on the title hierarchy is "Tan Sri" and even higher still is "Tun".   The wife of a "Tan Sri", by the way, should be addressed as "Puan Sri" and the wife of a "Tun"  as "Toh Puan".
<br>Incidentally "Tun" is limited to 60 living holders at the moment (at the initial stage it was limited to only 5).  If you like to  read more on this subject <a href="tun_title.php">click here</a>.
<br>When you know that besides the Yang di-Pertuan Agong (the King), each of the thirteen States also confers such titles every year you will not be surprised by their proliferation.
<br><a href="http://thestar.com.my/special/honours/" target=_blank>Go here (Honours List)</a> if you wish to have an idea of the awards of the past few years. 
<br><br><font color=darkblue>WISHING AND HOPING:</font>
<br><u>First Wishing:</u><br>
As you have seen above all wishes and greetings start with the word <span class="inmalay">Selamat</span> (followed by another word).
<br>Other examples are:
<br>Merry Christmas = <span class="inmalay">Selamat Hari Krismas</span>
<br>Wish You a Happy New Year = <span class="inmalay">Selamat Tahun Baru</span>
<br>Wish you success = <span class="inmalay">Selamat berjaya</span>
<br>Or if you prefer you can also say <span class="inmalay">Selamat maju jaya</span> (the word <span class="inmalay">maju</span> meaning "progress").
<br>There is also <span class="inmalay">Selamat sejahtera</span> (May peace be with you) and <span class="inmalay">Selamat Hari Jadi</span> (Happy Birthday)
<br>Incidentally if you want to put the above wishes in a full sentence you can by starting with <span class="inmalay">Saya mengucapkan...</span> meaning "I wish you (success, etc)"
<br>Thus the sentence "I wish you and your family a Happy New Year" would be translated in Malay as:<br><span class="inmalay">Saya mengucapkan Selamat Tahun Baru kepada anda dan keluarga anda.</span>


<br><br>
<u>Next Hoping:</u><br>
When you tell someone that you hope he will  get a job, for example, you start with <span class="inmalay">Semoga</span> (can be replaced by <span class="inmalay">Moga-moga</span> or <span class="inmalay">Mudah-mudahan</span>).  All three terms mean "It is hoped that..." or "I hope that..."
<br>Thus <span class="inmalay">Semoga anda <u>dapat</u> pekerjaan yang diminta itu</span> means "I hope you will <u>obtain</u> the job you applied for" and
<br><span class="inmalay">Mudah-mudahan saya <u>dapat</u> tolong anda</span> means "Hopefully I'll be <u>able to</u> help you".
<br>Note the two different meanings of the verb <span class="inmalay">dapat</span> in the above two sentences:
<br>1. meaning "to get" or "to obtain" eg.
<br><span class="inmalay">Dia <u>dapat</u> banyak hadiah untuk hari jadinya.</span> (= He <u>obtained</u> many gifts for his birthday).
<br>2. meaning "can" or "be able to" eg.
<br><span class="inmalay">Dia tidak <u>dapat</u> membuat kerja  itu.</span>  (= He is not <u>able to</u> do the job).
<br>
There is another way of saying the same thing (in fact this is closer to the English way) since the Malay verb for "to hope" is <span class="inmalay">berharap</span>.  So you can also say:
<br><span class="inmalay">Saya berharap anda akan dapat pekerjaan yang diminta itu</span> ("I hope you will obtain the job you applied for".)
<br>Other examples on how to use <span class="inmalay">Semoga</span>:
<br> I  hope that you will get well soon (or if you prefer "I wish you a speedy recovery")  =
<br><span class="inmalay">Semoga cepat sembuh</span> or simply <span class="inmalay">Harap cepat sembuh</span>
<br>I hope you will pass your exam = <span class="inmalay">Semoga lulus dalam peperiksaan anda</span>.
<br>I hope you will be happy in your new life = <span class="inmalay">Semoga anda berbahagia dalam kehidupan baru</span>.
<br>If you want to split hairs you can always say that <span class="inmalay">Semoga berjaya</span> means "I hope you will succeed" while <span class="inmalay">Selamat berjaya</span> means "I wish you success".  But to all intents and purposes it comes to the same thing so in  this particular case you might just as well use the first word that comes to your mind.
<br>In the case of wishing someone good health though you have to use <span class="inmalay">Semoga</span> or <span class="inmalay">Moga-moga</span> or <span class="inmalay">Mudah-mudahan</span> but not <span class="inmalay">Selamat</span>.
<br>Thus you would say <span class="inmalay">Semoga sihat selalu</span> meaning "I hope you will always be in good health".
<br>Want some more?  Well, <span class="inmalay">sihat walafiat</span> is of Arabic origin and means good health but is quite often used by the local Malays.  Thus if you have a Malay friend you could write:
<br><span class="inmalay">Semoga anda dan keluarga anda dalam keadaan sihat walafiat</span> (= May this find you and your family in a state of good health).
<br>And in case you are the religious type you might wish to say "I pray that.."  In Malay it is 
<span class="inmalay">Saya berdoa</span> or <span class="inmalay">Saya berdoa kepada Tuhan</span> (I pray to God).
<br>Example:
<br><span class="inmalay">Saya berdoa semoga ibu anda sembuh dengan cepat.</span>  (I pray that your mother will have a quick recovery)

<hr>

<a href=lesson10bulan.php><img src=back.gif></a> <a href=lesson12warna.php><img src=forward.gif></a> 

<hr><?
include "streaming.inc" 
?>

<!--  <embed src="l11greetings.wav" height=60 width=144 controller=true controls=console hidden=false  autostart=true loop=0>  -->

</body>
</HTML>

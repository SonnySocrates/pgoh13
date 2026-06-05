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
h2 {font-size:30pt;font-family:helvetica;color:darkgreen}
</style>
<body background="backblue.gif">
<!--  Dont change New York time as it changes at the same time as France.    -->

<?
include "copyright.inc"
?>
<H2>Lesson 9 (Telling the time)</H2></font> <H4><FONT COLOR=black>
<center><img src=l9jam.gif width=400 height=50></center>
<br>
<table bgcolor=black cellpadding=10 width="100%"><tr><td bgcolor=lightblue width=50%>
<font color=red size=-1><B>NOTE:<br><FONT COLOR=black>  Daylight Saving Time begins for New York  at 2 a.m. on the<u> first Sunday of April</u> every year and "falls back" to standard time at 2 a.m. on the last Sunday of October while in France Summer Time begins at the same time but one week earlier i.e. on the <u> last Sunday of March</u>, and ends the last Sunday of October as for New York.</font></font>
<p>
&nbsp; &nbsp;<a href=l9jam.wav><img src=audio.gif></a>
<br>&nbsp; &nbsp;<FONT COLOR=darkblue><b>Pukul berapa sekarang? (= What time is it now?)&nbsp; &nbsp;
<br>&nbsp; &nbsp;Pukul lima.  (= It's five o'clock.)&nbsp; &nbsp;
<br>&nbsp; &nbsp;Pukul lapan setengah.  (= Half-past eight)&nbsp; &nbsp;
<br>&nbsp; &nbsp;Pukul dua sembilan belas.  (= 2:19  Pronounced "two <br>&nbsp; &nbsp;nineteen" as in English)&nbsp; &nbsp;
<br>&nbsp; &nbsp;Pukul sepuluh empat puluh lima.  (= 10:45)&nbsp; &nbsp;
</td>
<td bgcolor=orange width=50%>
<span class="black">
<font color="darkblue"><font face="arial" size=2>
<b><u>Practising in real time (if online)</u><font color=red>

<br><b>Pukul berapa sekarang?</font><br>
<font color=black>=What time is it now?</font><br>
(Please read <font color=red>pagi</font> for "am" and <font color=red>petang</font> for "pm" in the Malay sentences.)
<br>
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

echo "<B><font color=red>Sekarang pukul ",date(" h:i a ",time()+7*3600)." di Malaysia";
print("</font><BR>");

echo "<B><font color=black>= It's now ",date(" h:i a ",time()+7*3600)."(",date("l",time()+7*3600).") in Malaysia";


echo "</font><br>";

print("<b><font color=red>Sekarang pukul ".date("g:i a"))." di Perancis";
print("</font><BR>");

print("<b><font color=black>= It's now ".date("g:i a")." (".date("l").")")." in France";
print("</font></b><BR>");


echo "<B><font color=red>Sekarang pukul ",date(" h:i a ",time()-6*3600)." di New York";
print("</font><BR>");

echo "<B><font color=black>= It's now ",date(" h:i a ",time()-6*3600)."(",date("l",time()-6*3600).") in New York";
print("</font><BR>");
?>
</td></tr></table>
<br>In the absence of a teacher, the table below will help you correct yourself if you should make a mistake:
<table bgcolor=white border=2  width="100%"><tr><td bgcolor=yellow>
<span class="blue">
<b>1 = satu <br>
<b>2 = dua<br>
<b>3 = tiga<br>
<b>4 = empat<br>
<b>5 = lima<br>
<b>6 = enam<br>
<b>7 = tujuh<br>
<b>8 = lapan<br>
<b>9 = sembilan<br>
<b>10 = sepuluh<br>
<b>11 = sebelas<br>
<b>12 = dua belas<br>
</b></span>
</td>
<td bgcolor=lightgreen>
<span class="blue">
<b>13 = tiga belas <br>
<b>14 = empat belas<br>
<b>15 = lima belas<br>
<b>16 = enam belas<br>
<b>17 = tujuh belas<br>
<b>18 = lapan belas<br>
<b>19 = sembilan belas<br>
<b>20 = dua puluh<br>
<b>21 = dua puluh satu<br>
<b>22 = dua puluh dua<br>
<b>23 = dua puluh tiga<br>
<b>24 = dua puluh empat<br>
 </b></span>
</td>
<td bgcolor=beige><span class="blue">
<b>25 = dua puluh lima<br>
<b>26 = dua puluh enam<br>
<b>27 = dua puluh tujuh<br>
<b>28 = dua puluh lapan<br>
<b>29 = dua puluh sembilan<br>
<b>30 = tiga puluh<br>
<b>31 =  tiga puluh satu<br>
<b>32 =  tiga puluh dua<br>
<b>33 =  tiga puluh tiga<br>
<b>34 =  tiga puluh empat<br>
<b>35 =  tiga puluh lima<br>
<b>36 =  tiga puluh enam<br> </b></td>
<td bgcolor=yellow><span class="blue">
<b>37 =  tiga puluh tujuh<br>
<b>38 = tiga puluh lapan<br>
<b> 39=   tiga puluh sembilan<br>
<b>40 = empat puluh<br>
<b>41 = empat puluh satu<br>
<b>42 = empat puluh dua<br>
<b>43 = empat puluh tiga<br>
<b>44 = empat puluh empat <br>
<b> 45= empat puluh lima<br>
<b>46 = empat puluh enam<br>
<b>47 = empat puluh tujuh<br>
<b>48 = empat puluh lapan<br>
</b></span></td>
<td bgcolor=lightgreen><span class="blue">
<b>49 =  empat puluh sembilan <br>
<b>50 = lima puluh<br>
<b>51 = lima puluh satu<br>
<b>52 =  lima puluh dua<br>
<b>53 =  lima puluh tiga<br>
<b>54 =  lima puluh empat<br>
<b>55 =  lima puluh lima<br>
<b>56 =  lima puluh enam<br>
<b>57 =  lima puluh tujuh<br>
<b> 58=  lima puluh lapan<br>
<b>59 = lima puluh sembilan
</b></span></td>
</tr></table>
</center>
When you want to tell the time in Malay you always start with the word <font color=red>pukul</font> (literally means to hit - think of hitting a gong to announce the time).  What follows is exactly like telling the time in English.   Thus "It is 9:25" (nine twenty-five) is translated as  <font color=red><b>Pukul 9 (sembilan) 25 (dua puluh lima).</b></font><br>If you like to do so you can add <font color=red>minit</font> for the minutes but this is not really necessary, eg.  <font color=red><b>Pukul sembilan dua puluh lima minit.</b></font>
<br>
<span class="blue"><b><u>For those who want to know more:</u></b></span>
<span class="black"><br>To tell someone the time start with <font color=red>Pukul</font> or <font color=red>Jam</font> followed by the actual time but if you are asking someone at what time he sleeps, for example, you have to precede it  with the preposition <font color=red>pada</font> (= at).  Eg. <font color=red><b>Anda tidur <u>pada</u> pukul berapa?</font></b>    (more of this later).
<br><font color=red><b>Jam berapa?</b></font> is sometimes used instead of <font color=red><b>Pukul berapa? </b></font>
<br>2.15 is <font color=red>pukul dua suku</font> (suku means a quarter).  You can also say <font color=red>pukul dua lima belas (minit).</font>
<br>9.45 is <font color=red>pukul sembilan tiga suku </font>  (<font  color=red>tiga suku</font> means three quarters).  You can also say <font color=red>pukul sembilan empat puluh lima (minit).</font>
<hr>
<a href=l8nombor2.php><img src=back.gif></a> <a href=l10bulan.php><img src=forward.gif></a>

<hr><?
include "streaming.inc"
?>

<embed src="l9jam.wav" height=60 width=144 controller=true controls=console hidden=false  autostart=true loop=0>
</body>
</HTML>
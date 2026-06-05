<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width = 980" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="description"
 content="Lesson 7 of A basic course in Bahasa Malaysia (also known as Bahasa Melayu or the Malay language)">
   <meta name="keywords" 
content="bahasa, Malay language, Malaysian language, langue Malaisienne, bahasa Melayu, bahasa Malaysia, national language of Malaysia, lessons, course, tutorial"> 
<link rel="stylesheet" type="text/css" href="malay_footer.css" />
<TITLE>Lesson 7 of A basic course in Bahasa Malaysia (also known as Bahasa Melayu or the Malay language) </TITLE>
<style>
body:after {font-style:italic;border:0;content:"This course is copyrighted and is not to be reproduced under any circumstances.";}
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

<style type="text/css">
.typeface {font-family:Verdana;
font-size: 18px;}

table.answerbox {
	border-width: 1px;
	border-spacing: ;
	border-style: normal;
	border-color: red;
	border-collapse: collapse;
	background-color: red;
border-spacing:3;
margin: 2px;
}
table.answerbox td {
font-family:Verdana;
font-size: 1em;
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: beige;
	-moz-border-radius: ;
}

</style>

<style type="text/css">
h1 {font-size:36pt;font-family:helvetica;}
h2 {font-size:30pt;font-family:helvetica;color:darkgreen}
</style>

<?  include "indon_table.css";  ?>
</head>

<body bgcolor=#cccccc onload='setFocusToTextBox()'>
<center>

<table width="980"><tr>

<td width=820 valign=top>


<?
include "copyright.inc"
?>

<H1>Lesson 7 (Days of the Week)</H1>
<center><img src=l7hari.gif width=400 height=50></center>

<FONT face=tahoma color=black size=3>

<a href="l7hari.wav"> Click to listen&nbsp;&nbsp;<img src="audio.gif"></a><br />

<br /><a href="ismat_lesson7.wma"> A second reading</a> (by Michelle Nor Ismat, a native speaker)</a><br />

<br>
<table bgcolor=white style="border:1px solid black" width=800><tr><td bgcolor=yellow width=25% style="padding-left:15px">
<span class="blue"> Hari ini hari apa? <br>
 hari Ahad<br>
 hari Isnin<br>
 hari Selasa<br>
 hari Rabu<br>
 hari Khamis<br>
 hari Jumaat<br>
 hari Sabtu<br>
  </span>
</td><td bgcolor=lightgreen width=30% style="padding-left:15px;border-left:1px solid black">
<span class="black"> What day is it (today)? <br>  
  Sunday<br>
   Monday<br>
  Tuesday<br>
  Wednesday<br>
  Thursday<br>
  Friday<br>
  Saturday<br>
  </span>
</td>
<td bgcolor=beige width=40% style="padding-left:15px;border-left:1px solid black">
<span class="black">
 <u><font color=blue>Vocabulary</font></u><br>
  hari = day<br>
  hari ini = today<br>
  esok = tomorrow<br>
  kelmarin = yesterday<br>
  lusa =  the day after tomorrow<br>
  minggu = week<br>
  hari Minggu = Sunday<br>
  kerana = because<br>
  </td>
</tr></table>

<hr color=red>
<br><br>












<table><tr><td bgcolor=orange>
<span class="black">
<font color="darkblue"><font face="arial" size=3>

<u> Practising in real time (if online)</u></font>
<span class="black">
<font color="darkblue"><font face="arial" size=2>
 <br> <u>IF YOU ARE IN MALAYSIA:</u>  
<font color="black"><br>
<?
$today= strftime ("%A %H %M",time()+25200);
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
$yesterday= strftime ("%A",time()-61200);
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
$tomorrow= strftime ("%A",time()+111600);
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

<span class="black">
<font color="darkblue"><font face="arial" size=2>
 <br> <u>IF YOU ARE IN FRANCE:</u>  
<font color="black"><br>
<?
$today= strftime ("%A %H %M");
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
<br>
<span class="black">
<font color="darkblue"><font face="arial" size=2>
 <u>IF YOU ARE IN NEW YORK:</u>  
<font color="black"><br>
<? 
$today= strftime ("%A %H %M",time()-21600);
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

<?
$yesterday= strftime ("%A",time()-104400);
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
$tomorrow= strftime ("%A",time()+68400);
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
</td></tr></table>









<br>





<br>
<img src=forthose_knowmore.jpg>
<br><p style="max-width:800px;font-family:tahoma;font-size:16px;">
My wife always goes to market on Sundays.  = <span class=red>  Isteri saya selalu pergi ke pasar pada hari Ahad.</span> or <span class=red>  Isteri saya selalu ke pasar pada hari Ahad.</span>  
<br><u>    Note:  </u> When the preposition of direction (<span class=red>ke</span> = towards) is used  the verb "to go" (<span class=red>pergi</span>) can be omitted in Malay.
<br>  <span class=red>hari Ahad </span>   (Sunday) is also known as  <span class=red>hari Minggu</span>  .
<br> <span class=red>hari jadi </span>   = birthday.     (This is used more often than   <span class=red>hari lahir</span> which literally means "day of birth"  ).  To wish someone a happy birthday in Bahasa Malaysia you'd say <span class=red>Selamat hari jadi!</span>
<br> <span class=red>hari besar </span>   = festival day.     (It literally means "big day"  ).
<br> <span class=red>hari gaji </span>   = pay day     (<span class=red>gaji</span> by itself means "salary".  &nbsp;<span class=red>Bila hari gaji?</span> (When is pay day?) is a question often heard in offices.  Let's be frank, why is everyone there if not for this?  
<br> <span class=red>Hari Kebangsaan </span> = National Day.     It falls on 31st August and is also known as <span class=red>Hari Kemerdekaan </span> (Independence Day)  .
<br> The Malay term for public holiday is <span class=red>cuti am</span> or <span class=red>cuti umum</span>.  But if you hear <span class=red>hari cuti </span> or <span class=red>hari kelepasan </span> don't you worry.  They all mean the same thing. (The opposite of this, by the way, is <span class=red>hari kerja </span> i.e. a working day, <span class=red>kerja </span> meaning work).
<br>By the way you might also hear <span class=red>Dia cuti </span> meaning He/She is on leave (note that the verb is omitted here).  If you want to specify that he is not on holiday but on sick leave you would say <span class=red>Dia cuti sakit.</span>  The word <span class=red>sakit</span>, as you will see in Lesson 16, means "sick".
<br>Thus <span class=red>Dia tidak pergi ke pejabatnya hari ini kerana cuti sakit</span> means "He did not go to his office today because he is on sick leave."  
<br>"Annual leave" is <span class=red>cuti tahunan</span> (the word <span class=red>tahun</span> means "year").
<br>"School holidays" is <span class=red>cuti sekolah</span>.
<br>And lastly "to  take leave" is <span class=red>ambil cuti</span>.
<br>
<span class=red>Hari Natal </span> is the "pure" Malay word for Christmas Day though the "English" version <span class=red>Hari Krismas </span> seems to be more used.
<br> <span class=red>tiap-tiap hari </span>   =  every day
<br>Just as in English the word "daily" means the same thing as "every day", in Malay too you can also say  <span class=red>setiap hari </span>  instead of <span class=red>tiap-tiap hari.</span>
<br>Note that there are three syllables in the word <span class=red>Jumaat</span> (pronounced as joo-ma-art)
</p>












<p>Now let's see if you know what day it is today.
<br>Answer either "Ya, betul" or "Tidak, hari ini hari ....." to the question below:
<br>
<?php
$today=date("l");

if ($today=="Monday")
  echo "<font color=red>Hari ini hari Isnin. Betulkah?</font><br />";
 
if ($today=="Tuesday")
  echo "<font color=red>Hari ini hari Selasa. Betulkah?</font><br />";
 
if ($today=="Wednesday")
  echo "<font color=red>Hari ini hari Rabu. Betulkah?</font><br />";
 
if ($today=="Thursday")
  echo "<font color=red>Hari ini hari Khamis. Betulkah?</font><br />";
 
if ($today=="Friday")
  echo "<font color=red>Hari ini hari Jumaat. Betulkah?</font><br />";
  
if ($today=="Saturday")
  echo "<font color=red>Hari ini hari Sabtu. Betulkah?</font><br />";
 
if ($today=="Sunday")
  echo "<font color=red>Hari ini hari Ahad. Betulkah?</font><br />";

?>
(Sorry, I'm not there to see if you have replied correctly.)
<br>But you can check from the table above for the right answer.
</p>












<br>
<table class=answerbox cellspacing=2 cellpadding=10 align=center><tr><td style="padding-left:15px">
<p style="max-width:800px;font-family:tahoma;font-size:16px;">I am reproducing (with his permission) an email from Nuno, a Portuguese student of Bahasa Malaysia, whose questions could be asked by other learners as well, so I am putting my reply here for the benefit of all:
<br /><br /><i>Hi,
<br />1.  I was reading the Malay phrasebook from Lonely Planet and on page 190 they write:
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- yesterday: <font color=red>semalam</font> (in your Lesson 7 it is <font color=red>kelmarin</font>)
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- the day before yesterday: <font color=red>kelmarin</font>
<br />2.  What is most popular, <font color=red>bertutur bahasa Melayu</font> or <font color=red>cakap bahasa Melayu</font>?
<br />Regards,
<br />Nuno</i>
<br /><br />Thank you for your questions, Nuno.  Here are the answers:
<br />1.  Actually both <font color=red>semalam</font> and <font color=red>kelmarin</font> can be used for "yesterday".   However, as I am no expert, I will quote from the authoritative <em>Kamus Dewan</em> dictionary published by the Dewan Bahasa dan Pustaka, the authority on Bahasa Malaysia.  It gives 3 possible meanings for the word <font color=red>kelmarin</font>:
<i><br />(i) <font color=red>sehari sebelum hari ini, semalam</font>  As an example it gives the sentence: <font color=red>Hari ini hari Khamis, semalam hari Rabu</font> (Today is Thursday, yesterday was Wednesday.)
<br />(ii) <font color=red>dua hari sebelum hari ini, sehari sebelum semalam</font>  As an example it gives the sentence: <font color=red>Hari ini hari Khamis, jadi kelmarin hari Selasa</font> (Today is Thursday, so the day before yesterday was Tuesday.)
<br />(iii) <font color=red>beberapa hari (minggu) yang lepas</font>  As an example it gives the sentence: <font color=red>Dia sedang dirawat di rumah sakit kerana dilanggar kereta kelmarin</font> (He is being treated at the hospital because he was knocked down by a car a few days/weeks ago.)</i>
<br />The dictionary further adds that in Kedah and Penang, <font color=red>kelmarin dulu</font> means <font color=red>dua hari sebelum hari ini</font>.  So if you really need the Malay equivalent of "the day before yesterday" you can either say <font color=red>kelmarin dulu</font> or <font color=red>dulu semalam</font>.
<br />It is all very confusing, I know, more so for a learner and to avoid all ambiguity, I would suggest that you simply use the name of the day itself instead.  Thus if the day before yesterday was Monday you could just say <font color=red>hari Isnin yang lalu</font> (last Monday) and there would not be the slightest doubt or ambiguity about it!
<br />2. As to your second question you can say <font color=red>Saya boleh bertutur Bahasa Melayu</font> or <font color=red>Saya boleh bercakap Bahasa Melayu</font> for "I can speak the Malay language".  They both mean exactly the same thing though for a beginner it would be a bit presumptuous to use <font color=red>bertutur</font> instead of <font color=red>bercakap</font>.</p>
</td></tr></table>
<br>
<p>
<a href=lesson6berapa.php><img src=back.gif></a> <a href=lesson8nombor2.php><img src=forward.gif></a> 

<br><br>
<table class="indon_table">
  <tr>
    <th>ENGLISH</th>
    <th>INDONESIAN</th>
    <th>MALAY</th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>hari Senin</td>
    <td>hari Isnin</td>
  </tr>
  <tr class="alt">
    <td>Thursday</td>
    <td>hari Kamis</td>
    <td>hari Khamis</td>
  </tr>
  <tr>
    <td>Friday</td>
    <td>hari Jumat</td>
    <td>hari Jumaat</td>
  </tr>
  <tr class="alt">
    <td>My wife always goes to market on Sundays.</td>
    <td>Istri saya selalu pergi ke pasar pada hari Minggu.</td>
    <td>Isteri saya selalu pergi ke pasar pada hari Minggu.</td>
  </tr>
  <tr>
    <td>Happy birthday!</td>
    <td>Selamat ulang tahun!</td>
    <td>Selamat hari jadi!</td>
  </tr>
 <tr class="alt">
    <td>festival day</td>
    <td>hari libur</td>
    <td>hari besar</td>
  </tr>
  <tr>
    <td>He did not go to his office today because he is on sick leave.</td>
    <td>Dia tidak pergi ke kantornya hari ini karena cuti sakit.</td>
    <td>Dia tidak pergi ke pejabatnya hari ini kerana cuti sakit.</td>
  </tr>
 <tr class="alt">
    <td>school holidays</td>
    <td>liburan sekolah</td>
    <td>cuti sekolah</td>
  </tr>
  <tr>
    <td>I can speak Malay.</td>
    <td>Saya bisa berbicara Bahasa Melayu.</td>
    <td>Saya boleh bercakap Bahasa Melayu.</td>
  </tr>
</table>
<br><?
include "streaming.inc" 
?>

<!--  <embed src="l7hari.wav" height=60 width=144 controller=true controls=console hidden=false  autostart=true loop=0>  -->

</center>
</body>
</HTML>

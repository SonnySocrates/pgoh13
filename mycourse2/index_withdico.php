
<!-- should not have given 100% for lessons' table width  -->
<HTML><head><title>Basic Malay Language course comprising 64 lessons for those who want to study the Malaysian language on their own (Cours de malais)</title>

<META http-equiv=Content-Type content="text/html; charset=iso-8859-1" >
<META name="description" content="This free Malay language online course comprising 64 lessons is meant for those who want to study the Malaysian language on their own.  Although commonly called the Malay language, it is also popularly referred to as Bahasa Malaysia or Bahasa Melayu, its original name.  It is quite similar to the Indonesian language (Bahasa Indonesia).">
<meta name="keywords" content="malay online lessons, bahasa tutorial, learn malay, learn bahasa, malaysia language, kursus bahasa malaysia, free malay language course, free malay lessons, Malaysian language, Bahasa Malaysia,  language Malaysia, cours de malais,  Bahasa, Malay language, Bahasa Melayu, free malay course, free malay tutorial, tutorial on Malay, master Malay for free">
<meta name="google-site-verification" content="kG_PJVgqZWIIvKzJJx0VdwKePJyuqo4lePCaD63zKRQ" />
<style type="text/css">
p {font-family:'Lucida Console',Arial,Helvetica;font-size:12pt;}

div.newsdigest { 
  border:2px solid;
border-color:red;
  padding:10px;
  background: yellow;
  width:650px;
margin-left: 50px;
 font-family:'Lucida Console',Arial,Helvetica;font-size:12pt;color:darkblue;
}
</style>

<style type="text/css">
table.pleasenote3 td {text-align:left;
font: normal 8pt verdana, arial, sans-serif;
color:white; background-color:black} 
table.heading td {
font: bold 12pt verdana, arial, sans-serif;
color:red; background-color:yellow}
</style>

<SCRIPT LANGUAGE="JavaScript">

   if (top.frames.length > 1) {
        top.location="http://malay.pgoh13.com/";
}
// 
</SCRIPT>

<script type="text/javascript">
function mailto(domain,user)
{
document.location.href = "mailto:" + user + "@" + domain;
}
</script>
<script type="text/javascript">
  function setfocus()
  {
    document.forms[0].q.focus()
  }
  </script>
<script>
function getFocus()
{
 document.dico.query_malay.focus();
}
</script>
<style type="text/css">

<!--
body {background-color: #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px;font-weight:solid; color:black;}

body {border:0; margin:0; padding:0;}

#travelbar-container {background:yellow;color:midnightblue;font-weight:bold;font-size:10px;border:1px solid black;padding-left:5px;margin:5px;}

#travelbar {
margin-left:5px;
}

#travelbar {
height:34px;
line-height:16px;
}

#travelbar a:link {color:blue;}
#travelbar a:visited {color:blue;}
#travelbar a:hover{background:yellow;color:red;font-weight:bold;margin-right:10px;
text-decoration:none;
}

-->
</style><style type="text/css">
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
border:1px solid black;
}
table.answerbox th {
font-family:Arial;
font-size: 1em;
color:midnightblue;
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: yellow;
	-moz-border-radius: ;
border:1px solid black;
}
table.answerbox td {color:black;
font-family:Verdana;
font-size: 1em;
	border-width: 1px;
	padding: 5px;
	font-weight:normal;
	border-color: red;
	background-color: beige;
	-moz-border-radius: ;
border:1px solid black;
}
</style>

<style type="text/css">
table.singapore {border-collapse:collapse;width:"728px";}
table.singapore td, th
{
border:1px solid black;
width:33%;font-family:tahoma,verdana,arial;color:darkblue;}


div.cadre {color:darkblue;position:absolute;
  border:solid black 2px;
  }
</style> 
</head>

<body bgcolor="#cccccc" onload="getFocus()">

<?php
include "leftmenu_really_noads.inc";
?>

<center><h1><span style="background-color:midnightblue;">&nbsp;Basic Malay Language Course* &nbsp;</span></h1></center>

<?/* <table width=730px bgcolor=red span style="border:1px solid midnightblue;"><tr><td><font color=yellow>Message from the webmaster:<br />Hi, is there anyone among you who have studiously copied all the Malay words in this course?  If so can you kindly send me the list as I am trying to compile a Malay-English dictionary based on all the words here, including all verbs starting with me-, mem-, men-, meng- and meny-.  You can send the email to:
webmaster[at]pgoh13.com (just replace the [at] with the @ sign). Thank you.  - pgoh13 (Dec. 25, 2010)</font><br /></td></tr></table> */?>

<table><tr><td bgcolor=#cccccc><font face=Arial size=2>
<form name="dico" method="post">
<font color=midnightblue size=2><font color=midnightblue><b>Student's Malay-English dictionary.  Type Malay word:<br />(You can type verbs with the meN- prefix eg. <em>menutup</em>)</b></font> &nbsp;&nbsp;</font><input type="text" style=" margin:1px 0; border:1px solid; height:24px; padding:0px 3px; position:relative;"
 size="10" name="query_malay" value="">
&nbsp;&nbsp;<input type=submit value="Get English word">
</form>
<?
if ($query_malay){
  $fp = fopen('searchfrom_malay.xml','r');
  while(!feof($fp)){
    $bufferArray[] = fgets($fp,4096);
  }
  fclose($fp);
  $j = 0;
  for($i=0;$i<count($bufferArray);$i++){
    //let's strip the xml stuff and just have a data array
    if ($str = strstr($bufferArray[$i],'<english>')){
      $wordArray = explode('</english>',substr($str,9));
//if its </english> then change from 7 which is for </malay> to 9
//must also change in answer file
      $ancillary[$j]['english'] = $wordArray[0];
    }
    if ($str = strstr($bufferArray[$i],'<malay>')){
      $wordArray = explode('</malay>',substr($str,7));
//if its </malay> then change from 9 which is for </english> to 7
//must also change in answer file
      $ancillary[$j]['malay'] = $wordArray[0];
    }
    if (strstr($bufferArray[$i],"</word>")){
	  $j++;
    }
  }
  $i = 0;
  $found_english = '';
  while($i<count($ancillary) && $found_english == ''){
    if ($ancillary[$i]['malay'] == $query_malay){
	  $found_english = $ancillary[$i]['english'];
    }
    $i++;
  }
if ($found_english <> ''){
print ("<table class=answerbox cellspacing=2 cellpadding=10 align=center>\n");
print ("<tr align=center valign=top>\n");
print ("<th align=center valign=top>MALAY</th>\n");
print ("<th align=center valign=top>ENGLISH</th>\n");
print ("</tr>\n");
   print ("<tr align=center valign=top>\n");
print ("<td align=left valign=top>$query_malay</td>\n");
print ("<td align=left valign=top>$found_english</td>\n");	
print ("</table>\n");
  } else {
print ("\n<b><font color=darkblue>Sorry, this dictionary is far from complete.  I will be adding more words to it when I can.</font>\n");
  }
}
?>
</td></tr></table>

<table><tr><td><font size=2><a href=http://malay.pgoh13.com/malay_course.php class=blue>Introduction</a> | <a href=main.xml target=_blank class=blue>Basic Malay Word List</a> | <a href="http://pgoh13.com/dictionary.php" target=_blank class=blue>English-Malay dictionary</a> | <a href=http://malay.pgoh13.com/malay_sentences.php target=_blank class=blue>For advanced students</b></a> | <a href="javascript:mailto('pgoh13.com','webmaster')" class=blue>Contact/Feedback</a></td></tr></table>

<table span style="border:1px solid black;">
<tr><td bgcolor=beige width=40% span style="padding-left:10px;"><font face="arial" size="2">
<b><a href=http://malay.pgoh13.com/lesson1nama.php style="text-decoration:none" class="black">Lesson 1 - Nama/Ganti nama (Name/Pronouns)</a>
<br><a href=http://malay.pgoh13.com/lesson2bahasa.php style="text-decoration:none" class="black">Lesson 2 - Bahasa (Language)</a>
<br><a href=http://malay.pgoh13.com/lesson3ini.php style="text-decoration:none" class="black">Lesson 3 - Ini...(This is...)</a>
<br><a href=http://malay.pgoh13.com/lesson4orang.php style="text-decoration:none" class="black">Lesson 4 - Orang Inggeris (Englishman or woman)</a>
<br><a href=http://malay.pgoh13.com/lesson5nombor.php style="text-decoration:none" class="black">Lesson 5 - Numbers (1-9)</a>
<br><a href=http://malay.pgoh13.com/lesson6berapa.php style="text-decoration:none" class="black">Lesson 6 - Berapa? (How many?)</a>
<br><a href=http://malay.pgoh13.com/lesson7hari.php style="text-decoration:none" class="black">Lesson 7 - What day is it today?</a>
<br><a href=http://malay.pgoh13.com/lesson8nombor2.php style="text-decoration:none" class="black">Lesson 8 -  Numbers (10-99)</a>
<br><a href=http://malay.pgoh13.com/lesson9jam.php style="text-decoration:none" class="black">Lesson 9 -  Telling the time</a>
<br><a href=http://malay.pgoh13.com/lesson10bulan.php style="text-decoration:none" class="black">Lesson 10 - The 12 months</a>
<br><a href=http://malay.pgoh13.com/lesson11greetings.php style="text-decoration:none" class="black">Lesson 11 - Greetings</a>
<br><a href=http://malay.pgoh13.com/lesson12warna.php style="text-decoration:none" class="black">Lesson 12 - Warna (Colours)</a>
<br><a href=http://malay.pgoh13.com/vocabtest_first.php style="text-decoration:none" class="black">&nbsp;&nbsp;&nbsp;Vocabulary Test (Lessons 1-12)</a>
<br><a href=http://malay.pgoh13.com/lesson13belum.php style="text-decoration:none" class="black">Lesson 13 - Belum (Not yet)</a>
<br><a href=http://malay.pgoh13.com/lesson14hendak.php style="text-decoration:none" class="black">Lesson 14 - Hendak (Wish to)</a>
<br><a href=http://malay.pgoh13.com/lesson15akan.php style="text-decoration:none" class="black">Lesson 15 - Akan (Will)</a>
<br><a href=http://malay.pgoh13.com/lesson16kalau.php style="text-decoration:none" class="black">Lesson 16 - Kalau (If)</a>
<br><a href=http://malay.pgoh13.com/lesson17bila.php style="text-decoration:none" class="black">Lesson 17 - Questions with "Bila" (When)</a>
<br><a href=http://malay.pgoh13.com/lesson18jangan.php style="text-decoration:none" class="black">Lesson 18 - Jangan (Don't)</a>
<br><a href=http://malay.pgoh13.com/lesson19apa.php style="text-decoration:none" class="black">Lesson 19 - Questions with "Apa" (What?)</a>
<br><a href=http://malay.pgoh13.com/lesson20maafkan.php style="text-decoration:none" class="black">Lesson 20 - Maafkan saya (Excusing oneself)</a>
<br><a href=http://malay.pgoh13.com/lesson21mana.php style="text-decoration:none" class="black">Lesson 21 - Questions with "Di mana" (Where?)</a>
<br><a href=http://malay.pgoh13.com/lesson22nombor3.php style="text-decoration:none" class="black">Lesson 22 - Numbers (100 and above)</a>
<br><a href=http://malay.pgoh13.com/lesson23makan.php style="text-decoration:none" class="black">Lesson 23 - What do you like to eat?</a>
<br><a href=http://malay.pgoh13.com/lesson24minum.php style="text-decoration:none" class="black">Lesson 24 - What do you wish to drink?</a>
<br><a href=http://malay.pgoh13.com/revision_colors.php style="text-decoration:none" class="black">&nbsp;&nbsp;&nbsp;Revision Lesson - Colours and Days of the Week</a>
<br><a href=http://malay.pgoh13.com/lesson25mengapa.php style="text-decoration:none" class="black">Lesson 25 - Mengapa (Why)</a>
<br><a href=http://malay.pgoh13.com/lesson26boleh.php style="text-decoration:none" class="black">Lesson 26 - Questions beginning with "Boleh"</a>
<br><a href=http://malay.pgoh13.com/lesson27barangkali.php style="text-decoration:none" class="black">Lesson 27 - Barangkali (Perhaps)</a>
<br><a href=http://malay.pgoh13.com/lesson28selalu.php style="text-decoration:none" class="black">Lesson 28 - Selalu (Always)</a>
<br><a href=http://malay.pgoh13.com/lesson29siapa.php style="text-decoration:none" class="black">Lesson 29 - Questions with "Siapa" (Who?)</a>
<br><a href=http://malay.pgoh13.com/lesson30sejuk.php style="text-decoration:none" class="black">Lesson 30 - Sejuk (Cold)</a>
<br><a href=http://malay.pgoh13.com/lesson31sedang.php style="text-decoration:none" class="black">Lesson 31 - Sedang (The present continuous tense)</a>
<br><a href=http://malay.pgoh13.com/lesson32suka.php style="text-decoration:none" class="black">Lesson 32 - Suka (To like)</a>
</td>
<!--Begins another column-->
  <td bgcolor=beige width=40% span style="padding-left:10px;"><font face="arial" size="2"><b>
<a href=http://malay.pgoh13.com/lesson33sangat.php style="text-decoration:none" class="black">Lesson 33 - Sangat (Very)</a>
<br><a href=http://malay.pgoh13.com/lesson34sila.php style="text-decoration:none" class="black">Lesson 34 - Sila (Please - extending an invitation)</a>
<br><a href=http://malay.pgoh13.com/lesson35sudah.php style="text-decoration:none" class="black">Lesson 35 - Sudah (The past tense)</a>
<br><a href=http://malay.pgoh13.com/lesson36tadi.php style="text-decoration:none" class="black">Lesson 36 - Tadi (Just now)</a>
<br><a href=http://malay.pgoh13.com/lesson37tidak.php style="text-decoration:none" class="black">Lesson 37 - Tidak ("Not" - with adjectives or verbs)</a>
<br><a href=http://malay.pgoh13.com/lesson38tolong.php style="text-decoration:none" class="black">Lesson 38 - Tolong (Please - asking a service)</a>
<br><a href=http://malay.pgoh13.com/lesson39untuk.php style="text-decoration:none" class="black">Lesson 39 - Untuk (For)</a>
<br><a href=http://malay.pgoh13.com/lesson40yang.php style="text-decoration:none" class="black">Lesson 40 - Yang mana? (Which one?)</a>
<br><a href=http://malay.pgoh13.com/lesson41dengan.php style="text-decoration:none" class="black">Lesson 41 -  Dengan (With)</a>
<br><a href=http://malay.pgoh13.com/lesson42beli.php style="text-decoration:none" class="black">Lesson 42 - Saya hendak beli...(I wish to buy...)</a>
<br><a href=http://malay.pgoh13.com/lesson43harga.php style="text-decoration:none" class="black">Lesson 43 - Berapa harganya? (What's the price?)</a>
<br><a href=http://malay.pgoh13.com/lesson44shortforms.php style="text-decoration:none" class="black">Lesson 44 - Short forms (nak, tak, etc.)</a>
<br><a href=http://malay.pgoh13.com/lesson45prepo1.php style="text-decoration:none" class="black">Lesson 45 - Prepositions (to, from some place)</a>
<br><a href=http://malay.pgoh13.com/lesson46prepo2.php style="text-decoration:none" class="black">Lesson 46 - Prepositions (to, from, for someone)</a>
<br><a href=http://malay.pgoh13.com/lesson47opposites.php style="text-decoration:none" class="black">Lesson 47 - Adjectives and Synonyms</a>
<br><a href=http://malay.pgoh13.com/lesson48betulkah.php style="text-decoration:none" class="black">Lesson 48 - Betulkah? YA (Is that true? YES)</a>
<br><a href=http://malay.pgoh13.com/lesson49sebutan1.php style="text-decoration:none" class="black">Lesson 49 - Sebutan1 (Pronunciation1)</a>
<br><a href=http://malay.pgoh13.com/lesson50sebutan2.php style="text-decoration:none" class="black">Lesson 50 - Sebutan2 (Pronunciation2)</a>
<br><a href=http://malay.pgoh13.com/lesson51bukan.php style="text-decoration:none" class="black">Lesson 51 - Bukan ("Not" - with nouns or pronouns)</a>
<br><a href=http://malay.pgoh13.com/lesson52masih.php style="text-decoration:none" class="black">Lesson 52 - Masih (Still)</a>
<br><a href=http://malay.pgoh13.com/lesson53pernah.php style="text-decoration:none" class="black">Lesson 53 - Use of "pernah" (ever)</a>
<br><a href=http://malay.pgoh13.com/lesson54alamat.php style="text-decoration:none" class="black">Lesson 54 - Alamat (Address)</a>
<br><a href=http://malay.pgoh13.com/lesson55kata.php style="text-decoration:none" class="black">Lesson 55 - Dia kata...  (He said that...)</a>
<br><a href=http://malay.pgoh13.com/lesson56badan.php style="text-decoration:none" class="black">Lesson 56 - Badan (Parts of the body)</a>
<br><a href=http://malay.pgoh13.com/lesson57sakit.php style="text-decoration:none" class="black">Lesson 57 - Sakit (Sick)</a>
<br><a href=http://malay.pgoh13.com/lesson58compare.php style="text-decoration:none" class="black">Lesson 58 - Making Comparisons (lebih...daripada)</a>
<br><a href=http://malay.pgoh13.com/lesson59occupations.php style="text-decoration:none" class="black">Lesson 59 - Pekerjaan (Occupations)</a>
<br><a href=http://malay.pgoh13.com/lesson60penjodoh.php style="text-decoration:none" class="black">Lesson 60 - Penjodoh Bilangan (Numerical coefficients)</a>
<br><a href=http://malay.pgoh13.com/lesson61apa_ini.php style="text-decoration:none" class="black">Lesson 61 - Apa ini?  (What is this?)</a>
<br><a href=http://malay.pgoh13.com/lesson62_a.html style="text-decoration:none" class="black" target=_blank>Lesson 62 - Memperkenalkan diri (Presenting oneself)</a>
<br><a href=http://malay.pgoh13.com/lesson63compliments.php style="text-decoration:none" class="black">Lesson 63 - Pujian/kritikan (Compliments/criticisms)</a>
<br><a href=http://malay.pgoh13.com/lesson64signboards.php style="text-decoration:none" class="black">Lesson 64 - Bahasa papan tanda (Signboard language)</a>
<br><a href=http://malay.pgoh13.com/appendix.php style="text-decoration:none" class="black">APPENDIX - The pe(N), me(N) and ber- prefixes</a>
<br>
</td></tr>
<?/* <tr><td colspan="2">
<b>Blacklisted sites</b> (the sites below show links to my website but these links only lead to unrelated pages full of advertisements, some of which are pornographic in nature):
<br /> 1. http://videoterbaru.com/berita-terkini/pgoh13-free-fr.html (a complaint has been made)
<br /><em>*This course has been plagiarized by a number of unscrupulous websites and some of them have even converted all the lessons into .pdf format without my permission.  Please do not use any of them because the lessons are all hopelessly out-of-date as I have since redone all of them.  As a matter of fact all the lessons are only available here, for I do not have a mirror site (this course was formerly at pgoh13.free.fr which has since been closed.)</em>
</td></tr> */?>

<tr><td colspan="2">
<font color=midnightblue face="arial" size="2"><b>Once you have mastered this course the next step is to build up your Malay vocabulary day by day.  <a href=http://malay.pgoh13.com/malay_sentences.php style="text-decoration:none" class="black">Go here.</a></font></font></font>

</td></tr></table>
</body></html>
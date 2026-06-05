











































<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><TITLE>Malay to English Online Dictionary by pgoh13 (Kamus Melayu-Inggeris)</TITLE>

<meta name="description" content="This Malay-English dictionary by pgoh13 (Kamus Melayu-Inggeris) is to complement the highly-popular English to Malay Dictionary that has been available for free online since Year 2005.">
<meta name="keywords" content="Malay-English dictionary, Malay to English dictionary, kamus melayu-inggeris, Malay dictionary, dictionary bahasa malaysia, dictionary bahasa melayu, dictionary Malay language, basic dictionary malay, malay online dictionary, online malay dictionary, malay dictionary, dictionnaire malais">


<style type="text/css">
img
{  border-style: none;
}
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
        top.location="http://malay.pgoh13.com/malay_dico.php";
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

#travelbar-container {background:yellow;color:midnightblue;font-weight:bold;font-size:10px;border:0;padding-left:5px;margin:5px;}

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
</style>

<style type="text/css">
.typeface {font-family:Verdana;
font-size: 18px;}

table.answerbox {
	border-width: 1px;
	border-spacing: 1px;
	border-style: normal;
	border-color: red;
	border-collapse: collapse;width:728px;
	background-color: red;
border-spacing:3;
margin: 2px;
border:1px solid black;
}
table.answerbox th {
font-family:Verdana;
font-size: 1em;
color:midnightblue;
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: palegreen;
	-moz-border-radius: ;
border:1px solid black;
}
table.answerbox td {color:black;
font-family:Verdana;
font-size: 1em;
	border-width: 1px;
	padding: 5px;
	font-weight:bold;
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
<style type="text/css">
#whyclose2 {
	padding-left:5px;
	padding-right:5px;
	font-family: verdana;
	font-size: 18px;
	font-weight: bold;
	margin-left: 20px;
	margin-right: 0px;
	color: white;
	border-style:solid;
	border-width:2px;
	border-color:black;
	background-color: black;
	        }
</style>
</HEAD>

<Body onload="getFocus()">

<table width=990 span style="border:1px solid black;"><tr><td width=180 valign=top>
<? include "leftmenu_really_noads.inc"; ?>
</td>
<td width=810 valign=top>
<b>This Malay-English dictionary by pgoh13 (Kamus Melayu-Inggeris) is to complement the highly-popular English to Malay Dictionary that has been available for free online since Year 2005.</b>

<h1><span style="background-color:midnightblue;">&nbsp;Malay-English Dictionary by pgoh13&nbsp;</span></h1>



<div id="whyclose2"><b>The dictionary is expected to be completed by the end of the year.</b></div>
<br />




<?/* <br><span style="font-family:arial;font-size: 14px;color:yellow;background-color:red;">This dictionary is meant for personal use only.  Needless to say the compiler with his limited means does not make any claims that this is an authoritative piece of work so please do not quote from it or use it to settle any disputes!</span>
<br /> 
<b>You can access this dictionary from your smartphone at this address:  <font color=red>http://pgoh13.com/mobile.php</font></b>
<br />
*/?>

<table><tr><td bgcolor=#cccccc><font face=Arial size=2>
<form name="dico" method="post">
<font face=Arial color=midnightblue size=2><b>Type Malay word in full, that is with the prefix and suffix, if there are any eg. <em>berlanjutan, perlembagaan, memperbaharui</em></font>
</form>
<?
if ($query_malay){
  $fp = fopen('http://malay.pgoh13.com/searchfrom_malay.xml','r');
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
print ("\n<br /><b><font color=red>Sorry, the word is not in the database yet.  Kindly send it to me so I can include it in the next revision.  Thank you.</font></b>\n");
  }
}
?>
<br />
</td></tr></table>

<br />
<span style="font-family:arial;font-size: 18px;color:yellow;background-color:midnightblue;"><b>Please read this before using the Malay-English dictionary</b></span>
<br /><br />

<FONT face=tahoma color=black size=3><font color=red>How this dictionary is different from other dictionaries:</font>
<br />One innovative feature of this dictionary is that you can type a word with its prefix and suffix (eg. <em>mengenakan</em> or <em>menyertai</em>)  and still get its meaning and also be told from what word it comes from.  You will not be able to do this in a typical Malay dictionary, as such words would only appear under their root words (in this case <em>kena</em> or <em>serta</em>) and if you don't know what their root words are, there is just no way for you to look them up in a Malay dictionary.    While this might be obvious to many Malaysians, it is not the case for foreign students of Bahasa Malaysia.  Take the very common word <em>sedikit</em> (=a little), for example.  You will not find it in most dictionaries (not even in Dewan Bahasa dan Pustaka's "Kamus Dewan" Edisi Keempat).  Why?  Simply because you have to look it up under its root word, which is <em>dikit</em>.  Same for <em>pejabat</em> (=office).  You have to look for it under <em>jabat</em>.  How many students would be able to do this, I wonder.
<br />As a result of this arrangement, you will not find any of the derived words (with prefixes or suffixes) grouped together under the root word here as is done in most Malay dictionaries.  Each word that has a prefix or suffix will be treated here as an independent entry.  Thus if you happen to come across the word <em>perkelahian</em>, for example, in your reading, just type the whole word as you see it (with its prefix and suffix).  Don't try to look it up under its root word (which is <em>kelahi</em>).
<br />As almost every verb in Malay can be made passive by just putting the prefix di before it, I am afraid I have to leave all these verbs out.  Just be aware that if the verb "to beat" is pukul, then dipukul would simply mean "is beaten", "are beaten", "was beaten" etc.
<br /><font color=red>The hyphen in Malay words:</font>
<br />Please note that hyphenated words in Malay must always be typed with the hyphen if you expect to find them here (eg. undang-undang, NOT undangundang, mengapi-apikan, NOT mengapiapikan).  Unlike English hyphenated words (which often end up without the hyphen), the hyphen is indispensable in Bahasa Malaysia, so make sure you type it in.  I know it is just the opposite in my English-Malay section!
<br /><br />



</td></tr></table>
</body>
</html>
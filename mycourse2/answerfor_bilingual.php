











































<!DOCTYPE html>
<html>
<HEAD><TITLE>Answer page of Bilingual Malay-English and English-Malay Dictionary by pgoh13 (Kamus Dwibahasa Melayu-Inggeris dan Inggeris-Melayu oleh pgoh13)</TITLE>
<meta name="viewport" content="width = 980" />
<meta name="description" content="This is the answer page to the free online bilingual English-Malay and Malay-English dictionary (Kamus Inggeris-Bahasa Malaysia, Kamus Melayu-Inggeris, Kamus Dwibahasa) by pgoh13.  The English-Malay section has been here since Year 2005 while the Malay-English section was completed in December 2011."
<meta name="keywords" content="Kamus Dwibahasa, dwibahasa inggeris, bilingual Malaysian dictionary, malay bilingual dictionary, bilingual dictionary bahasa malaysia, bilingual dictionary melayu, bilingual Malay dictionary, bilingual dictionary malay, 2-way English Malay dictionary"">


<link rel="stylesheet" href="header.css" type="text/css" />

<!-- Below script is to receive adsense data in google analytics -->
<script type="text/javascript">
window.google_analytics_uacct = "UA-4651027-3";
</script>

<SCRIPT LANGUAGE="JavaScript">

   if (top.frames.length > 1) {
        top.location="http://pgoh13.com/dictionary_bilingual.php";
}
// 
</SCRIPT>

<script language="javascript">
<!--
function smallwindow()
{
  var dictURL = "/smallwindow_fordico.html";
  window.open(dictURL, "Instruction","width=640,height=505,location=no,menubar=no,resizable=yes,scrollbars=yes,toolbar=no");
  return;
}
//-->
</script>

<style type="text/css">
p {font-family:'Lucida Console',Arial,Helvetica;font-size:12pt;}

div.newsdigest { 
  border:2px solid;
border-color:red;
  padding:10px;
  background: yellow;
  width:600px;
margin-left: 50px;
 font-family:'Lucida Console',Arial,Helvetica;font-size:12pt;
}
</style>

<style type="text/css">

  	#menu {position:absolute;
	left:0px;
	top: 0px;
	width: 180px;
	background-color: #cccccc;
	     }
	#contenu{
	left:5px;
	right:5px;
	margin-left: 190px;
	margin-right: 20px;
	margin-top: 0px;
	background-color: #cccccc;
	        }
	#adsense{position:absolute;
	right:10px;
	top:150px;
	width: 160px;
	background-color: #cccccc;
	        }

	#missingwords{
	padding-left:5px;
	padding-right:5px;
	font-family: verdana;
	font-size: 24px;
	font-weight: bold;
	margin-left: 20px;
	margin-right: 20px;
	color: midnightblue;
	border-style:solid;
	border-width:3px;
	border-color:red;
	background-color: yellow;
	        }
</style>

<style type="text/css">
.typeface {font-family:arial,Verdana;
font-size: 18px;}

table.answerbox {
	border-width: 1px;
	border-spacing: ;
	border-style: solid;
	border-color: red;
	border-collapse: collapse;
	background-color: red;
border-spacing:3;
margin: 2px;
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
}
table.answerbox td {
font-family:Verdana;
font-size: 1em;
color:midnightblue;
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: beige;
	-moz-border-radius: ;
}

table.answerbox2 {
	border-width: 1px;
	border-spacing: ;
	border-style: solid;
	border-color: red;
	border-collapse: collapse;
	background-color: red;
border-spacing:3;
margin: 2px;
}

table.answerbox2 th {
font-family:Verdana;
font-size: 1em;
color:midnightblue;
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: #cccccc;
	-moz-border-radius: ;
}
table.answerbox2 td {
font-family:Verdana;
font-size: 1em;
color:midnightblue;
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: palegreen;
	-moz-border-radius: ;
}

</style>
<style type="text/css">

<!--
body {background-color: #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px;font-weight:solid; color:#555555;}

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
</style>

<script type="text/javascript">
  function setfocus()
  {
    document.forms[0].q.focus()
  }
  </script>
<script>
function getFocus()
{
 document.dico.query_english.focus();
}
</script>
<style type="text/css">
.right_ad {float:right;}
</style> 
</HEAD>

<body bgcolor=#cccccc onload='setFocusToTextBox()'>
<center>


<table bgcolor="beige" width=390 valign="top">
<tr><td span style="padding:5px;border:1px solid black;">

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
print ("<table class=answerbox2 cellspacing=2 cellpadding=10 align=center>\n");
print ("<tr align=center valign=top>\n");
print ("<th align=center valign=top>MALAY</th>\n");
print ("<th align=center valign=top>ENGLISH</th>\n");
print ("</tr>\n");
   print ("<tr align=center valign=top>\n");
print ("<td align=left valign=top>$query_malay</td>\n");
print ("<td align=left valign=top>$found_english</td>\n");	
print ("</table>\n");
  } else {
print ("\n<b><font color=darkblue>Sorry, the word is not in the dictionary's database.</font></b>\n");
  }
}
?>


</center>
</body>
</html>
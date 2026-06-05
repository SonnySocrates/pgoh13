<head>
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
</head>

<body onload="focusIt(document.forms.q)">

<!-- google_ad_section_start -->
<table><tr><td bgcolor="#CCFF99"><font face="Arial" size="2"><b>A basic course in Bahasa Malaysia (or Malaysian language - originally Malay language) &nbsp;<span style="font-size:smaller; color:black; font-weight:bolder; "><b> &copy;GPJ</b></span></b></td>
</tr><tr><td bgcolor=orange><font face=Arial size=2 color=white><b><a href="http://pgoh13.free.fr/amazon_malaylanguage.html" target="_blank">Books on Bahasa Malaysia.</a></td>
</tr><tr><td bgcolor=midnightblue><font face=Arial size=2 color=white><b>These lessons are copyrighted and their publication in any form is strictly prohibited.</td></tr>
<tr><td>This is an experiment.  Not all the words from the course are available yet.
<br /><table width=750>
<tr><td>
<form name="dico" method="post" target=_blank>
<font color=midnightblue><b>Type malay word:</b> &nbsp;&nbsp;</font><input type="text" name="query_malay" value="" class="typeface">
&nbsp;&nbsp;<input type=submit value="Get English meaning">
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
print ("<th align=center valign=top>Malay word</th>\n");
print ("<th align=center valign=top>English meaning</th>\n");
print ("</tr>\n");
   print ("<tr align=center valign=top>\n");
print ("<td align=left valign=top>$query_malay</td>\n");
print ("<td align=left valign=top>$found_english</td>\n");	
print ("</table>\n");
  } else {
print ("\n<b><font color=darkblue>Sorry, your word is not in the dictionary.</font>\n");
  }
}
?>
</td></tr></table>
</td></tr></table>



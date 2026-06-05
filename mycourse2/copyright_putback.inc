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



<table><tr><td bgcolor="#CCFF99"><font face="Arial" size="2"><b>A basic course in Bahasa Malaysia (or Malaysian language - originally Malay language) &nbsp;<span style="font-size:smaller; color:black; font-weight:bolder; "><b> &copy;PJG</b></span></td>
</tr><tr><td bgcolor=orange><font face=Arial size=2 color=white><b><a href="http://pgoh13.free.fr/amazon_malaylanguage.html" target="_blank">Books on Bahasa Malaysia.</a></td>
</tr><tr><td bgcolor=midnightblue><font face=Arial size=2 color=white><b>These lessons are copyrighted and their publication in any form is strictly prohibited.</td>


</tr><tr><td bgcolor=white><font face=Arial size=2>
<form name="dico" method="post">
<font color=midnightblue size=2><b>Student's Malay-English dictionary.  Type Malay word:</b> &nbsp;&nbsp;</font><input type="text" size="10" name="query_malay" value="" class="typeface">
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

<br /><center><script type="text/javascript"><!--
google_ad_client = "pub-3250339308164521";
google_alternate_ad_url = "http://pgoh13.free.fr/adsense_ifno_adverts.html";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_color_border = "cccccc";
google_color_bg = "cccccc";
google_color_link = "32527A";
google_color_url = "32527A";
google_color_text = "32527A";
google_ad_type = "text_image";
google_ad_channel ="";
google_page_url = document.location;
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>

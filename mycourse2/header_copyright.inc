<!-- google_ad_section_start -->
<table style="border:0;padding:0;margin:0;"><tr><td bgcolor="#CCFF99"><font face="Arial" size="2"><b>A basic course in Bahasa Malaysia (or Malaysian language - originally Malay language) &nbsp;<span style="font-size:smaller; color:black; font-weight:bolder; "><b> &copy;PJG</b></span></td>
</tr><tr><td bgcolor=orange><font face=Arial size=2 color=white><b><a href="http://pgoh13.com/amazon_malaylanguage.html" target="_blank"><font color=black>Books on Bahasa Malaysia.</font></a></td><!-- google_ad_section_end -->
</tr><tr><td bgcolor=midnightblue><font face=Arial size=2 color=white><b>These lessons are copyrighted and their publication in any form is strictly prohibited.</td>
</tr><tr><td><font face=Arial size=2>
<form name="dico" method="post">
<font color=midnightblue size=2><b><span style="background-color:yellow;">Student's Malay-English dictionary.  Type Malay word:</span><br />(You can type verbs with the meN- prefix eg. <em>menutup</em>)</b> &nbsp;&nbsp;</font><input type="text" style=" margin:1px 0; border:1px solid; height:24px; padding:0px 3px; position:relative;"
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
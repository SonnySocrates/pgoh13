











































<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><TITLE>Malay-English Online Dictionary (Kamus Melayu-Inggeris)</TITLE>


<link rel="stylesheet" href="header.css" type="text/css" />

<!-- Below script is to receive adsense data in google analytics -->
<script type="text/javascript">
window.google_analytics_uacct = "UA-4651027-3";
</script>

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
	border-width: 1px;
	padding: 5px;
	
	border-color: red;
	background-color: beige;
	-moz-border-radius: ;
}

</style>

</HEAD>

<Body>

<h1><span style="background-color:midnightblue;">&nbsp;malay to english Online Dictionary*&nbsp;</span></H1>

<table width=750>
<tr><td>
<form name="dico" method="post" action="http://pgoh13.com/basicsearch_answer.php">
<font color=midnightblue><b>Type malay word: &nbsp;&nbsp;</font></b><input type="text" name="query_malay" value="" class="typeface">
&nbsp;&nbsp;<input type=submit value="Search (or hit the Enter key)">
</form>
<?
if ($query_malay){
  //read the contents of the xml file into an array
  $fp = fopen('http://pgoh13.com/searchfrom_malay','r');
  while(!feof($fp)){
    $bufferArray[] = fgets($fp,4096);
  }
  fclose($fp);

  $j = 0;
  for($i=0;$i<count($bufferArray);$i++){
    //let's strip the xml stuff and just have a data array
    if ($str = strstr($bufferArray[$i],'<english>')){
      $wordArray = explode('</english>',substr($str,7));
      $ancillary[$j]['english'] = $wordArray[0];
    }
    if ($str = strstr($bufferArray[$i],'<malay>')){
      $wordArray = explode('</malay>',substr($str,9));
      $ancillary[$j]['malay'] = $wordArray[0];
    }
   
    if (strstr($bufferArray[$i],"</word>")){
	  $j++;
    }
  }

  //this will look for the word being searched
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
print ("<th align=center valign=top><b>Malay</th>\n");
print ("<th align=center valign=top><b>English</th>\n");
print ("</tr>\n");
   print ("<tr align=center valign=top>\n");
print ("<td align=left valign=top><b>$query_malay</td>\n");
print ("<td align=left valign=top><b>$found_english</td>\n");	
print ("</table>\n");
  } else {
print ("\n<b><font color=darkblue>Sorry, your word is not in the dictionary.</font>\n");
  }
}
?>
</td></tr></table>

</body>
</html>
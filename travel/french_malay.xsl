<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >

<xsl:template match="/">
<html><head><title>
French-Malay Word List</title></head><body bgcolor="beige">
<h4><font color="red"><u>Parent site:   <a href="http://pgoh13.com">The World At Your Fingertips</a></u></font></h4>
<h1>French-Malay Word List</h1>


<!-- Search Google -->
<center>
<form method="get" action="http://www.google.com/custom" name="forms" target="google_window">
<table bgcolor="#cccccc">
<tr><td nowrap="nowrap" valign="top" align="left" height="32">
<a href="http://www.google.com/">
<img src="http://www.google.com/logos/Logo_25gry.gif" border="0" alt="Google" align="middle"></img></a>
<input type="text" name="q" size="31" maxlength="255" value=""></input>
<input type="submit" name="sa" value="Search"></input>
<input type="hidden" name="client" value="pub-3250339308164521"></input>
<input type="hidden" name="forid" value="1"></input>
<input type="hidden" name="ie" value="ISO-8859-1"></input>
<input type="hidden" name="oe" value="ISO-8859-1"></input>
<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1;"></input>
<input type="hidden" name="hl" value="en"></input>
</td></tr></table>
</form>
</center>
<!-- Search Google -->

<center><script type="text/javascript"><!--
google_ad_client = "pub-3250339308164521";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_color_bg = "cccccc";
google_color_border = "cccccc";
google_color_link = "32527A";
google_color_url = "32527A";
google_color_text = "32527A";
google_ad_type = "text_image";
google_ad_channel ="";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>


<xsl:apply-templates />
</body></html>
</xsl:template>
<xsl:template match="dico">

<table width="60%"><tr bgcolor="beige"><td  bgcolor="silver" width="50%"><center><b>French</b></center></td>
<td  bgcolor="lightgreen"><center><b>Malay</b></center></td></tr>


<!-- above <td>s are for the headings.  those below are for the data  -->
<xsl:variable name="ancillary_french"
	select="document('ancillary_french.xml')" />
<xsl:for-each select="document('ancillary_french.xml')/dico/word">


<!--  remove this line if problem  -->
<xsl:sort select="french" data-type="text" />

<tr>
<td>

<xsl:value-of select="french"/>
</td>

<td>
<xsl:value-of select="malay"/>
</td>

</tr>
</xsl:for-each>
</table>
<!-- note that for_each above must come between tr and table  -->
</xsl:template>
</xsl:stylesheet>	





<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >

<xsl:template match="/">
<html><head><title>
Basic Malay Vocabulary</title></head><body bgcolor="beige">

<h1>
<![CDATA[      ]]>Basic Malay Word List</h1>

<h4>This list of the most commonly-used Malay words has been compiled in conjunction with my <a href="http://pgoh13.com/mycourse">"Basic course in Bahasa Malaysia"</a></h4>


<xsl:apply-templates />
</body></html>
</xsl:template>
<xsl:template match="dico">

<table width="100%"><tr bgcolor="white"><td  bgcolor="silver" width="25%"><font color="red"><center><b>Malay</b></center></font></td>
<td  bgcolor="silver" width="25%"><font color="darkblue"><center><b>English</b></center></font></td><td  bgcolor="silver" width="25%"><font color="darkgreen"><center><b>French</b></center></font></td><td bgcolor="silver" width="25%"><font color="darkpurple"><center><b>Spanish</b></center></font></td></tr>
<xsl:variable name="ancillary"
	select="document('ancillary.xml')" />
<xsl:for-each select="document('ancillary.xml')/dico/word">


<!--  remove this line if problem  -->
<xsl:sort select="malay" data-type="text" />

<tr>
<td><font color="red"><b>

<xsl:value-of select="malay"/></b>
</font>
</td>

<td><font color="darkblue"><b>
<xsl:value-of select="english"/></b></font>
</td>
<td><font color="darkgreen"><b>
<xsl:value-of select="french"/></b></font></td>
<td><font color="darkpurple"><b>
<xsl:value-of select="spanish"/></b></font></td>
</tr>
</xsl:for-each>
</table>
<!-- note that for_each above must come between tr and table  -->
</xsl:template>
</xsl:stylesheet>	





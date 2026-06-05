<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">






<html>


<head>
<style>
body {margin-left:20px;font-family:arial}
h1 {font-size:3.5vw;}
p {font-size:2vw;}
table, th, td {
  border: 1px solid black;
border-collapse: collapse;
padding: 10px;
font-size:2vw;
vertical-align: top;
}
th {
  background-color: #228B22;
  color: white;
font-size:2vw;
}

tbody tr:nth-child(even)
{
  background: yellow;
color:midnightblue;
}
a {text-decoration: none;}
</style>
</head>











  <body>
<p><a href="https://pgoh13.fr/">Home page</a></p>

  <h1>For advanced students of Malay</h1>
<p style="font-size:2vw;">These sentences are all taken from Malay newspapers such as Utusan Malaysia and Berita Harian and also online news services Malaysiakini and Bernama this year (2025). I have done something similar in 2011. <a href="http://pgoh13.free.fr/mycourse2/malay_sentences_archive1.php">(It's here)</a>. If you don't agree with my translation, it's ok. It is possible to translate the same text differently. I don't claim that my translation is the best.  - pgoh13 (19/02/2025)</p>
  <table>
    <tr bgcolor="#9acd32">
      <th>Malay sentences</th>
      <th>English translation</th>
    </tr>
    <xsl:for-each select="translation/sentence">
    <tr>
      <td><xsl:value-of select="malay"/></td>
      <td><xsl:value-of select="english"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
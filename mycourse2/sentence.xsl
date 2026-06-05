<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
     <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link rel="stylesheet" type="text/css" href="sentence.css"/>
        </head>   
     
 <body>
                <p><a href="https://pgoh13.fr/">Home page</a></p>
                <h1>For advanced students of Malay</h1>
 <p><xsl:value-of select="/translation/paragraph"/></p>

<table>
                    <tr bgcolor="#9acd32">
                        <th class="common-text">Malay sentences</th>
                        <th class="common-text">English translation</th>
                    </tr>
                    <xsl:for-each select="translation/sentence">
                        <tr>
                            <td class="common-text" style="vertical-align:top;"><xsl:value-of select="malay"/></td>
                            <td class="common-text"><xsl:value-of select="english"/></td>
                        </tr>
                    </xsl:for-each>
</table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
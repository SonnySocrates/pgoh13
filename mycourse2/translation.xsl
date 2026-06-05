<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
    <xsl:output method="xml" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" indent="yes" encoding="UTF-8"/>
    
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <link rel="stylesheet" type="text/css" href="translation.css"/>
            </head>
            <body>
                <p><a href="http://pgoh13.free.fr/" style="text-decoration: none;">Home page</a>
<br/><em>Modified on May 9, 2025</em>
</p>
                <h1>For advanced students of Malay</h1>
                
                <xsl:apply-templates select="/translation/paragraph"/>
                
                <table>
                    <tr>
                        <th class="common-text" style="background-color: #006400; color: white;">Malay sentences</th>
                        <th class="common-text" style="background-color: #006400; color: white;">English translation</th>
                    </tr>
                    <xsl:for-each select="translation/sentence">
                        <xsl:choose>
                            <xsl:when test="position() mod 2 = 1">
                                <tr>
                                    <td class="common-text" style="background-color: white; vertical-align:top;"><xsl:value-of select="malay"/></td>
                                    <td class="common-text" style="background-color: white;"><xsl:value-of select="english"/></td>
                                </tr>
                            </xsl:when>
                            <xsl:otherwise>
                                <tr>
                                    <td class="common-text" style="background-color: #FFFF00; vertical-align:top;"><xsl:value-of select="malay"/></td>
                                    <td class="common-text" style="background-color: #FFFF00;"><xsl:value-of select="english"/></td>
                                </tr>
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="hyperlink">
        <a href="{@href}" style="text-decoration: none;"><xsl:value-of select="@text"/></a>
    </xsl:template>

    <xsl:template match="paragraph">
        <p><xsl:apply-templates/></p>
    </xsl:template>
</xsl:stylesheet>
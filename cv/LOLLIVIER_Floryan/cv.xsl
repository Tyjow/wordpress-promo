<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output 
        method="html"
        encoding="UTF-8"
        doctype-public="-//W3C//DTD HTML 4.01//EN"
        doctype-system="CV.dtd"
        indent="yes" >
    </xsl:output>
    <xsl:template match="/">
        <html>
        <head>
		    <link type="text/css" rel="stylesheet" href="style3.css"/>   
            <title>CV Lollivier F.</title>
        </head>
        <body>
            <div class="cv">
                <div class="presentation">
                    <xsl:value-of select="cv/presentation"/>
                </div>
                <div class="titre">
                    <xsl:value-of select="cv/titre"/>
                </div>
                
                <div class="experience">
                    <xsl:for-each select="cv/experience/boucle">
                        <div class="annee">
                            <xsl:value-of select="annee"/>                        
                        </div>
                        
                        <div class="fonction">
                            <xsl:value-of select="fonction"/>                       
                        </div>
                        
                        <div class="lieu">
                            <xsl:value-of select="lieu"/>                        
                        </div>
                    </xsl:for-each>
                </div>
                
                <div class="formation">
                    <xsl:for-each select="cv/formation/boucle">
                        <div class="annee">
                            <xsl:value-of select="annee"/>
                        </div>
                        <div class="intitule">
                            <xsl:value-of select="intitule"/>
                        </div>
                        <div class="lieu">
                            <xsl:value-of select="lieu"/>
                        </div>
                    </xsl:for-each>
                </div>
                
                <div class="langages">
                    <xsl:value-of select="cv/langages"/>
                </div>
                <div class="competence">
                    <xsl:value-of select="cv/competence"/>
                </div>
                <div class="hobbies">
                    <xsl:value-of select="cv/hobbies"/>
                </div>
            </div>
        </body>
    </html> 
    </xsl:template>
</xsl:stylesheet>
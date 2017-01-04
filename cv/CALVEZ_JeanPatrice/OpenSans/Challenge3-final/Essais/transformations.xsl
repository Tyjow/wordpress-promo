<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output 
        method="html"
    	encoding="UTF-8"
    	doctype-public="-//W3C//DTD HTML 4.01//EN"
   	    doctype-system="langage.dtd"
    	indent="yes" >
    </xsl:output>
	
    <xsl:template match="/contenant/cv">
        <html>
	    <head>
            <link type="text/css" rel="stylesheet" href="cv1.css"/>
	        <title></title>   
	    </head>
	    <body>
            <h1><xsl:value-of select="gtitre"/></h1>
	    
            <xsl:for-each select="infoPerso/identite">
            <xsl:value-of select="nom"/>
            <xsl:value-of select="age"/>
            </xsl:for-each>   

            <div class="infoPerso">
                <xsl:value-of select="infoPerso/identite/nom"/>
                <xsl:value-of select="infoPerso/identite/age"/>
            </div>
  
            <h2></h2>
            <xsl:for-each select="infoPerso/contact">
            <xsl:value-of select="adresse"/>
            <xsl:value-of select="telp"/>
            <xsl:value-of select="mail"/>
            </xsl:for-each>


            <xsl:for-each select="infoPerso/complement">
            <xsl:value-of select="situation"/>
            <xsl:value-of select="permis"/>
            </xsl:for-each>

             <h2><xsl:value-of select="ptitre"/></h2>


            <xsl:for-each select="formation/intitule">
            <xsl:value-of select="annee"/>
            <xsl:value-of select="nomf"/>
            </xsl:for-each>

            <h2>expériences professionnelles </h2>



            <xsl:for-each select="exPro/experience">
                <xsl:value-of select="date"/>
                <xsl:value-of select="poste"/>
                <xsl:value-of select="entreprise"/>
                <xsl:value-of select="lieu"/>
                <xsl:value-of select="secteur"/>
                <xsl:for-each select="tache">
                    - <xsl:value-of select="."/>
                </xsl:for-each>
            </xsl:for-each>

            <h2>Langues étrangères et compétences informatiques</h2>


            <xsl:for-each select="competence">
            <xsl:value-of select="type"/>
            <xsl:value-of select="contenu"/>
            </xsl:for-each>


            <h2>Centres d'intérêt</h2>
            
            <xsl:value-of select="interet"/>


        </body>
	</html>			
    </xsl:template>
</xsl:stylesheet>
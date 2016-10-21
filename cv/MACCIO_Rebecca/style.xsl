<?xml version="1.0"?>
  <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
<html>

	<head>
    <title>CV Rebecca Maccio</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="utf-8" author="Rebecca"/>
	</head>

  <body class="fluid-container">
    <section class="col-md-4 colone1">
      	<div class="infoPerso">	
          <div id="photo">
            <xsl:value-of select="contenant/cv/infoPerso/photo"/>
          </div>      
            <p class="nom"><xsl:value-of select="contenant/cv/infoPerso/identite/nom"/></p>
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/identite/age"/></p>
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/contact/adresse"/></p>
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/contact/cp"/></p>
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/contact/telp"/></p>
            <p class="detailsInfoPerso mail"><xsl:value-of select="contenant/cv/infoPerso/contact/mail/a"/></p> 
          
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/complement/situation"/></p>
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/complement/nationalite"/></p>
            <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/complement/permis"/></p>
          </div>      	

      <div class="competence">
      	<h1><xsl:for-each select="contenant/cv">
          <xsl:value-of select="gtitre[1]"/>
      	   </xsl:for-each>
        </h1>
        <!--liste des competences-->
        <div><xsl:for-each select="contenant/cv/competence">
          <p class="gtitre"><xsl:value-of select="type"/></p>
          <xsl:for-each select="gtitre">

          <div class="alignerCompetence">
            <div class="racourcirTexte">
            <p class="listeCompetence">
            <xsl:value-of select="contenu"/></p>
          </div>
            <!--barre de progression-->
            <div class="reductionDiv">
              <xsl:variable name="pourcentage" select="niveau" />
            <div class="progress-bar barreprogression" role="progressbar" style="width:{$pourcentage}%">
            <xsl:value-of select="$pourcentage"/> % 
            </div> 
          </div>
            </div>  
          </xsl:for-each>
         </xsl:for-each>
        </div>
      </div>

      <!--liste des formations diplomes-->
      <div class="formation">
        <h1><xsl:for-each select="contenant/cv">
        <xsl:value-of select="gtitre[3]"/>
        </xsl:for-each>
        </h1>
        <div><xsl:for-each select="contenant/cv/formation">
        <p class="annee"><xsl:value-of select="annee"/></p>
        <p class="nomf"><xsl:value-of select="nomf"/></p>
        </xsl:for-each>
      </div>
      </div>

    
</section>

<section class="col-md-8 colone2">
 <!--liste des experiences professionnelles-->
 <h2>EXPERIENCES PROFESSIONNELLES</h2>
  	<div><xsl:for-each select="contenant/cv/exPro/experience">
  	 <div class="presentationPoste">
      <p class="poste"><xsl:value-of select="poste"/></p>
  	  <p class="date"><xsl:value-of select="date"/></p>
  	  <p class="lieu"><xsl:value-of select="lieu"/></p>
  	  <p class="entreprise"><xsl:value-of select="entreprise"/></p>
    </div>
      <xsl:for-each select="gtitre">
        <p class="col-md-12 tache"><xsl:value-of select="tache"/></p></xsl:for-each>    	  
  	      </xsl:for-each>  	
    </div>

  	<div><xsl:for-each select="contenant/cv/fomation">
  	  <p><xsl:value-of select="annee"/></p>
  	  <p><xsl:value-of select="nomf"/></p>
  	</xsl:for-each></div>



  <div>
    <xsl:for-each select="contenant/cv/footer">
    <p>
      <xsl:value-of select="social/link"/>
      <xsl:value-of select="social/icone"/>
    </p>
    <p><xsl:value-of select="social"/></p>
    <p><xsl:value-of select="contenant/cv/footer/social/icone"/></p>
    <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/contact/mail"/></p> 
  </xsl:for-each>
  <p class="detailsInfoPerso"><xsl:value-of select="contenant/cv/infoPerso/contact/telp"/></p>
</div>

</section>

    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
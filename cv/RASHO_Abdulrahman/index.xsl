<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
<head>
	<title>CV Abdul Rahman RASHO </title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	 	<link rel="stylesheet" type="text/css" href="style.css"/>
	 	<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.css"/>
</head>
	<body>
		<div class= "container-fluid">
	<!-- Etat civil -->
	<div class="row">	
		<div class="col-md-5 col-ms-12 col-xs-12">
			<div class="photo"></div><br></br>
				<h2>Abdul Rahman RASHO</h2><hr></hr>
				<div class="etat">
					<div class="nom"> 
						<xsl:value-of select="cv/systeme/etatcivil/adresse"/>
					</div>
					<div class="nom"> 
						<xsl:value-of select="cv/systeme/etatcivil/code_postal"/>
					</div>
					<div class="nom">
						<i class="fa fa-phone"></i> 
						<xsl:value-of select="cv/systeme/etatcivil/portable"/>
					</div>
					<div class="nom">
						<i class="fa fa-envelope-o"></i> 
						<xsl:value-of select="cv/systeme/etatcivil/mail"/>
					</div>
				</div><hr></hr>

	<!-- Phrase clé  -->

				<div class="phrasecle">
					<xsl:value-of select="cv/systeme/phrasecle"/>
				</div><hr></hr>
            
    <!--  langages techniques         -->
            <div class="langue">
                	<h3>langages techniques</h3>
			    <ul> 
          			<li> HTML5</li>
          			<li> CSS3 </li>
                    <li>XML</li>
          			<li>Javascript </li>
                    <li> framework: Jquery </li>
                    <li>PHP</li>
                    <li>Mysql</li>
                    <li>framework:Symfony2</li>
                 </ul>
        	</div>

	<!--Langue -->

			<div class="langue">
				<xsl:value-of select="cv/systeme/langue"/>
				<h3>Langues</h3>
			    <ul> 
          			<li> Kurde : maternelle </li>
          			<li> Arabe : courant </li>
          			<li> Anglais : bon niveau</li>
        		</ul>
        	</div>

     <!-- Centres d'intérêt  -->
     		<div class="loisirs"> 
        		<h3> Centres d'Intérêt</h3>
				<xsl:value-of select="cv/systeme/loisirs"/>
			</div>
		</div>

		<div class="col-md-7 col-ms-12 col-xs-12">

	<!--  Formations -->
		<div class="formations">
			<h1>DÉVELOPPEUR Web/Mobile</h1>
			<h3> Formations </h3>
			 <xsl:for-each select="cv/systeme/formations">
				<ul>
					<li>
						<xsl:value-of select="date"/>
						<xsl:value-of select="titre"/>
						<xsl:value-of select="lieu"/>
					</li>
				</ul>
			 </xsl:for-each>
		</div><hr></hr>

	<!--  Experiences -->
		<div class="xp">
			<h3> Experiences</h3>
			<xsl:for-each select="cv/systeme/xp">
				<ul>
					<li>
						<xsl:value-of select="date"/>
						<xsl:value-of select="titre"/>
						<xsl:value-of select="lieu"/>
					</li>
				</ul>
			</xsl:for-each>
		</div><hr></hr>

	<!--  Compétances -->
		<div class="competences">
			<h3> Compétences</h3>
			<xsl:for-each select="cv/systeme/competences">	
				<ul>
					<li><xsl:value-of select="definition"/></li>
				</ul>
		 </xsl:for-each>
		</div>
		
		</div>
	</div>
</div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

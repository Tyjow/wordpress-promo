<?xml version="1.0" encoding="UTF-8" ?>
<?xml-stylesheet href="style.css" type="text/css"?>

	<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    		<xsl:output 
			method="html"
			encoding="UTF-8"
			doctype-public="-//W3C//DTD HTML 4.01//EN"
			doctype-system="http://www.w3.org/TR/html4/strict.dtd"
			indent="yes" >
		</xsl:output>
			
		<xsl:template match="/">
			<html>
				<head>
					<title>CV Youness</title>
					<link rel="stylesheet" media="screen" type="text/css" title="Code_CSS" href="css/style2.css"/>
					<link rel="stylesheet" type="text/css" href="css/Font-awesome/css/font-awesome.min.css"/>
				</head>
					<body>
						<div class="ID">
							<xsl:for-each select="page/section/identite">
								<h1><xsl:value-of select="prenom"/> <span><xsl:value-of select="nom"/></span></h1>
								<h2><xsl:value-of select="naissance"/></h2>						
							</xsl:for-each>
						</div>					

						<xsl:for-each select="page">
							<h2 class="titre"><xsl:value-of select="titre"/></h2>
							<img src="Image/Youness.JPG"/>
						</xsl:for-each>
						

						<div class="contact">
							<xsl:for-each select="page/Contact">
								<h2><xsl:value-of select="titre"/></h2>	
								<p><xsl:value-of select="adresse"/></p>	
								<p><xsl:value-of select="tel"/></p>
								<p><xsl:value-of select="mail"/></p>				
							</xsl:for-each>
						</div>

						<div class="Comp">
							<h2>Compétences</h2>
							<xsl:for-each select="page/section">
								<p><xsl:value-of select="competence"/></p>
							</xsl:for-each>
						</div>

						<div class="Form">
							<h2>Formations</h2>
							<xsl:for-each select="page/section/formation">
								<p class="intitule"><xsl:value-of select="intitule"/></p>
								<p><xsl:value-of select="date"/>
								<xsl:value-of select="ecole"/></p>
							</xsl:for-each>	
						</div>					

						<div class="Exp">
							<h2>Experiences Professionelles</h2>
							<xsl:for-each select="page/section/experience">
								<p class="intitule"><xsl:value-of select="date"/><span></span><xsl:value-of select="intitule"/></p>
								<p><xsl:value-of select="descriptif"/></p>
							</xsl:for-each>
						</div>	
						
						<div class="Hob">
							<h2>Hobbies</h2>
							<xsl:for-each select="page">						
								<p><xsl:value-of select="hobbie"/></p>
							</xsl:for-each>
						</div>

						<div class="social">
							<a href="https://twitter.com/Youness_Chetoui"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
							<a href="https://fr.linkedin.com/in/youness-chetoui-70b296122"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
							<a href="https://github.com/Yose216"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
						</div>
					</body>
				</html>
			</xsl:template>
	</xsl:stylesheet>



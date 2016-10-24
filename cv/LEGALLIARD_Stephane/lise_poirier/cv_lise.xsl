<?xml version="1.0" encoding="UTF-8"?>
    <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

        <xsl:template match="/">
            <html>

            <head>
                <title>Welcome !</title>
                <link rel="stylesheet" href="css/style.css" />
                <link rel="stylesheet" href="css/bootstrap.css" />
                <link type="text/css" rel="stylesheet" href="fonts/font-awesome.css" />
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
            </head>

            <body class="container-fluid">

                <header class="row fond_titre_cv text-center">
                    <h1 class="col-md-12 col-sm-12 col-lg-12 text-center titre_cv">CV - Web Développeur</h1>
                    <h2 class="text-center accroche">Efficacité, Communication, Front-end, Graphisme</h2>
                    <p class="description text-center">Après avoir étudié dans la communication graphique et le développement informatique. Je suis aujourd'hui en capacité de participer activement dans ses domaines de la communication. Ma motivation et ma persévérance me sont des atouts au quotidien pour me perfectionner et satisfaire la demande des clients.</p>
                </header>

                <section class="row">
                    <article class="col-md-4 col-sm-6 col-lg-4 categories">
                        <h1 class="text-center titre_h1"><i class="fa fa-info" aria-hidden="true"></i> | INFOS</h1>
                        <h4 class="text-center titre_h4">Hello world</h4>
                        <div class="container_article text-center">
                            <h2 class="prenom"><xsl:value-of select="page/section/article/identite/prenom"/></h2>
                            <h2 class="nom"><xsl:value-of select="page/section/article/identite/nom"/></h2>
                            <h2 class="naissance"><xsl:value-of select="page/section/article/identite/naissance"/></h2>
                            <h2 class="site">
                            <a href="http://lise-poirier.fr/">
                            <xsl:value-of select="page/section/article/identite/site"/>
                            </a></h2>
                        </div>
                    </article>

                    <article class="col-md-4 col-sm-6 col-lg-4 categories">
                        <h1 class="text-center titre_h1"><i class="fa fa-cog" aria-hidden="true"></i> | COMPÉTENCES</h1>
                        <h4 class="text-center titre_h4">Gestion - Communication - Créativité</h4>
                        <div class="container_scroll scroolbar text-center ">
                            <xsl:for-each select="page/section/article/competence/random">
                                <p class="competences">
                                    <xsl:value-of select="titre" />
                                </p>
                            </xsl:for-each>
                        </div>
                    </article>

                    <article class="col-md-4 col-sm-6 col-lg-4 categories">
                        <h1 class="text-center titre_h1"> <i class="fa fa-user-plus" aria-hidden="true"></i> | EXPÉRIENCES</h1>
                        <h4 class="text-center titre_h4">Stages - Emplois</h4>
                        <div class="scroolbar text-center container_scroll">
                            <xsl:for-each select="page/section/article/experience">
                                <p class="intitule">
                                    <xsl:value-of select="intitule" />
                                </p>
                                <p class="datedebut">
                                    <xsl:value-of select="datedebut" />
                                </p>
                                <p class="datefin">
                                    <xsl:value-of select="datefin" />
                                </p>
                                <p class="lieux">
                                    <xsl:value-of select="lieux" />
                                </p>
                                <p class="descriptif descriptif_experience_2" data-toggle="collapse" data-target="#descrip">Découvrir mes missions <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                </p>
                                <div id="descrip" class="collapse descriptif_experience">
                                    <p class="descriptif">
                                        <xsl:value-of select="descriptif" />
                                    </p>
                                </div>
                            </xsl:for-each>
                        </div>
                    </article>

                    <article class="col-md-4 col-sm-6 col-lg-4 categories">
                        <h1 class="text-center titre_h1"><i class="fa fa-graduation-cap" aria-hidden="true"></i> | FORMATIONS</h1>
                        <h4 class="text-center titre_h4">Mes diplômes</h4>
                        <div class="container_scroll scroolbar text-center">
                            <xsl:for-each select="page/section/article/formation">
                                <p class="formation">
                                    <xsl:value-of select="intitule" />
                                </p>
                                <p class="date">
                                    <xsl:value-of select="date" />
                                </p>
                                <p class="ecole">
                                    <xsl:value-of select="ecole" />
                                </p>
                            </xsl:for-each>
                        </div>
                    </article>

                    <article class="col-md-4 col-sm-6 col-lg-4 categories">
                        <h1 class="text-center titre_h1"><i class="fa fa-th" aria-hidden="true"></i> | TECHNOS</h1>
                        <h4 class="text-center titre_h4">Logiciels - Technos</h4>
                        <div class="container_article scroolbar">
                            <xsl:for-each select="page/section/article/custom/autre">
                                <p class="autre">
                                    <xsl:value-of select="titre" />
                                </p>
                            </xsl:for-each>
                        </div>
                    </article>

                    <article class="col-md-4 col-sm-6 col-lg-4 categories">
                        <h1 class="text-center titre_h1"><i class="fa fa-paper-plane" aria-hidden="true"></i> | CONTACT</h1>
                        <h4 class="text-center titre_h4">Merci pour votre attention</h4>
                        <div class="container_article text-center">
                            <div class="adresse">
                                <p>
                                    <xsl:value-of select="page/section/article/contact/adresse/numero" />
                                </p>
                                <p>
                                    <xsl:value-of select="page/section/article/contact/adresse/rue" />
                                </p>
                                <p>
                                    <xsl:value-of select="page/section/article/contact/adresse/cp" />
                                </p>
                                <p>
                                    <xsl:value-of select="page/section/article/contact/adresse/ville" />
                                </p>
                            </div>
                            <p class="tel">
                                <xsl:value-of select="page/section/article/contact/tel" />
                            </p>
                            <a href="mailto:lise.p.poirier@gmail.com" class="mail">
                                <xsl:value-of select="page/section/article/contact/mail" />
                            </a>
                        </div>
                    </article>
                </section>

                <footer class=" footer">
                </footer>


            </body>
            <script src="js/collapse.js"></script>

            </html>
        </xsl:template>
    </xsl:stylesheet>
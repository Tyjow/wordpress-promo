<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" encoding="UTF-8" indent="yes">

</xsl:output>

<xsl:template match="/">

    <html>

        <head>
        	<link type="text/css" rel="stylesheet" href="style3.css"/>

            <title>Cv</title>

        </head>


        <body>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/codeline.jpg">
            <div class="container">
                <header>
                    <div class="nom"><xsl:value-of select="Cv/Personne/section/identite/prenom"/></div>
                    <div class="prenom"><xsl:value-of select="Cv/Personne/section/identite/nom"/></div>
                    <div class="titre"><xsl:value-of select="Cv/Personne/section/p"/></div>
                </header>

                <section class="nav-link">
                    <ul class="vertical-list">
                        <li class="list"><a href="#">Accueil</a></li>
                        <li class="list"><a href="#exp"><xsl:value-of select="Cv/experience/section/p"/></a></li>
                        <li class="list"><a href="#forma"><xsl:value-of select="Cv/formation/section/p"/></a></li>
                        <li class="list"><a href="#comp"><xsl:value-of select="Cv/competence/section/p"/></a></li>
                        <li class="list"><a href="#hob"><xsl:value-of select="Cv/divers/section/p"/></a></li>
                        <li class="list"><a href="#cont">Contact</a></li>
                    </ul>
                </section>

                <section class="content">
                    <section class="left-content">
                        <div class="info">
                            <div class="photo">
                                <img src="img/moi.jpg"/>
                            </div>
                            <div class="bloc">
                                <h3>Contact</h3>
                                <div class="widget-element" id="mail-link" type="button" onclick="show()">
                                    <i class="fa fa-envelope size-vingt" aria-hidden="true"></i>
                                e-mail</div>
                                <div id="bloc-mail">platon.jonathan@gmail.com<i class="fa fa-times i-close" onclick="hide()" type="button" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="bloc">
                                <h3>Présentation</h3>
                                <p class="infos-text">Actuellement apprenant développeur web au sein de la Code Académie avec la Fondation Agir Contre l'Exclusion, je suis en formation de multiples technologies du web concernant les langages suivant : HTML / XML HTML5 / CSS CSS3, PHP, JavaScript, SQL.<br></br>
                                <br></br>
                                Je travail également sur la création de mon site web perso, pour y partager mes créations de Musique Assisté par Ordinateur (MAO) ainsi qu'apporter un forum de discussions pour tous les passionnés de musique.</p>
                            </div>
                            <div class="bloc">
                                <h3 id="cont">Mes Liens</h3>
                                <div class="widget-element soc-link" onclick="parent.location='https://fr.linkedin.com/in/jonathan-platon-309248122'">
                                    <i class="fa fa-linkedin size-vingt" aria-hidden="true"></i>
                                Linkedin</div>
                            </div>
                        </div>
                    </section>

                    <section class="main-content">
                        <div class="widget-content">
                            <h3 class="widget-title" id="forma">
                                <i class="fa fa-graduation-cap size-vingt" aria-hidden="true"></i><xsl:value-of select="Cv/formation/section/p"/>
                            </h3>
                            <div class="inner-widget-content">
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/Personne/section/p"/> / Mobile Junior</h4>
                                    <h5><xsl:value-of select="Cv/formation/organisme"/><xsl:value-of select="Cv/formation/lieu"/><br></br>Depuis<xsl:value-of select="Cv/formation/date"/>
                                    </h5>
                                    <p class="text-content">Formation en autodidacte sur les langages du Web, comme le HTML5,  CSS3, PHP, Javascript, bootstrap, XHTML, XML...</p>
                                </div>
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/formation/intitule[2]"/></h4>
                                    <h5><xsl:value-of select="Cv/formation/organisme[2]"/><br></br><xsl:value-of select="Cv/formation/date[2]"/> à 2006
                                    </h5>
                                    <p class="text-content">Formation au métier d'électricien en bâtiments ainsi qu'en entreprise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <h3 class="widget-title" id="exp">
                                <i class="fa fa-briefcase size-vingt" aria-hidden="true"></i>
                                <xsl:value-of select="Cv/experience/section/p"/>
                            </h3>
                            <div class="inner-widget-content">
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/experience/section[2]/poste/descriptif"/></h4>
                                    <h5><xsl:value-of select="Cv/experience/section[2]/poste/entreprise"/><br></br><xsl:value-of select="Cv/experience/section[2]/poste/date"/>
                                    </h5>
                                    <li class="text-content li-marg">Démarchage de clients pour une société.</li>
                                    <div class="town">
                                        <span class="town-target"><xsl:value-of select="Cv/experience/section[2]/poste/lieu"/>(France)</span>
                                    </div>
                                </div>
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/experience/section[2]/poste[2]/descriptif"/></h4>
                                    <h5><xsl:value-of select="Cv/experience/section[2]/poste[2]/entreprise"/><br></br><xsl:value-of select="Cv/experience/section[2]/poste[2]/date"/>
                                    </h5>
                                    <li class="text-content li-marg">formation et suivi auprès de tous les employés du restaurant.</li>
                                    <div class="town">
                                        <span class="town-target town-marg">CDI</span>
                                        <span class="town-target"><xsl:value-of select="Cv/experience/section[2]/poste[2]/lieu"/>(France)</span>
                                    </div>
                                </div>
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/experience/section[2]/poste[3]/descriptif"/></h4>
                                    <h5><xsl:value-of select="Cv/experience/section[2]/poste[3]/entreprise"/><br></br><xsl:value-of select="Cv/experience/section[2]/poste[3]/date"/>
                                    </h5>
                                    <li class="text-content li-marg">Emploi sur plusieurs postes dans plusieurs entreprises en bâtiments et autres.</li>
                                    <div class="town">
                                        <span class="town-target town-marg">Intérim</span>
                                        <span class="town-target"><xsl:value-of select="Cv/experience/section[2]/poste[3]/lieu"/>(France)</span>
                                    </div>
                                </div>
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/experience/section[2]/poste[4]/descriptif"/></h4>
                                    <h5><xsl:value-of select="Cv/experience/section[2]/poste[4]/entreprise"/><br></br><xsl:value-of select="Cv/experience/section[2]/poste[4]/date"/>
                                    </h5>
                                    <li class="text-content li-marg">Agent de propreté du secteur des grandes surfaces puis en hôtellerie qui consiste à améliorer l’état d’hygiène des entreprises.</li>
                                    <div class="town">
                                        <span class="town-target town-marg">CDD</span>
                                        <span class="town-target"><xsl:value-of select="Cv/experience/section[2]/poste[2]/lieu"/>(France)</span>
                                    </div>
                                </div>
                                <div class="mid-content">
                                    <h4><xsl:value-of select="Cv/experience/section[2]/poste[5]/descriptif"/></h4>
                                    <h5><xsl:value-of select="Cv/experience/section[2]/poste[5]/entreprise"/><br></br><xsl:value-of select="Cv/experience/section[2]/poste[5]/date"/>
                                    </h5>
                                    <li class="text-content li-marg">Mon rôle a été d’assembler des unités centrales de PC, puis d’assurer la maintenance et la réparation de ceux de particuliers.</li>
                                    <div class="town">
                                        <span class="town-target town-marg">Stage</span>
                                        <span class="town-target"><xsl:value-of select="Cv/experience/section[2]/poste[5]/lieu"/>(France)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="right-content">
                        <div class="widget-content">
                            <h3 class="widget-title" id="comp">
                                <i class="fa fa-clipboard size-vingt" aria-hidden="true"></i>
                                <xsl:value-of select="Cv/competence/section/p"/>
                            </h3>
                            <div class="inner-widget-content">
                                <div class="mid-content">
                                    <h4 class="more-bot">Langages Web</h4>
                                    <ul class="remove">
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>HTML5
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>CSS3
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>PHP
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Javascript
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Bootstrap
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot"><div class="list-skill">
                                                <span>XML
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div></li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>XSLT
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>SQL
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mid-content">
                                    <h4 class="more-bot">Savoir être</h4>
                                    <ul class="remove">
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Autodidacte
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Polyvalent
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Capacité d'adaptation
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Esprit d'équipe
                                                    <div class="level">
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star star-pad" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o star-pad grey-o" aria-hidden="true"></i>
                                                    </div>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <h3 class="widget-title" id="hob">
                                <i class="fa fa-paper-plane size-vingt" aria-hidden="true"></i>
                                <xsl:value-of select="Cv/divers/section/p"/>
                            </h3>
                            <div class="inner-widget-content">
                                <div class="mid-content">
                                    <h4 class="more-bot">Musique</h4>
                                    <ul class="remove">
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Composition de musique assisté par ordinateur (MAO)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mid-content">
                                    <h4 class="more-bot">Cinéma</h4>
                                    <ul class="remove">
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Science Fiction, Action</span>
                                            </div>
                                        </li>
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Film d'animation japonais ainsi que les animés</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mid-content">
                                    <h4 class="more-bot">Lectures</h4>
                                    <ul class="remove">
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Univers des mangas</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mid-content">
                                    <h4 class="more-bot">Jeux Vidéos</h4>
                                    <ul class="remove">
                                        <li class="text-content li-marg marg-bot">
                                            <div class="list-skill">
                                                <span>Univers des jeux vidéos</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
            <script src="https://use.fontawesome.com/50d70c63af.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
            <script src="parallax/parallax.js"></script>
            <script type="text/javascript" src="script.js"></script>
        </body>

    </html>         

    </xsl:template>


</xsl:stylesheet>
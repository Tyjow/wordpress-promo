<?php include('head.php'); ?>

<body class="container-fluid">
   
    <?php include('nav.php'); ?>
   
    <header class="row" id="return-top">
        <div class="portrait"></div>   
        <h1>CV - Julien Malle</h1>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-star"></div>
            <div class="trait"></div>
        </div>
        <h2>Développeur Web Junior - Front-End</h2>
    </header>
    
    <section class="row" id="about">
        <h3>à propos</h3>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-user"></div>
            <div class="trait"></div>
        </div>
        <p>J'ai découvert le monde du développement web à la faculté Rennes 2 grâce un cours optionnel. Depuis je n'ai cessé d'apprendre par moi même à l'aide de cours qui se trouvent sur le web.</p>
        <p>J'ai par la suite décidé d'intégrer une formation, la Code Académie (Face, Simplon) de Rennes. Cela m'a été très bénéfique, j'y ai développé mes compétences et appris énormément de nouvelles choses. Nous avons tous explorer le développement front-end et back-end. Pour ma part j'ai fini par me spécialiser en front.</p>
    </section>
    
    <section class="row" id="comp">
        <h3>compétences</h3>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-thumbs-up"></div>
            <div class="trait"></div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div id="liquid-event" class="skill-contain">
                    <div class="liquid liquid-html"></div>
                    <div class="techno html">html 5</div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-css"></div>
                    <div class="techno css">css 3</div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-js"></div>
                    <div class="techno js">js 5</div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-jquery"></div>
                    <div class="techno jquery">jquery</div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-bootstrap"></div>
                    <div class="techno bootstrap BS">bootstrap 3</div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-php"></div>
                    <div class="techno php">php 5</div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-mysql"></div>
                    <div class="techno mysql">mysql</div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="skill-contain">
                    <div class="liquid liquid-xml"></div>
                    <div class="techno xml">xml</div>
                </div>
            </div>
        </div>
        <script src="js/skill-liquid.js"></script>
    </section>
    
    <section class="row" id="port">
        <h3>portfolio</h3>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-picture-o"></div>
            <div class="trait"></div>
        </div>
        
        <div class="row portfolio">
            <div id="projet1" class="img-portfolio col-xs-12 col-sm-12 col-md-3">
                <div><i class="fa fa-search-plus fa-5x"></i></div>
            </div>
            <div id="projet2" class="img-portfolio col-xs-12 col-sm-12 col-md-3">
                <div><i class="fa fa-search-plus fa-5x"></i></div>
            </div>
            <div id="projet3" class="img-portfolio col-xs-12 col-sm-12 col-md-3">
                <div><i class="fa fa-search-plus fa-5x"></i></div>
            </div>
        </div>
        
        <a href="portfolio.php"><button>En voir plus</button></a>
    </section>
    
    <section class="row" id="study">
        <h3>études</h3>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-graduation-cap"></div>
            <div class="trait"></div>
        </div>
        <p>Mes diplômes, certificats et formations.</p>
        
        <div class="timeline">
            <button id="etu-prec"><i class="fa fa-chevron-circle-left fa-5x"></i></button>
            <!-- //////////////////////////////////// -->
            <div id="etu-1" class="timeline-part an-etu">
                <p class="year"> 2011 </p>
                <p class="intitule"> BAC Littéraire - Arts-Platiques </p>
                <p class="name-town"> Rennes, Bréquigny </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="etu-2" class="timeline-part an-etu">
                <p class="year"> 2011 | 2013 </p>
                <p class="intitule"> FAC d'Arts-Plastiques </p>
                <p class="name-town"> Rennes, Rennes 2 </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="etu-3" class="timeline-part an-etu">
                <p class="year"> 2015 </p>
                <p class="intitule"> Certificats HTML5/CSS3 </p>
                <p class="name-town"> OpenClassRoom </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="etu-4" class="timeline-part an-etu">
                <p class="year"> 2016 </p>
                <p class="intitule"> Certificats PHP5/MySQL </p>
                <p class="name-town"> OpenClassRoom </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="etu-5" class="timeline-part an-etu">
                <p class="year"> 2016 | 2017 </p>
                <p class="intitule"> Formation Développeur Web </p>
                <p class="name-town"> Code Académie - FACE, Rennes </p>
            </div>
            <button id="etu-suiv"><i class="fa fa-chevron-circle-right fa-5x"></i></button>
        </div>
        
    </section>
    
    <section class="row" id="exp">
        <h3>expérience</h3>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-gear"></div>
            <div class="trait"></div>
        </div>
        
        <p id="test"></p>
        
        <div class="timeline">
            <button id="exp-prec"><i class="fa fa-chevron-circle-left fa-5x"></i></button>
            <!-- //////////////////////////////////// -->
            <div id="exp-1" class="timeline-part an-exp">
                <p class="year"> 2012 </p>
                <p class="intitule"> Inventaires </p>
                <p class="name-town"> Carrefour, à Rennes </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="exp-2" class="timeline-part an-exp">
                <p class="year"> 2012 | 2014 </p>
                <p class="intitule"> Mise en rayon </p>
                <p class="name-town"> Carrefour, à Rennes </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="exp-3" class="timeline-part an-exp">
                <p class="year"> 2014 | 2015 </p>
                <p class="intitule"> Animation vente </p>
                <p class="name-town"> LIDL, à Rennes </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="exp-4" class="timeline-part an-exp">
                <p class="year"> 2014 </p>
                <p class="intitule"> Opérateur de saisie de données </p>
                <p class="name-town"> ESC School of Business, à Rennes </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="exp-5" class="timeline-part an-exp">
                <p class="year"> 2015 </p>
                <p class="intitule"> Reconditionnement en laboratoire </p>
                <p class="name-town"> LEHA, à Rennes </p>
            </div>
            <!-- //////////////////////////////////// -->
            <div id="exp-6" class="timeline-part an-exp">
                <p class="year"> 2015 </p>
                <p class="intitule"> Technicien de surface </p>
                <p class="name-town"> Gare de Rennes </p>
            </div>
            <button id="exp-suiv"><i class="fa fa-chevron-circle-right fa-5x"></i></button>
        </div>
        
    </section>
    
    <section class="row" id="contact">
        <h3>me contacter</h3>
        <div class="sepa-header">
            <div class="trait"></div>
            <div class="fa fa-2x fa-envelope"></div>
            <div class="trait"></div>
        </div>
        
        <form class="form" id="form1">
            <p class="name">
                <input name="name" type="text" class="feedback-input" placeholder="Nom" id="name" />
            </p>
            <p class="email">
                <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" />
            </p>
            <p class="text">
                <textarea name="text" class="feedback-input" id="comment" placeholder="Votre message"></textarea>
            </p>
            <div class="submit">
                <input type="submit" value="ENVOYER" id="button-blue" class="center-block"/>
                <div class="ease"></div>
            </div>
        </form>
            
    </section>
    
    <?php include('footer.php'); ?>
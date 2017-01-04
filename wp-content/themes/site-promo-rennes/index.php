<?php get_header(); ?>
   
    <div class="container-fluid">
       
        <header style='background-image:url(<?php header_image(); ?>)'>
            <div class="filtre-sombre">
                <h1><img class="promo-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-codeacademie.png"/></h1>
                <button id="skr" class="content-button center-block"><a href="#content">Partez à la découverte de notre formation</a></button>
            </div>
        </header> 
        
        <div id="content" class="wrapper">

            <div class="col-md-8">
                <!-- contenue du site ici -->
                <article class="a_propos">
                    <div class="a_propos_img">
                        <h2>A PROPOS</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-codeacademie.png"/>
                    </div>
                    <p>La Code Académie est un dispositif mis en place dans le cadre du projet gouvernemental de la <a href="https://www.grandeecolenumerique.fr/">Grande école du numérique</a>.
                    Il s'agit d'une formation qui permet l'apprentissage du développement web/mobile pour tous les profils qui démontrent une forte motivation à apprendre des langages de programmation.
                    Cette formation, proposée par la <a href="http://face.bzh/">Fondation Agir Contre l'Exclusion</a>, suit la pédagogie <a href="http://simplon.co/">Simplon</a>; soit la méthode du "Learning by doing".
                    La Code Académie est conventionnée et subventionnée par la Région Bretagne, pôle emploi et l’Etat.
                    La première promotion de la formation, qui se déroule à la <a href="http://face.bzh/">FACE Rennes</a>, a débuté le 17 mai et se termine fin janvier.</p>
                </article>
                
                <article class="center">
                    <h3>La formation</h3>
                    <p>
                    Spécialement orientée vers les travaux pratiques, cette formation permet la réalisation de nombreux projets professionnels, en relation directe avec des entreprises. 

                    Ainsi l'apprentissage des bases du développement web,et des langages tels que HTML5/CSS3, Javascript et PHP se déroule avec de réelles contraintes techniques en lien avec les demandes des clients.
                    La réalisation de ces projets professionnels, favorise le travail en équipe et permet  donc, d’une part,  de familiariser les apprenant.e.s à  différentes méthodes de travail, dont le <em>pair programming </em> ou la méthode <em>Agile</em>, notamment en mode <em>SCRUM</em>.
                    Mais Cela leur permet donne d’autre part aussi  l’opportunité d'expérimenter le développement collaboratif avec des outils tels que Git/GitHub. 

                    La seconde partie de formation est axée sur une spécialisation, ainsi chaque apprenant.e a la possibilité d'approfondir ses connaissances dans son secteur, que ce soit :
                    <ul>
                        <li>une spécialisation Front End, dans laquelle ils.elles découvrent des frameworks tels que AngularJS ou REACT</li>
                        <li>une spécialisation Back End où ils.elles pratiquent le framework <em>Silex</em>, et <em>Symfony</em> et NodeJS</li>
                        <li>une spécialisation Référent Numérique où les apprenant.e.s approfondissent le CMS Wordpress et les notions de gestion de projet.</li>
                    </ul>
                    Enfin, tout au long du parcours, de nombreuses interventions d'acteurs du secteur numérique leurs permettent d'acquérir une vision globale du milieu numérique sur le bassin Rennais.
                    </p>
                </article>
            </div>


            <!-- ------------ aside -------------- -->
            <?php get_sidebar(); ?>


        </div>
    </div>

    <?php get_footer(); ?>

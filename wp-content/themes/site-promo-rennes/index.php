<?php get_header(); ?>
   
    <div class="page container-fluid">
       
        <div id="header" class="row" style='background-image:url(<?php header_image(); ?>)'>
            <div class="block-opaque">
                <h1><?php bloginfo('name'); ?></h1>
                <button id="skr" class="content-button center-block"><a href="#content">Partez à la découverte de notre formation</a></button>
            </div>
        </div> 
        
        <script>
            // SCROLL FLUIDE
            $('#skr').click(function(){
    	       $('html, body').animate({
    		      scrollTop:$('#content').offset().top
    	       }, 'slow');
    	       return false;
            });
        </script>  
        
        <div id="content" class="row">

            <div class="col-md-8">
                <!-- contenue du site ici -->
                <article id="a_propos">
                    <div>
                        <h2>A PROPOS</h2>
                        
                        <div id="logo_a_propos"></div>
                    </div>
                    <p>La Code Académie, une formation qui permet l'apprentissage du développement avec différents langages de programmation informatique web/mobiles pour tous les profils qui démontrent une fortes motivation à apprendre la programmation.
Le nom de notre formation Code Académie, formation proposée par la fondation  <a href="http://face.bzh/">FACE </a> qui a répondu à l'appel d'offre afin d’être labellisé a la <a href="https://www.grandeecolenumerique.fr/"> Grande école du numérique </a> et dont <a href="http://simplon.co/"> Simplon</a> est le prestataire de la pédagogie.
La Code Académie est conventionnée et subventionnée par la Région Bretagne et L’état.La formation se déroule au siège social de la <a href="http://face.bzh/">Fondation pour Agir Contre l'Exclusion.</a>
Elle a débuté en mai et se termine fin janvier.</p>
                </article>
                
                <article id="center">
                    <h3>La formation</h3>
                    <p>Spécialement orienté vers les travaux pratiques, cette fromation permet la réalisation de nombreux projets professionnels, en relation direct avec des entreprises. </br>
                ICI lien de 1/2/3veto -fedala -ebulition </br>
Ainsi l'apprentissage des bases du développement web, avec des languages tels que HTML5/CSS3 et Javascript se deroule avec des réeles contraintes techniques en lien avec les demandes de clients.</br>
La réalisation de ces projets proffessionnels, permet une formation axée sur le travail en équipe et donc de les familiariser avec differentes méthode de travail, Dont la méthode Agile, notamment en mode SCRUM.(scrum sera un lien vers un article sur ce que c'est) </br>
Mais aussi d'experimenter le développement collaboratif avec des outils tel que <a href="https://fr.wikipedia.org/wiki/Git">Git/GitHub.</a> </br>
La seconde partie de formation est axée sur une spécialisation, ainsi chaque apprenant a la possibilité d'approfondir ses connaissances dans son secteur.</br>
De nombreuses interventions d'acteurs du secteur numérique leur permettent d'acquerir une vision global du milieu numérique sur le bassin Rennais. </p>
                </article>
            </div>
            
            

            <!-- aside -->
            <?php get_sidebar(); ?>
            </div>
        </div>
    <?php get_footer(); ?>
</body>

</html>

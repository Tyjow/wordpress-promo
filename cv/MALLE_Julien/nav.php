<nav id="navbar" class="row">
    <ul id="ul-top">
        <li> <a href="#return-top">CV - Julien Malle</a> </li>
        <div class="navigation">
            <li><a href="#about">à propos</a></li>
            <li><a href="#comp">compétences</a></li>
            <li><a href="#port">portfolio</a></li>
            <li><a href="#study">études</a></li>
            <li><a href="#exp">expérience</a></li>
            <li><a href="#contact">contact</a></li>
        </div>
    </ul>
    <button class="fa fa-chevron-circle-down fa-3x menu-deroulant"></button>
</nav>


<script>
    // on a besoin de connaitre la largeur de la fenêtre
    var winWidth = $(window).width();
    
    // position du menu déroulant par apport à la hauteur du menu
    function positionMenu() {
        var heiMenu = $('nav ul').height();
        if (heiMenu === 125) {
            $('nav ul .navigation').css("top", "125px");
        } else {
            $('nav ul .navigation').css("top", "60px");
        } 
    };
    
    // gestion du menu déroulant en mode smartphone/tablette
    $(document).ready(function() {
        if (winWidth < 992 || winWidth === 992) {
            var menuEtat = 0;
        
            // on clique et le menu apparait/disparait
            $('.menu-deroulant').on('click', function() {
                positionMenu();
                if (menuEtat === 0) {
                    $('.navigation').css("display", "block");
                    menuEtat = 1;
                } else {
                    $('.navigation').css("display", "none");
                    menuEtat = 0; 
                }
            });
            $('.navigation li a').on('click', function() {
                positionMenu();
                if (menuEtat === 0) {
                    $('.navigation').css("display", "block");
                    menuEtat = 1;
                } else {
                    $('.navigation').css("display", "none");
                    menuEtat = 0;
                }
            });
            
            // disparition du menu au scroll
            $(document).scroll(function(){
                positionMenu();
                $('.navigation').css("display", "none");
                menuEtat = 0;
            });
        }
    });
</script>
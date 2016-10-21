// Changement d'état de la barre de navigation au scroll
(function($){
    $(document).ready(function(){
        var offset = $("#navbar").offset().top;
        $(document).scroll(function(){
            var scrollTop = $(document).scrollTop();
            if(scrollTop > offset){
                $("#navbar").css("position", "fixed");
                $("#navbar").css("width", "100vw");
                $("#navbar").css("background", "#3e4649"); /*pour les vieux navifateurs*/
                $("#navbar").css("background-color", "rgba(62,70,73,.75)");
                $("#navbar").css("height", "60px");
                $("#ul-top").css("height", "60px");
            }
            else {
                $("#navbar").css("position", "static");
                $("#navbar").css("width", "auto");
                $("#navbar").css("background-color", "#3e4649");
                $("#navbar").css("height", "125px");
                $("#ul-top").css("height", "125px");
            }
        });
    });
})(jQuery);

// Scroll fluide
$(document).ready(function() {
    $('a').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});

// Liens du portfolio
$(document).ready(function() {
    $('#projet1').on('click', function() {
        // lien ici
        location.href = "#";
    });
    
    $('#projet2').on('click', function() {
        // lien ici
        location.href = "#";
    });
    
    $('#projet3').on('click', function() {
        // lien ici
        location.href = "#";
    });
});

// Gestion timeline etudes
$(document).ready(function() {
    var navExp = 1;
    var numExp = $('.an-etu').length
    
    if (navExp === 1) {
        $('#etu-1').css("display", "block");
        $('#etu-' + navExp).css("opacity", "1");
    }
    
    // clic bouton précédent
    $('#etu-prec').on('click', function() {
        if (navExp > 1) {
            $('#etu-' + navExp).animate({opacity: '0'});
            $('#etu-' + navExp).css("display", "none");
            navExp--;
            $('#etu-' + navExp).css("display", "block");
            $('#etu-' + navExp).animate({opacity: '1'});
        }
    });
    
    // clic bouton suivant
    $('#etu-suiv').on('click', function() {
        if (navExp < numExp) {
            $('#etu-' + navExp).animate({opacity: '0'});
            $('#etu-' + navExp).css("display", "none");
            navExp++;
            $('#etu-' + navExp).css("display", "block");
            $('#etu-' + navExp).animate({opacity: '1'});
        }
    });
    
    
});

// Gestion timeline experience
$(document).ready(function() {
    var navExp = 1;
    var numExp = $('.an-exp').length
    
    if (navExp === 1) {
        $('#exp-1').css("display", "block");
        $('#exp-' + navExp).css("opacity", "1");
    }
    
    // clic bouton précédent
    $('#exp-prec').on('click', function() {
        if (navExp > 1) {
            $('#exp-' + navExp).animate({opacity: '0'});
            $('#exp-' + navExp).css("display", "none");
            navExp--;
            $('#exp-' + navExp).css("display", "block");
            $('#exp-' + navExp).animate({opacity: '1'});
        }
    });
    
    // clic bouton suivant
    $('#exp-suiv').on('click', function() {
        if (navExp < numExp) {
            $('#exp-' + navExp).animate({opacity: '0'});
            $('#exp-' + navExp).css("display", "none");
            navExp++;
            $('#exp-' + navExp).css("display", "block");
            $('#exp-' + navExp).animate({opacity: '1'});
        }
    });
    
    
});




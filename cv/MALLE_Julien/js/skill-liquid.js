// Remplissage des compétences
$('#liquid-event').bind('inview',function(event, isInView, visiblePartX, visiblePartY){
    if (isInView) {
        $(".liquid-html").animate({
                height: '90%'
        });
        
        $(".liquid-css").animate({
            height: '80%'
        });
        
        $(".liquid-js").animate({
            height: '60%'
        });
        
        $(".liquid-jquery").animate({
            height: '60%'
        });
        
        $(".liquid-bootstrap").animate({
            height: '75%'
        });
        
        $(".liquid-php").animate({
            height: '35%'
        });
        
        $(".liquid-mysql").animate({
            height: '70%'
        });
        
        $(".liquid-xml").animate({
            height: '65%'
        });
    }
    else {
        $(".liquid-html").animate({
            height: '0%'
        });
        
        $(".liquid-css").animate({
            height: '0%'
        });
        
        $(".liquid-js").animate({
            height: '0%'
        });
        
        $(".liquid-jquery").animate({
            height: '0%'
        });
        
        $(".liquid-bootstrap").animate({
            height: '0%'
        });
        
        $(".liquid-php").animate({
            height: '0%'
        });
        
        $(".liquid-mysql").animate({
            height: '0%'
        });
        
        $(".liquid-xml").animate({
            height: '0%'
        });
    }
});


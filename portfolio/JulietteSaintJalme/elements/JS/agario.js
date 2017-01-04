$(document).ready(function(){
    animateDiv($('.a'));
});
$(document).ready(function(){
    animateDiv($('.b'));
});
$(document).ready(function(){
    animateDiv($('.c'));
});
$(document).ready(function(){
    animateDiv($('.d'));
});
$(document).ready(function(){
    animateDiv($('.e'));
});
$(document).ready(function(){
    animateDiv($('.f'));
});
$(document).ready(function(){
    animateDiv($('.g'));
});
$(document).ready(function(){
    animateDiv($('.h'));
});
$(document).ready(function(){
    animateDiv($('.i'));
});
$(document).ready(function(){
    animateDiv($('.j'));
});
$(document).ready(function(){
    animateDiv($('.k'));
});
$(document).ready(function(){
    animateDiv($('.l'));
});
$(document).ready(function(){
    animateDiv($('.m'));
});
$(document).ready(function(){
    animateDiv($('.n'));
});

function makeNewPosition(){

    // ici dimension div
   var hauteur = $('.limite').height() - 150;
   var width = $('.limite').width() - 150;

    var nh = Math.ceil(Math.random() * hauteur);
    var nw = Math.ceil(Math.random() * width);

    return [nh,nw];

}

function animateDiv($element){
    var newq = makeNewPosition();
    var oldq = $element.offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);

    $element.animate({ top: newq[0], left: newq[1] }, speed, function(){
      animateDiv($element);
    });

};


function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);

    var greatest = x > y ? x : y;

    var speedModifier = 0.15;

    var speed = Math.ceil(greatest/speedModifier);

    return speed;

}

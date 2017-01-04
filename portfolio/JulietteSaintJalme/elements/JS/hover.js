$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

var timerIn = 200;
var timerOut = 200;
$('ul.nav li.dropdown').hover(function() {
    $(this).find('> .dropdown-menu').stop(true, true).fadeIn(timerIn);
    $(this).addClass('open');
}, function() {
    $(this).find('> .dropdown-menu').stop(true, true).fadeOut(timerOut);
    $(this).removeClass('open');
});

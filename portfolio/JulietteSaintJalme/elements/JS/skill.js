
$(document).ready(function() {
  $('.html').css('width', '90%');
  $('.css').css('width', '90%');
  $('.jquery').css('width', '70%');
  $('.javascript').css('width', '60%');
  $('.adobe').css('width', '80%');
  $('.wordpress').css('width', '10%');
  $('.ui').css('width', '70%');
  $('.rwd').css('width', '80%');
});
$( document ).ready(function() {
    $(".setsize").each(function() {
        $(this).height($(this).width());
    });
});
$(window).on('resize', function(){
    $(".setsize").each(function() {
        $(this).height($(this).width());
    });
});

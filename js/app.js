$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
  })
})

$(function () {
  $('.categorias').tabs();

});

$( "#dialog" ).dialog({ autoOpen: false });
$( "#opener" ).click(function() {
  $( "#dialog" ).dialog( "open" );
});
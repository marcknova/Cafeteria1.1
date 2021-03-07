$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
  })
});

$(function(){
  $(".accordion-titulo").click(function(e){
           
        e.preventDefault();
    
        var contenido=$(this).next(".accordion-content");

        if(contenido.css("display")=="none"){ //open		
          contenido.slideDown(250);			
          $(this).addClass("open");
        }
        else{ //close		
          contenido.slideUp(250);
          $(this).removeClass("open");	
        }
      });
});


$(document).ready(function() {
  $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
  $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
} );


$(document).ready( function() {

  var names = [ "Jörn Zaefferer", "Scott González", "John Resig" ];

  var accentMap = {
    "á": "a",
    "ö": "o"
  };


  var normalize = function( term ) {
    var ret = "";
    for ( var i = 0; i < term.length; i++ ) {
      ret += accentMap[ term.charAt(i) ] || term.charAt(i);
    }
    return ret;
  };


  $( "#developer" ).autocomplete({
    source: function( request, response ) {
      var matcher = new RegExp( $.ui.autocomplete.escapeRegex( request.term ), "i" );
      response( $.grep( names, function( value ) {
        value = value.label || value.value || value;
        return matcher.test( value ) || matcher.test( normalize( value ) );
      }) );
    }
  });
} );

$(document).ready(function() {
  $( "#datepicker" ).datepicker();
});

$(document).ready( function() {
  var tooltips = $( "[title]" ).tooltip({
    position: {
      my: "left top",
      at: "right+5 top-5",
      collision: "none"
    }
  });
} );
$(function() {
  $(".card").draggable();
  $(".footer-card").sortable();
  $("input").checkboxradio();
  $("fieldset").controlgroup();
  $("#menu").menu();
  $(".categorias").tabs();
  $(".areaProductos").resizable();
  $("#dialog").dialog({
      autoOpen: false
  });
});
$("#opener").click(function() {
  $("#dialog").dialog("open");
});
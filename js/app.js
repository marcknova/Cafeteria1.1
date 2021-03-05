$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
  })
});

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
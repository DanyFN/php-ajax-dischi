var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {

  // handlebars sintassi, seleziono il template
  var htmlTemplate = $("#album-template").html();
  var template = Handlebars.compile(htmlTemplate);

	$.ajax({
    url: "http://localhost:repo-PHP/php-ajax-dischi/database.php",
    method: "GET",
    success: function(data){
      console.log(data);
      // valore dell oggetto dell api è un array
      //
      // valore contenuto nell array
      var arrayCd = data;

      for (var i = 0; i < arrayCd.length; i++) {
        // singolo elemento dell array (cd)
        var singoloCd = arrayCd[i];
        // console.log(singoloCd);
        // al template di hendlebars associo il valore del singolo cd
        var context = {
          author: singoloCd.author,
          poster: singoloCd.poster,
          title: singoloCd.title,
          year: singoloCd.year
        };

        var htmlGenerato = template(singoloCd);
        // appnedo al container il singolo cd generato con l html
        $("#clone_template").append(htmlGenerato);
      }
    },

    error: function(){
      alert("ERRORE");
    }


  });

});

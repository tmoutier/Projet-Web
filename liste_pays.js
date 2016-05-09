$(document).ready(function() {
    $.ajax({
        url: "liste_pays.php"
    }).then(function(data) {
        
       
       for(var x=0; x<data.length; x++){
          var pays = data[x].nom_pays;
          $('#dropdownpays').append("<OPTION value='"+pays+"'>");
      }
          
       
    });
});

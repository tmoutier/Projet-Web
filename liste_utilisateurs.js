$(document).ready(function() {
    $.ajax({
        url: "liste_utilisateurs.php"
    }).then(function(data) {
        
       $('#myDiv').append(data.length);
       for(var x=0; x<data.length; x++){
       $('#myDiv2').append(data[x].prenom_utilisateur);
       $('#myDiv2').append(" ");
       $('#myDiv2').append(data[x].nom_utilisateur);
       $('#myDiv2').append("<br>");
       }
       console.log(data);
       
    });
});


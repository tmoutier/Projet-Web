$("#contrat" ).submit(function(event){
    var formContents = $(this).serialize();
    console.dir(formContents);
    $.post("form_contrat_api.php", formContents); 
    document.location.href="accueil.php"
    
    });
                                  
  

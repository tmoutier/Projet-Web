<!DOCTYPE html>
<html>
   <head>
      <title>TC Advisor</title>
      <meta charset="utf-8">
      <link href="site.css" rel="stylesheet">
      <script src="liste_pays.js"></script>
   </head>
   <body>
    
      
    <?php
    
     $db=mysql_connect('localhost','root','')
     or die ("erreur de connexion");
     mysql_select_db('projet_web',$db) or die ("Erreur : Connexion impossible à la Base de données");   
     
     $pays = $_POST['pays'];
     $pays1 = $_POST['pays1'];
     $page = $_POST['depart'];
    
    
      if(($pays!= NULL)) && ($pays1!= NULL)){
        if($pays != $pays1){
          var alerte=confirm('Merci de ne renseigner qu\'un seul des deux champs concernant le pays, retour à la page précédente!');
          header('refresh:2; url=site_espace_personnel.php');}
        else{
          if($page == echange){
            header('url=site_espace_personnel_echange.php');
            }
          else{
            header('url=site_espace_personnel_entreprise.php');
            }
          }
       }
       else if(($pays == NULL) && ($pays1!= NULL)){
          
         
            
          
          }
          
        
        }
     
 </body>
</html>                          
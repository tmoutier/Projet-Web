<!DOCTYPE html>
<html>
   <head>
      <title>TC Advisor</title>
      <meta charset="utf-8">
      <link href="site.css" rel="stylesheet">
   </head>
   <body>
    
      
    <?php
    
        
     $db=mysql_connect('localhost','root','')
     or die ("erreur de connexion");
     mysql_select_db('projet_web',$db) or die ("Erreur : Connexion impossible à la Base de données");
     
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $promo = $_POST['promotion'];
     $numero = $_POST['telephone'];
     $mail = $_POST['mail'];
     $pwd1 = $_POST['pwd1'];
     $pwd2 = $_POST['pwd2'];
     
     if(strlen($nom)>=2){    
      if(strlen($prenom)>=2){       
       if (strlen($numero)==10){
        if (strlen($mail)>= 4){
          if($pwd1 == $pwd2){
        mysql_query('INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, promo_utilisateur, numero_telephone_utilisateur, adresse_mail_utilisateur, mot_de_passe_utilisateur) 
        VALUES("'.$nom.'", "'.$prenom.'", "'.$promo.'", "'.$numero.'", "'.$mail.'", "'.$pwd1.'")');
				echo 'Youpi, tu es inscrit!!!';
        session_start();
         $_SESSION['login'] = $_POST['mail'];
      }
      }
      }
      } 
      }
 
   header('refresh:3; url=accueil.php');
     ?> 
     
 </body>
</html>                          
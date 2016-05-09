<!DOCTYPE html>
<html>

  <head>
	 <title>TC Advisor</title>
	 <meta charset="utf-8">
	 <link href="site.css" rel="stylesheet">
   <script src="jquery.js"></script>
  </head>
 
  <body>
  
                
     <nav id="entete">
	    <div id="entete">
		   <h1>
       <a href="first.php" style="text-decoration:none;">TC Around the World</a>
       <img class="right" src="images/travel.png" alt="Travelling" height="150" width="250" style="float:right;margin:-40px 50px 0 20px;"/></h1>
	    </div>
    </nav>
    <?php    
    
     $db=mysql_connect('localhost','root','')
     or die ("erreur de connexion");
     mysql_select_db('projet_web',$db) or die ("Erreur : Connexion impossible à la Base de données");

     
    

     ?>
    <div id="main">	
    <nav id="menu">		
		<h2>Tentative de connexion en cours!</h2>
	  <?php
      if(empty($_POST['mail'] || empty($_POST['pwd'])))
      {
         $message = '<p>une erreur s\'est produite pendant votre identification.
       	 Vous devez remplir tous les champs</p>
	       <p>Cliquez <a href="./accueil.html">ici</a> pour revenir</p>';
      }
      else
      {
         $req = mysql_query('SELECT mot_de_passe_utilisateur FROM utilisateur WHERE adresse_mail_utilisateur="'.$_POST['mail'].'"');
         $data = mysql_fetch_assoc($req);
         
         if($data['mot_de_passe_utilisateur'] != $_POST['pwd'])
         { 
            echo '<p>Mauvais login / password. Merci de recommencer, redirection vers la page d\'accueil en cours!</p>';
             
             header('refresh:3; url=accueil.php');
            exit();
            
         }
         else{
         session_start();
         $_SESSION['login']= $_POST['mail'];
          echo '<p>GG tu as réussi à te connecter, redirection vers l\'accueil dans quelques secondes!</p>';
          header('refresh:3; url=accueil.php');
            exit();
         }
      }
    
    
    
    
    
    ?>
	 </div>
	
	<script src="script.js"></script>

</body>
</html>

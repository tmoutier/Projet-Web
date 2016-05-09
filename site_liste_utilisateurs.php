<!DOCTYPE html>
<html>

  <head>
	 <title>TC Advisor</title>
	 <meta charset="utf-8">
	 <link href="site.css" rel="stylesheet">
   <script src="jquery.js"></script>
   <script src="liste_utilisateurs.js"></script>
  </head>
   <?php
    session_start();
  
  
  if(!isset($_SESSION['login'])){
        
      echo '<div id="logging">  
      <form action="connexion.php" method="post">
		  <input type="text" placeholder="Mail" required name="mail">
   	  <input type="password" placeholder="Password" required name="pwd">
		  <input type="submit" value="Connexion">
      </form>
		  </div>';
      
      echo '<div id="inscript">
      <form action="inscription.php">
      <input type="submit" value="Inscription">
      </div>
      ';
      }
  else{
   echo 'Salut ';
  echo $_SESSION['login'];
  echo '<div id="deconnect">
  <form action=deconnexion.php>
  <input type="submit" value="Deconnexion">
  </div>'; 
  }
  ?>
  <body>
  
    <nav id="entete">
	    <div id="entete">
		   <h1>
       <a href="first.php" style="text-decoration:none;">TC Around the World</a>
       <img class="right" src="images/travel.png" alt="Travelling" height="150" width="250" style="float:right;margin:-40px 50px 0 20px;"/></h1>
	    </div>
    </nav>
    <nav id="nav01"></nav>
    
    
    <div id="main">	
    <nav id="menu">		
		<h2>Liste des utilisateurs inscrits sur ce site:</h2>
    <div id="myDiv"><p> Nombre d'utilisateurs inscrits sur le site: </p></div>
    <div id="myDiv2"><p> Noms des utilisateurs inscrits sur TC Advisor: </p></div>
	
    <footer id="foot01"></footer>
	 </div>
	
	<script src="script.js"></script>

</body>
</html>

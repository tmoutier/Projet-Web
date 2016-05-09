<!DOCTYPE html>
<html>
  <head>
	 <title>TC Advisor</title>
	 <meta charset="utf-8">
	 <link href="site.css" rel="stylesheet">
   <script src="jquery.js"></script>        
   <script src="liste_pays.js"></script>
  </head>
 
  <?php include("champ_connexion.php") ?>
 
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
		<h2>Bienvenue sur TC Advisor !</h2>
		<h3>sur ce site vous pouvez : </h3>
    <?php
    if(isset($_SESSION['login'])){
		echo '<a href="site_espace_personnel.php"><p>Accéder à votre espace personnel</p></a>';}
    else{
    echo 'Connectez vous pour avoir accès à votre espace personnel!';}
    ?>
    
		<p>Voir la liste des personnes parties (Départs)</p>
		<p>Rechercher un pays</p>
    <footer id="foot01"></footer>
	 </div>
	
	<script src="script.js"></script>

</body>
</html>

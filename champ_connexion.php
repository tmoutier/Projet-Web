
  <?php
    session_start();
  
  
  if(!isset($_SESSION['login'])){
        
      echo '<div id="logging">  
      <form action="site_connexion.php" method="post">
		  <input type="text" placeholder="Mail" required name="mail">
   	  <input type="password" placeholder="Password" required name="pwd">
		  <input type="submit" value="Connexion">
      </form>
		  </div>';
      
      echo '<div id="inscript">
      <form action="site_inscription.php">
      <input type="submit" value="Inscription">
      </div>
      ';
      }
  else{
   echo 'Salut ';
  echo $_SESSION['login'];
  echo '<div id="deconnect">
  <form action=site_deconnexion.php>
  <input type="submit" value="Deconnexion">
  </div>'; 
  }
  ?>
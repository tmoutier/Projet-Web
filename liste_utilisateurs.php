<?php
    
     header('Content-type:application/json');
     $db=mysql_connect('localhost','root','')
     or die ("erreur de connexion");
     mysql_select_db('projet_web',$db) or die ("Erreur : Connexion impossible � la Base de donn�es");
  
     $requete = mysql_query('SELECT * FROM utilisateur');
     $arr = array();
     while($row = mysql_fetch_assoc($requete)){
      $arr[]=$row;
      };
     
     
               
     echo json_encode($arr); 
     mysql_close($db);    
?>                                                                                                              
<?php

$db=mysql_connect('localhost','root','')
    or die ("erreur de connexion");
    mysql_select_db('projet_web',$db) or die ("Erreur : Connexion impossible la Base de données"); 

$file = 'test.txt';
$login = $_POST["login"] ;
$req = mysql_query("SELECT id_utilisateur FROM utilisateur WHERE adresse_mail_utilisateur='".$login."'");
$row = mysql_fetch_assoc($req);
$iduser = $row['id_utilisateur'];
$depart = $_POST["depart"];
$pays = $_POST["pays"];
 

$req2 = mysql_query("SELECT nom_pays FROM pays WHERE nom_pays='".$pays."'");
$req22 = mysql_num_rows($req2);
if($req22 == 0)
{
$req222 = mysql_query("INSERT INTO pays (nom_pays, id_utilisateur) VALUES ('".$pays."', '".$iduser."') ");}
file_put_contents($file, $iduser);

  
if($depart == stage){               
   $duree = $_POST["duree_stage"];
   $annee = $_POST["annee_stage"];
   $entreprise = $_POST["nom_entreprise"];
   $req4 = mysql_query("INSERT INTO entreprise (duree_stage, annee_stage, nom_entreprise) VALUES ('".$duree."', '".$annee."', '".$entreprise."')");
}
else{
     $duree = $_POST["duree_echange"];
  $annee = $_POST["annee_echange"];
  $universite = $_POST["nom_universite"];
  $langue = $_POST["langue_cours"];
  $cours = $_POST["cours_interessants"];
  $req3 = mysql_query("INSERT INTO universite (nom_universite, cours_interessants, duree_echange, langue_cours, date_echange) VALUES ('".$universite."', '".$cours."', '".$duree."', '".$langue."','".$annee."')");  
}



?>           
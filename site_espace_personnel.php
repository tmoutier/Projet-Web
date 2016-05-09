<!DOCTYPE html>
<html>
  <head>
	 <title>TC Advisor</title>
	 <meta charset="utf-8">
	 <link href="site.css" rel="stylesheet">
   <script src="jquery.js"></script>        
   <script src="liste_pays.js"></script>
  </head>
 
  <body>
     <?php session_start(); ?>
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
    <form id="contrat">   
    <input type="hidden" name="login" id="login" value="<?php echo $_SESSION['login'];?>">
    <div id="formulaire">
            <table>
               <tr>
               <td><label><strong>Pays dans lequel tu es parti :</strong></label></td>   
               <td> <input list="dropdownpays" name="pays" type="text" id="pays"> <datalist id="dropdownpays">
               </datalist> 
                         
               </tr>
               <tr>
                  <td><label for="echange_type"><strong>Tu es parti en </strong></label></td>
                  <td><form action="">
                  <input type="radio" checked="checked" name="depart" id="echange" value='echange'> Echange<br>
                  <input type="radio" name="depart" id="stage" value='stage'> Stage<br>
                  </form> 
               </td>                                
               </tr>             
          </table>
          <br>
          <br>
          <div class="stage"><table><tr><td><Strong>Durée du stage</strong></td>
          <td><SELECT name="duree_stage">
        <OPTION VALUE =""></OPTION>
				<OPTION VALUE="3">3 mois</OPTION>
				<OPTION VALUE="4">4 mois</OPTION>
				<OPTION VALUE="5">5 mois</OPTION>
        <OPTION VALUE="6">6 mois</OPTION>
        <OPTION VALUE="7">7 mois</OPTION>
        <OPTION VALUE="8">8 mois</OPTION>
        <OPTION VALUE="9">9 mois</OPTION>
        <OPTION VALUE="10">10 mois</OPTION>
        <OPTION VALUE="11">11 mois</OPTION>
        <OPTION VALUE="12">12 mois</OPTION>
        </SELECT>
        </td>
        </tr>
         <tr><td><Strong>Année du stage</strong></td>
          <td><SELECT name="annee_stage">
        <OPTION VALUE =""></OPTION> 
				<OPTION VALUE="2016">2016</OPTION>
				<OPTION VALUE="2017">2017</OPTION>
				<OPTION VALUE="2018">2018</OPTION>
        <OPTION VALUE="2019">2019</OPTION>
        <OPTION VALUE="2020">2020</OPTION>
        <OPTION VALUE="2021">2021</OPTION>
        <OPTION VALUE="2022">2022</OPTION>
        </SELECT>
        </td>
        </tr>
        <tr><td>   <label for="nom_entreprise"><strong>Nom de l'entreprise </strong></label></td>
                  <td>
                     <input type="text"  name="nom_entreprise" id="nom_entreprise"/>
                  </td> 
                  </tr>
          
          </table> </div>
           <div class="echange"><table><tr><td><Strong>Durée de l'échange</strong></td>
          <td><SELECT name="duree_echange">
        <OPTION VALUE =""></OPTION>
				<OPTION VALUE="3">3 mois</OPTION>
				<OPTION VALUE="4">4 mois</OPTION>
				<OPTION VALUE="5">5 mois</OPTION>
        <OPTION VALUE="6">6 mois</OPTION>
        <OPTION VALUE="7">7 mois</OPTION>
        <OPTION VALUE="8">8 mois</OPTION>
        <OPTION VALUE="9">9 mois</OPTION>
        <OPTION VALUE="10">10 mois</OPTION>
        <OPTION VALUE="11">11 mois</OPTION>
        <OPTION VALUE="12">12 mois</OPTION>
        </SELECT>
        </td>
        </tr>
         <tr><td><Strong>Année de l'échange</strong></td>
          <td><SELECT name="annee_echange">
        <OPTION VALUE =""></OPTION>
				<OPTION VALUE="2016">2016</OPTION>
				<OPTION VALUE="2017">2017</OPTION>
				<OPTION VALUE="2018">2018</OPTION>
        <OPTION VALUE="2019">2019</OPTION>
        <OPTION VALUE="2020">2020</OPTION>
        <OPTION VALUE="2021">2021</OPTION>
        <OPTION VALUE="2022">2022</OPTION>
        </SELECT>
        </td>
        </tr>
        <tr><td>   <label for="nom_universite"><strong>Nom de l'universite </strong></label></td>
                  <td>
                     <input type="text"  name="nom_universite" id="nom_universite"/>
                  </td> 
                  </tr>
            <tr><td>   <label for="langue_cours"><strong>Langue des cours </strong></label></td>
                  <td>
                     <input type="text" name="langue_cours" id="langue_cours"/>
                  </td> 
                  </tr>    
               <tr><td>   <label for="cours_interessants"><strong>Cours interessants </strong></label></td>
                  <td>
            <textarea id="cours_interessants" name="cours_interessants" rows="5" cols="70"></textarea>
                  </td> 
                  </tr>
          </table> </div>
           </div>
       
     </form>  
    <a href = accueil.php><input type="submit" value="Saisir les infos"/></a>
    <input type="button" onclick="location.replace('accueil.php');" value="Retour à l'accueil"/>
         
          
    <footer id="foot01"></footer>
	 </div>
	
	<script src="script.js"></script>
  <script src="script_hide.js"></script> 
  <script src="envoi_infos_utilisateur.js"></script>

</body>
</html>

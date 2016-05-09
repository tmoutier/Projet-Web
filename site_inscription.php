<!DOCTYPE html>
<html>
   <head>
      <title>TC Advisor</title>
      <meta charset="utf-8">
      <link href="site.css" rel="stylesheet">
      <script src="jquery.js"></script>
      <script src="tmp.js"></script>
   </head>
   <body>   
      <nav id="entete">
         <div id="entete">
            <h1>
               <a href="first.php" style="text-decoration:none;">TC Around the World</a>
               <img class="right" src="images/travel.png" alt="Travelling" height="150" width="250" style="float:right;margin:-40px 50px 0 20px;"/>
            </h1>
         </div>
      </nav>
      <nav id="nav01"></nav>
      <div id="main">
         <nav id="menu">
         <h2>Inscrivez vous sur TC Advisor!</h2>
         <div id="formulaire">
         <form action="site_invisible_inscription.php" method="post" id="form">
            <table>
               <tr>
                  <td><label for="mail"><strong>Mail : </strong></label></td>
                  <td><input type="text" required name="mail" id="mail"/>
                   </td>
                 
               </tr>
               <tr>
                  <td><label for="pass"><strong>Mot de passe : </strong></label></td>
                  <td>
                     <input type="password" required name="pwd1" id="pwd1"/>
                     <div class="tooltip">Votre mot de passe doit faire au moins 6 caractères</div>
                  </td>
               </tr>
               
            <tr>               
               <td><label for="pass"><strong>Verification Mot de passe : </strong></label></td>
               <td><input type="password" required name="pwd2" id="pwd2"/>
			   <div class="tooltip">Les mots de passe ne correspondent pas</div></td>               
            </tr>
               <tr>
                  <td><label for="prenom"><strong>Prénom : </strong></label></td>
                  <td>
                     <input type="text" required name="prenom" id="prenom"/>
                     <div class="tooltip">Votre prénom doit faire au moins 2 caractères</div>
                  </td>
               </tr>
               <tr>
                  <td><label for="nom"><strong>Nom : </strong></label></td>
                  <td>
                     <input type="text" required name="nom" id="nom"/>
                     <div class="tooltip">Votre nom doit faire au moins 2 caractères</div>
                  </td>
               </tr>
                     <tr>
			   <td><strong>Promo: </strong></td>
			   <td>
				<SELECT name="promotion">
				<OPTION VALUE="2017">2017</OPTION>
				<OPTION VALUE="2018">2018</OPTION>
				<OPTION VALUE="2019">2019</OPTION>
        <OPTION VALUE="2020">2020</OPTION>
        <OPTION VALUE="2021">2021</OPTION>
        <OPTION VALUE="2022">2022</OPTION>
				</SELECT>
			   </td>
            </tr>
               <tr>
                  <td><label for="telephone"><strong>Numéro de téléphone: </strong></label></td>
                  <td>
                     <input type="text" required name="telephone" id="telephone"/>
                
                  </td>
               </tr>
            </table>
            <br/><br/>       
            <input type="submit"  value="Enregistrer"/>   
            <input type="button" onclick="location.replace('accueil.php');" value="Retour à l'accueil"/>
         </div>
         <footer id="foot01"></footer>
      </div>
      <script src="script.js"></script>
      <script>

    function deactivateTooltips() {

        var tooltips = document.querySelectorAll('.tooltip'),
    tooltipsLength = tooltips.length;

        for (var i = 0; i < tooltipsLength; i++) {
            tooltips[i].style.display = 'none';
        }

    }


    // La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input

    function getTooltip(elements) {

        while (elements = elements.nextSibling) {
            if (elements.className === 'tooltip') {
                return elements;
            }
        }

        return false;

    }
    var check = {}; // On met toutes nos fonctions dans un objet littéral
  
    check['pwd1'] = function () {

        var pwd1 = document.getElementById('pwd1'),
    tooltipStyle = getTooltip(pwd1).style;

        if (pwd1.value.length >= 6) {
            pwd1.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            pwd1.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }

    };
	check['pwd2'] = function()
	{
		var pwd1 = document.getElementById('pwd1'),
			pwd2 = document.getElementById('pwd2'),
			tooltipStyle = getTooltip(pwd2).style;
			 
		if(pwd1.value == pwd2.value && pwd2.value != '')
		{
			pwd2.className = 'correct';
			tooltipStyle.display = 'none';
			return true;
		}
		else
		{
			pwd1.className = 'incorrect';
			tooltipStyle.display = 'inline-block';
			return false;
		}
	};

    check['prenom'] = function (id) {

        var name = document.getElementById(id),
    tooltipStyle = getTooltip(name).style;

        if (name.value.length >= 2) {
            name.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            name.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }

    };

    check['nom'] = function (id) {

        var name = document.getElementById(id),
    tooltipStyle = getTooltip(name).style;

        if (name.value.length >= 2) {
            name.className = 'correct';
            tooltipStyle.display = 'none';
            return true;
        } else {
            name.className = 'incorrect';
            tooltipStyle.display = 'inline-block';
            return false;
        }

    };
	


   
    (function () { // Utilisation d'une IIFE pour éviter les variables globales.

        var myForm = document.getElementById('myForm'),
    inputs = document.querySelectorAll('input[type=text], input[type=password]'),
    inputsLength = inputs.length;

        for (var i = 0; i < inputsLength; i++) {
            inputs[i].addEventListener('keyup', function (e) {
                check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
            }, false);
        }

        myForm.addEventListener('submit', function (e) {

            var result = true;

            for (var i in check) {
                result = check[i](i) && result;
            }

            if (result) {
                alert('Le formulaire est bien rempli.');
            }

            e.preventDefault();

        }, false);

        myForm.addEventListener('reset', function () {

            for (var i = 0; i < inputsLength; i++) {
                inputs[i].className = '';
            }

            deactivateTooltips();

        }, false);

    })();


    // Maintenant que tout est initialisé, on peut désactiver les "tooltips"

    deactivateTooltips();
	</script>
   </body>
</html>
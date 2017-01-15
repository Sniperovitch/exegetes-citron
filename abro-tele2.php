<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("../poivre/pad2doc/compile-abro-tele2.sh");
}
?>
<!DOCTYPE html>
<html lang="fr-fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exégètes - Presse à Citron</title>

    <!-- Bootstrap -->
    <!-- <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1 class="app titre">MA Abrogation Tele2</h1>

    <div class="métadonnées">
      <span class="heading">Dossier</span>
      <a href="abroretention/" class="dossier" id="abroretention">Abrogation rétention des données</a>
    </div>

    <div class="éditer">
	<form>
	<div class="form-group">
	    <label for="projetPadPrincipal">Pad principal:</label>
	    <input type="url" class="form-control" id="projetPadPrincipal" placeholder="https://pad.exegetes.eu.org/" value="https://pad.exegetes.eu.org/group.html/17/pad.html/g.DSXI1kGFT1gjor66$Abro-REP-Tele2-Principal">
	</div>
	<div class="form-group">
	    <label for="projetPadGarde">Page de garde:</label>
	    <input type="url" class="form-control" id="projetPadGarde" placeholder="https://pad.exegetes.eu.org/" value="https://pad.exegetes.eu.org/group.html/17/pad.html/g.DSXI1kGFT1gjor66$Abro-REP-Tele2-Garde">
	</div>
	<div class="form-group">
	    <label for="projetPadAutre1">Autre pad: <a href="#">Ajouter</a></label>
	    <input type="url" class="form-control hidden" id="projetPadAutre1" placeholder="https://pad.exegetes.eu.org/">
	</div>
	<div class="actions"> 
	    <a href="?run=true" type="submit" class="bouton presse">Presser</button>
	</div>
	</form>
    </div>

    <div class="ressources">
    <h3>Télécharger</h3>
      <a class="pdf" href="http://citron.exegetes.eu.org/abroretention/abro-tele2.pdf">PDF</a>
      <a class="docx" href="http://citron.exegetes.eu.org/abroretention/abro-tele2.docx">Docx</a>
      <a class="html5" href="http://citron.exegetes.eu.org/abroretention/abro-tele2.html">HTML</a>
      <a class="txt" href="http://citron.exegetes.eu.org/abroretention/abro-tele2.txt">Texte</a>
    </div>
    
    <nav class="projets dossiers">
      <span class="heading">Projets</span>
      <a href="#" class="ajouter">Nouveau</a>
      <a href="abro-tele2.html">MA Abrogation Tele2</a>
      <a href="#">MA REP TES</a>

      <a href="index.html" class="vers-index">Revenir à l'index des dossiers</a>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap3/js/bootstrap.min.js"></script>
  </body>
</html>

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
  <body id="index">
    <h1>Presse à Citron</h1>

    <p class="bievenue">
      Choisis un projet ou bien <a href="#ajouter">ajoute un nouveau projet</a> !
    </p>

    <div class="éditer" id="ajouter">
	<form>
	<div class="form-group">
	    <label for="projetNom">Nom du projet:</label>
	    <input type="url" class="form-control" id="projetPadPrincipal" placeholder="Projet de mémoire">
	</div>
	<div class="form-group">
	    <label for="projetId">Identifiant:</label>
	    <input type="url" class="form-control" id="projetPadGarde" placeholder="(automatiquement suggéré en fonction du nom)">
	</div>
	<div class="form-group">
	    <label for="projetDossier">Dossier: <a href="ajout-dossier.html">(Nouveau dossier ?)</a></label>
	    <select name="dossier" id="dossiers" multiple="" class="form-control input-lg select2 select2-offscreen" tabindex="-1">
		<option value="abroretention">Abrogation de la rétention des données</option>
		<option value="tes">Fichier TES</option>
		<option value="orangefail">#OrangeFail</option>
		<option value="prishield">Privacy Shield</option>
	    </select>
	</div>
	<div class="actions"> 
	    <button type="submit" class="bouton">Ajouter</button>
	</div>
	</form>
    </div>

    <nav class="dossiers">
    <h2>Liste des dossiers</h2>
      <a href="abroretention/" class="selectionné">Abrogation de la rétention des données</a>
    </nav>
    
    <nav class="projets">
      <span class="heading">Projets</span>
      <a href="#" class="ajouter">Nouveau</a>
      <a href="abro-tele2.php">MA Abrogation Tele2</a>
      <a href="#">MA REP TES</a>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap3/js/bootstrap.min.js"></script>
  </body>
</html>

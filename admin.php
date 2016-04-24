<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

		<title>FindTweet</title>

		<meta name="description" content="Site web permettant de consulter un fil d'actualité et de rechercher parmi celui-ci."/>
		<meta name="author" content="Marc-Antoine" />

		<link rel="shortcut icon" href="img/favicon.png">

	<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<!-- connect.css -->
		<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<!-- FONTS -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />
	<!-- JS -->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/list.js"></script>
	

	</head>
	<body>
<?php session_start(); ?>
<?php include('verifconnect.php'); ?>

<!-- 		Reprise de l'html 		-->
		<header>
			<h1>FindTweet</h1>
			<div id="login">
					Utilisateur : <span><?php echo $username ?></span>
				<a href="index.php">
					<button type="button" value="index">Accueil</button>
				</a>
				<a href="disconnect.php">
					<button type="button" value="disconnect">Se Déconnecter</button>
				</a>
			</div>
		</header>

<!--	
	/************************/
	/*		AJOUT 			*/
	/************************/
-->
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
	
		<div class="ajout">
			
		<div class="row">
		<div class="col-xs-12">
					
			<h1>Administration</h1>
			<h2>Ajout d'articles</h2>
					
			<form action="ajout.php" name="ajout" role="form" class="form-horizontal" method="post" accept-charset="utf-8">

				<div class="form-group">
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
						<input name="titre" placeholder="Titre de l'article" class="form-control" type="text" id="UserTitle" required/>
					</div>
				</div> 
				
				<div class="form-group">
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
						<textarea name="texte" placeholder="Contenu de votre article" class="form-control" id="UserText" rows="4" cols="50"></textarea>
					</div>
				</div> 
				
				<div class="form-group">
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
						<input name="img" class="form-control" type="file" id="UserFiles" multiple/>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
						<select name="categorie" size="7" multiple required>
  							<option value="musique">Musique</option>
  							<option value="informatique">Informatique</option>
  							<option value="art">Art</option>
  							<option value="actualite">Actualité</option>
  							<option value="politique">Politique</option>
  							<option value="science">Science</option>
  							<option value="people">People</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-2 col-md-8 col-md-offset-2">
						<textarea name="tags" placeholder="tag1 &#59; tag2 &#59; tag3" class="form-control" id="UserTag" rows="1" cols="50"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-0 col-md-5">
						<input name="valider" class="btn btn-success btn btn-success" type="submit" value="Envoi"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-5">
						<input  class="btn btn-success btn btn-success" type="reset" value="Reset"/>
					</div>
				</div>
			</form>
		</div>
		</div>
		
		</div>

		</div>
		</div>
		</div>


<?php include('afficher.php'); ?>
	</body>
</html>
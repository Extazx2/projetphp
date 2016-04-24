<html>
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

		<title>FindTweet</title>

		<meta name="description" content="Site web permettant de consulter un fil d'actualité et de rechercher parmi celui-ci."/>
		<meta name="author" content="Marc-Antoine" />

		<link rel="shortcut icon" href="img/favicon.png">

	<!--	/////////		CSS 		////////		-->	
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--	/////////		JS 			////////		-->	
		<script src="js/list.js"></script>
	

	</head>
	<body>
<?php session_start(); 
	
	if($_SESSION['logged'] == false){
		echo "<header>
				<div class=\"col-xs-12\">
				<div class=\"main\">
				<div class=\"row\">
					<div class=\"col-xs-6 col-sm-6 col-sm-offset-1\">
						<h1>FindTweet</h1>
						<div id=\"login\" class=\"col-xs-6\">
						<a href=\"connect.php\">
							<button type=\"button\" value=\"connect\">Connexion</button>
						</a>
						<a href=\"register.php\">
							<button type=\"button\" value=\"register\" >S'enregistrer</button>
						</a>
						</div>
					</div>
				</div>
				</div>
				</div>
		</header>";
	}elseif ($_SESSION['logged'] == true){
		echo "<header>
			<h1>FindTweet</h1>
			<div id=\"login\">
					Utilisateur : <span>".$_SESSION['username']."</span>
				<a href=\"admin.php\">
					<button type=\"button\" value=\"admin\">Administration</button>
				</a>
				<a href=\"disconnect.php\">
					<button type=\"button\" value=\"disconnect\">Se Déconnecter</button>
				</a>
			</div>
		</header>";
	}
?>
	<?php include('afficher.php'); ?>

	</body>
</html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FindTweet | Enregistrement</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Enregistrement à FindTweet">
		<meta name="author" content="Marc-Antoine" />

	<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<!-- connect.css -->
		<link rel="stylesheet" type="text/css" href="css/connect.css" />
	<!-- FONTS -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />
	<!-- JS -->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>	
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
	
		<div class="main">
			
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-1">
					
			<a href="index.php" target="_blank"><h1>FindTweet</h1>
			<h2>Enregistrez-vous !</h2></a>
					
			<form action="admin.php" name="register" role="form" class="form-horizontal" method="post" accept-charset="utf-8">

				<div class="form-group">
					<div class="col-md-8">
						<input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername"/>
					</div>
				</div> 
				
				<div class="form-group">
					<div class="col-md-8">
						<input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/>
					</div>
				</div> 
				
				<div class="form-group">
					<div class="col-md-offset-0 col-md-8">
						<input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/>
					</div>
				</div>
			
			</form>

			<p class="credits">Déjà un compte ? <a href="connect.php" target="_blank">Connectez-vous</a>.</p>

		</div>
		</div>
		
		</div>

		</div>
		</div>
		</div>
	</body>
</html>
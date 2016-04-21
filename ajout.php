<?php
session_start();

/*if($_SESSION['logged'] == false){
	header('Refresh: 3; url=connect.php'); 
	echo "Non connecté.<br>Vous allez être redirigé vers la page de connexion dans 3 secondes.";	
}else{*/
	// recuparation des identifiants grace au form
	if (isset ($_POST['valider'])){
		if (!empty($_POST['titre']) && !empty($_POST['texte']) && $_POST['categorie']) && isset ($_POST['tags'])){
			$titre=addslashes($_POST['titre']);
			$contenu=addslashes($_POST['texte']);
			$categorie=$_POST['categorie'];
			$tags=addslashes($_POST['tags']);
			$auteur=$_SESSION['username'];

			$link = mysqli_connect("localhost", "root", "", "projetphp") or die("no CNX");

			mysqli_query($link, "INSERT INTO projet(titre, contenu, categorie, tag, auteur) VALUES('$titre', '$contenu', '$categorie', '$tags', '$auteur')");


			$login = mysqli_query($link, "SELECT * FROM projet");
			while ($res1 = mysqli_fetch_array($login)){
				echo $res1["titre"]." - ".$res1["contenu"]." - ".$res1["categorie"]." - ".$res1["tag"]."<br/>";
			}
//			var_dump($link);
//			var_dump("INSERT INTO projet(titre, contenu, categorie, tag, auteur) VALUES('$titre','$contenu','$categorie','$tags','$auteur')");

			mysqli_close($link);
			echo "job done";
			echo "<a href=\"admin.php\">
					<button type=\"button\" value=\"return\">Retour</button>
				</a>";
		}else{
			header('Refresh: 3; url=admin.php'); 
			echo "Formulaire incomplet.<br>Redirection dans 3 secondes.";
		}
	}

?>
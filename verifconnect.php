<?php
	//session_start();
	//cookie pour le retour sur la page d'accueil
	$_SESSION['logged']= false;		

	include("dbconnect.php");
	$login = mysqli_query($link, "SELECT username, password FROM login");

if(isset($_POST["username"])){
	$_SESSION['username'] = $_POST["username"];
	$_SESSION['password'] = $_POST["password"];
	echo "it works";
}elseif (!isset($_POST["username"]) && !isset($_SESSION['username'])){
	header('Refresh: 3; url=connect.php'); 
	echo "Mauvais mot de passe ou identifiant.<br>Vous allez être redirigé vers la page de connexion dans 3 secondes.";
}

	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	$connectbool = false;

while ($res1 = mysqli_fetch_array($login)){
	if($res1["username"] == $_SESSION['username']){
		if($res1["password"] == $password){
			$connectbool = true;
			$_SESSION['logged'] = true;
		}
	}
}

if($connectbool == false){
		$ajout = mysqli_query($link, "INSERT INTO login(username, password) VALUES('$username','$password')");
		echo "Vous avez bien été enregistré !";
		$_SESSION['logged'] = true;
}
	
	mysqli_free_result($login);
?>
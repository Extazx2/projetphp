<?php
$dbEdit = mysqli_connect("localhost", "root", "", "projetphp") or die("no CNX");
$requete = mysqli_query($dbEdit, "SELECT * FROM projet");
//$res = mysqli_fetch_array($requete);
while ($res = mysqli_fetch_array($requete)){
	$nom = $res["nom"]; 
	$prenom = $res["prenom"];
	echo $cpt++.' '.$nom.' '.$prenom.'<br>';
}
?>
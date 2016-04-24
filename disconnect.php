<?php
mysqli_close($link);

$_SESSION['username'] == "";
$_SESSION['password'] == "";
$_SESSION['logged'] == false;

header('Refresh: 3; url=index.php');
echo "Vous avez bien été déconnecté ! Redirection vers la page d'accueil.";
?>
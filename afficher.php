<?php
	$dbAffiche = mysqli_connect("localhost", "root", "", "projetphp") or die("no CNX");
	$afficheCol = mysqli_query($dbAffiche, "SELECT * FROM projet");
	$afficheTab = mysqli_query($dbAffiche, "SHOW columns FROM projet");


	echo "<div id=\"articles\">
			<section id=\research\">
				<input class=\"search\" placeholder=\"Search\"/>";
	while ($afftab = mysqli_fetch_array($afficheTab)){								// on crée des boutons de tri en fct des champs de la table
		echo "		<button class=\"sort\" data-sort=\"".$afftab['Field']."\">
    				Trier par ".$afftab['Field']."
  					</button>
			</section>";
	}

	echo "	<section id=\"fil\">
				<ul class=\"list\">";

	while ($affcol = mysqli_fetch_array($afficheCol)){
			echo "	<li>
						<h3 class=\"titre\">".$affcol['titre']."</h3>
						<h4 class=\"auteur\">par ".$affcol['auteur']."</h4>
						<p class=\"contenu\">".$affcol['contenu']."</p>
						<br>
						<p class=\"categorie\">".$affcol['catégorie']."</p>
						<p class=\"tags\">".$affcol['tag']."</p>
						<img src=\"../img/img".$affcol['id']."/>
					</li>";
	}
	echo "		</ul>
			</section>
		</div>";

	mysqli_free_result($afficheCol);
	mysqli_free_result($afficheTab);
	mysqli_close($dbAffiche);
?>
<?php
	$link = mysqli_connect("localhost", "root", "", "projetphp") or die("no CNX");
	$afficheCol = mysqli_query($link, "SELECT * FROM projet");
	$afficheTab = mysqli_query($link, "SHOW columns FROM projet");
	$afficheComms = mysqli_query($link, "SELECT * FROM comments");

	var_dump($afficheTab);
	var_dump($afficheCol);
	var_dump($afficheComms);


	echo "<div id=\"articles\">
			<section id=\research\">
				<input class=\"search\" placeholder=\"Search\"/>
				<br/>";
	while ($afftab = mysqli_fetch_array($afficheTab)){								// on crée des boutons de tri en fct des champs de la table
		echo "		<button class=\"sort\" data-sort=\"".$afftab['Field']."\">
    				Trier par ".$afftab['Field']."
  					</button>";
	}

	echo "	</section>
			<section id=\"fil\">
				<ul class=\"list\">";

	while ($affcol = mysqli_fetch_array($afficheCol)){
			echo "	<li>
						<h3 class=\"titre\">".$affcol['titre']."</h3>
						<h4 class=\"auteur\">par ".$affcol['auteur']."</h4>
						<p class=\"contenu\">".$affcol['contenu']."</p>
						<br>
						<p class=\"categorie\">".$affcol['categorie']."</p>
						<p class=\"tags\">".$affcol['tag']."</p>";

			if($affcol['imgurl'] != ''){
					echo"<img src=\"../img/img".$affcol['idarticle']."png/>";
			}
			echo "</li>";
			while ($affcoms = mysqli_fetch_array($afficheComms)){
				echo "Commentaires :<br/>
					<li>
						<h5 class =\"pseudo\">".$affcoms['pseudo']."</h5>"
			}
	}
	echo "		</ul>
			</section>
		</div>";

	mysqli_free_result($afficheCol);
	mysqli_free_result($afficheTab);
	mysqli_close($link);
?>
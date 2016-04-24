<script src="js/sorttable.js"></script>
<?php
	
	include("dbconnect.php");
	$afficheCol = mysqli_query($link, "SELECT * FROM projet");
	$afficheTab = mysqli_query($link, "SHOW columns FROM projet");
	$afficheComms = mysqli_query($link, "SELECT * FROM comments ");

	/*var_dump($afficheTab);
	var_dump($afficheCol);
	var_dump($afficheComms);*/


	/*echo "<div id=\"articles\">
			<section id=\research\">
				<input class=\"search\" placeholder=\"Search\"/>
				<br/>";
	while ($afftab = mysqli_fetch_array($afficheTab)){								// on crée des boutons de tri en fct des champs de la table
		echo "		<button class=\"sort\" data-sort=\"".$afftab['Field']."\">
    				Trier par ".$afftab['Field']."
  					</button>";
	}*/
	echo "<div id=\"articles\">";
	echo "	<section id=\"fil\">
				<table class=\"sorttable\">";

	while ($affcol = mysqli_fetch_array($afficheCol)){
			echo "	<tr>
						<th class=\"titre\">".$affcol['titre']."</th>
						<td class=\"auteur\">par ".$affcol['auteur']."</td>
						<td class=\"contenu\">".$affcol['contenu']."</td>
						<br/>
						<td class=\"categorie\">".$affcol['categorie']."</td>
						<td class=\"tags\">".$affcol['tag']."</td>";

			if(isset($affcol['imgurl']) && !empty($affcol['imgurl'])){
					echo"<td><img src=\"../img/img".$affcol['idarticle']."png/><td>";
			}
			echo "	</tr>
					<tr></tr>
					<tr>
						<td>_______________<br/>
							<a href=\"comment.php\">Ajouter un commentaire ?</a> 
						</td>
					</tr>";
			while ($affcoms = mysqli_fetch_array($afficheComms)){
				echo "<tr>
						<th>Commentaires :<br/></th>
						<td class =\"pseudo\">".$affcoms['pseudo']."</td>
						<td class =\"contenu\">".$affcoms['contenu']."</td>
					</tr><br/>";

			}
	}
	echo "		</table>
			</section>
		</div>";

	mysqli_free_result($afficheCol);
	mysqli_free_result($afficheTab);
?>
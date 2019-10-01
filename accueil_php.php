<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Accueil PHP </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section id="accueil_php">
				<div>
					<img src="images/web_png.png" alt="Dessin d'ordinateur" />
				</div>

				<div class="menu_php">
					<h1> Où souhaitez-vous aller ? </h1>
					<nav>
						<ul>
							<li> <a href="memento_php.php"> <span class="m">M</span>émento PHP </a> </li>
							<li> <a href="sessions_cookies_php.php"> <span class="s">S</span>ession et cookies </a> </li>
							<li> <a href="lire_ecrire_fichier_php.php"> <span class="l">L</span>ire et écrire dans un fichier </a> </li>
							<li> <a href="lire_ecrire_donnees_php.php"> <span class="l">L</span>ire et écrire dans la BDD </a> </li>
							<li> <a href="fonctions_dates_sql_php.php"> <span class="f">F</span>onctions et dates SQL </a> </li>
							<li> <a href="creer_images_php.php"> <span class="c">C</span>réer des images en PHP </a> </li>
							<li> <a href="expr_regulieres_php.php"> <span class="e">E</span>xpressions régulières </a> </li>
						</ul>
					</nav>
				</div>
			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
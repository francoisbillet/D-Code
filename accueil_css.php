<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style.css" />
		<title> Accueil CSS </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section id="accueil_css">
				<div>
					<img src="images/web_png.png" alt="Dessin d'ordinateur" />
				</div>

				<div class="menu_css">
					<h1> Où souhaitez-vous aller ? </h1>
					<nav>
						<ul>
							<li> <a href="memento_css.php"> <span class="m">M</span>émento des propriétés CSS </a> </li>
							<li> <a href="complements_css.php"> <span class="c">C</span>ompléments aux propriétés CSS </a> </li>
							<li> <a href="media_queries_css.php"> <span class="m">M</span>edia queries </a> </li>
							<li> <a href="effets_avances_css.php"> <span class="e">E</span>ffets avancés en CSS </a> </li>
						</ul>
					</nav>
				</div>
			</section>

			<?php include("footer.php"); ?>

		</div>

	</body>
</html>
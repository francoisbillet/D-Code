<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Accueil HTML </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section id="accueil_html">
				<div>
					<img src="images/web_png.png" alt="Dessin d'ordinateur" />
				</div>

				<div class="menu_html">
					<h1> Où souhaitez-vous aller ? </h1>
					<nav>
						<ul>
							<li> <a href="memento_html.php"> <span class="m">M</span>émento des balises HTML </a> </li>
							<li> <a href="formulaires_html.php"> <span class="f">F</span>ormulaires </a> </li>
							<li> <a href="audio_video_html.php"> <span class="a">A</span>udio et vidéo </a> </li>
						</ul>
					</nav>
				</div>
			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
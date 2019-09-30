<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> &lt;D/Code </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section id="section_accueil">
				<a href="accueil_html.php">
					<div id="html">
						<h1> HTML </h1>
						<p> Le HTML est le langage de balisage conçu pour représenter les pages web. Il permet de structurer sémantiquement et logiquement et de mettre en forme le contenu de ses pages </p>
					</div>
				</a>

				<a href="accueil_css.php">
					<div id="css">
						<h1> CSS </h1>
						<p> Le CSS décrit la présentation des documents HTML. Il va compléter le HTML pour placer les éléments de la page, modifier les couleurs, polices, bordures, etc </p>
					</div>
				</a>

				<a href="accueil_js.php">
					<div id="javascript">
						<h1> JavaScript </h1>
						<p> JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs avec l'utilisation de Node.js </p>
					</div>
				</a>

				<a href="accueil_php.php">
					<div id="php">
						<h1> PHP </h1>
						<p> PHP est principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. </p>
					</div>
				</a>
			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
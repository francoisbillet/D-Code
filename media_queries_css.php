<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Media Queries CSS </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<div>
				<h1 class="titre_css"> Media Queries </h1>

				<section>
					<p> Les media queries sont des règles à appliquer pour changer le design d'un site en fonction des caractéristiques de l'écran. C'est à dire pour rendre un site <strong>responsive</strong>. </p>

					<p> Les media queries ne concernent pas que les résolutions d'écran, mais aussi le type d'écran (smartphone, télévision, projecteur...), le nombre de couleurs, l'orientation de l'écran, etc. </p>
				</section>

				<section>
					<h2> Appliquer une media query </h2>

					<p> Il y a deux façons d'utiliser les media queries : </p>
					<ul>
						<li> en chargeant une feuille de style différente en fonction de la condition (exemple: si la résolution est inférieure à 1280px)
						<p> Pour cela, il faut rajouter un attribut <kbd>media</kbd> à la balise <kbd>&lt;link /&gt;</kbd>. On dit qu'on fait une "requête de media" (<em>media query</em> en anglais). <br />
						Au final, on peut proposer plusieurs fichiers CSS : un par défaut et un ou deux autres qui seront chargés si la condition correspondante s'applique. </p> </li> 

						<li> en écrivant la règle directement dans le fichier css habituel (conseillé)
						<p> Dans ce cas, on écrit la règle dans le fichier css. <br />
						Par exemple : <code> @media screen and (max-width: 1280px) { } </code> </p> </li>
					</ul>

				</section>

				<section>
					<h2> Les règles disponibles </h2>

					<p> Il existe de nombreuses règles permettant de construire des media queries : </p>
					<ul>
						<li> <kbd>color</kbd> : gestion de la couleur (en bits/px) </li>
						<li> <kbd>height</kbd> : hauteur de la zone d'affichage (fenêtre) </li>
						<li> <kbd>width</kbd> : largeur de la zone d'affichage (fenêtre) </li>
						<li> <kbd>device-height</kbd> : hauteur du périphérique </li>
						<li> <kbd>device-width</kbd> : largeur du périphérique </li>
						<li> <kbd>orientation</kbd> : orientation du périphérique (portrait ou paysage) </li>
						<li> <kbd>media</kbd> : type d'écran de sortie. Quelques valeurs possibles :
							<ul>
								<li> <kbd>screen</kbd> : écran "classique" </li>
								<li> <kbd>handheld</kbd> : périphérique mobile (seul Opera Mobile reconnaît cette valeur...) </li>
								<li> <kbd>print</kbd> : impression </li>
								<li> <kbd>tv</kbd> : télévision </li>
								<li> <kbd>projection</kbd> : projecteur </li>
								<li> <kbd>all</kbd> : tous les types d'écran </li>
							</ul>
						</li>
					</ul>

					<p> On peut rajouter le préfixe <kbd>min-</kbd> ou <kbd>max-</kbd> devant la plupart de ces règles. <br />
					Les règles peuvent être combinées à l'aide des mots suivants :
						<ul>
							<li> <kbd>only</kbd> : uniquement </li>
							<li> <kbd>and</kbd> : et </li>
							<li> <kbd>not</kbd> : non </li>
						</ul>
					</p>
				</section>

				<section>
					<h2> Mise en pratique </h2>

					<p> Dans la pratique, il peut être intéressant de rendre la largeur (<kbd>width</kbd>) du bloc_page à la valeur <kbd>auto</kbd> lorsque celle-ci dépasse un certain seuil. <br />
					Cela permet à la page d'occuper tout l'espace disponible et donc d'éviter l'apparition des barres de défilement horizontales sur les petites résolutions. </p>

					<p> Il peut aussi être judicieux d'enlever une bannière (qui prend beaucoup de place) lorsque la résolution d'écran est faible. <br />
					Pour cela, il faut utiliser la propriété <kbd>display</kbd> et donner la valeur <kbd>none</kbd>. </p>
				</section>

				<section>
					<h2> Media Queries et navigateurs mobiles </h2>

					<p> Les navigateurs mobiles, qui ne font que quelques centaines de pixels de large, "dézooment" le site pour donner un aperçu de l'ensemble de la page. <br />
					La zone d'affichage simulée est appelée le <strong>viewport</strong> : c'est la largeur de la fenêtre du navigateur sur le mobile </p>

					<p> Si on utilise <kbd>max-width</kbd> en ciblant un mobile, celui-ci va comparer la largeur indiquée avec celle de son viewport. Le problème, c'est que chaque navigateur mobile a un viewport différent :
						<ul>
							<li> Opera Mobile : 850px </li>
							<li> iPhone Safari : 980px </li>
							<li> Android : 800px </li>
							<li> Windows Phone : 1024px </li>
						</ul>

					Il est alors intéressant d'utiliser <kbd>max-device-width</kbd> qui est la largeur du périphérique, plutôt que <kbd>max-width</kbd>. <br />
					Les périphériques mobiles ne dépassent pas 480px. </p>

					<p> Pour viser les mobiles : <code> @media all and (max-device-width: 480px) </code> </p>

					<p> Il est possible de modifier la largeur viewport du navigateur mobile avec une balise <kbd>meta</kbd> à insérer dans l'en-tête (<kbd>&lt;head&gt;</kbd>) du document :
						<code> &lt;meta name="viewport" content="width=320" /&gt; </code> 
					</p>

					<p> Enfin, on peut utiliser la balise <kbd>&lt;meta&gt;</kbd> pour modifier la façon dont le contenu de la page s'organise sur les mobiles. <br />
					Pour obtenir un rendu facile à lire, sans zoom, on peut demander à ce que le viewport soit le même que la largeur de l'écran :
						<code> &lt;meta name="viewport" content="width=device-width" /&gt; </code>
					</p>
				</section>
			</div>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
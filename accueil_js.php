<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Accueil JS </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<script>
				// const nb = Number(prompt("Entrez un nombre :"));
				function direBonjour(prenom) {
					return `Bonjour ${prenom}`;
				}
				console.log(direBonjour("Suzie"));
				// alert("Bonjour " + prenom);
			</script>

			<p> <kbd>\n</kbd> permet d'ajouter un retour à la ligne dans une chaîne. <br />
				<kbd>+</kbd> est l'opérateur de concaténation des chaînes. <br />
				<kbd>//</kbd> pour un commentaire sur une ligne, <kbd>/* */</kbd> pour un commentaire sur plusieurs lignes. </p>

			<p> type <strong>number</strong> pour représenter une valeur numérique. </p>

			<p> JavaScript est un langage à <strong>typage dynamique</strong> car on ne définit pas le type d'une variable (il peut changer au fur et à mesure). Le C ou Java sont des langages à <strong>typage statique</strong>. </p>

			<p> On déclare une variable avec <kbd>let</kbd> ou <kbd>var</kbd>. Avec <kbd>let</kbd>, la variable a une portée de type bloc. <br />
			On définit une constante avec <kbd>const</kbd>, qui a une portée de type bloc aussi.
			</p>

			<p> On peut inclure des expressions dans un string en utilisant les backticks <kbd> ` `</kbd>. Une telle chaîne est appelée <strong>modèle de libellé</strong> ou <strong>template literal</strong>. A l'intérieur, les expressions sont indiquées par la syntaxe <kbd>${expression}</kbd>. </p>

			<p> On peut forcer la conversion d'une valeur dans un autre type avec <kbd>Number()</kbd> et <kbd>String()</kbd>. <br />
			NaN = Not a number </p>

			<p> Quelques fonctions :
				<ul>
					<li><kbd>prompt(string)</kbd> : affiche une boîte de dialogue </li>

				</ul>
			</p>

			<p> Opérateur d'égalité : <kbd>===</kbd>. Opérateur de différence : <kbd>!==</kbd>. </p>

			<p> Une fonction qui ne renvoie pas de valeur est parfois appelée une <strong>procédure</strong>. <br />
			Voir ce qu'est une fonction anonyme (expression de fonction, fonction fléchée) et comment l'écrire ? </p>

			<p> Une fonction qui fait plus de 20 lignes peut soulever la question de la décomposition en sous-fonctions. </p>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
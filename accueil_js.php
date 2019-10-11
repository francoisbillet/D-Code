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

			<section id="accueil_js">
				<div>
					<img src="images/web_png.png" alt="Dessin d'ordinateur" />
				</div>

				<div class="menu_js">
					<h1> Où souhaitez-vous aller ? </h1>
					<nav>
						<ul>
							<li> <a href="dom_js.php"> <span class="d">D</span>OM </a> </li>
							<li> <a href="evenements_js.php"> <span class="e">É</span>vènements </a> </li>
							<li> <a href="formulaires_js.php"> <span class="f">F</span>ormulaires </a> </li>
							<li> <a href="http_ajax_json_js.php"> <span class="h">H</span>TTP, AJAX, JSON </a> </li>
						</ul>
					</nav>
				</div>
			</section>

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
					<li><kbd>prompt(string[, valeur préremplie])</kbd> : affiche une boîte de dialogue </li>

				</ul>
			</p>

			<p> Opérateur d'égalité : <kbd>===</kbd>. Opérateur de différence : <kbd>!==</kbd>. </p>

			<p> Une fonction qui ne renvoie pas de valeur est parfois appelée une <strong>procédure</strong>. <br />
			Voir ce qu'est une fonction anonyme (expression de fonction, fonction fléchée) et comment l'écrire ? </p>

			<p> Une fonction qui fait plus de 20 lignes peut soulever la question de la décomposition en sous-fonctions. </p>

			<h2> Javascript et les objets </h2>

			<p> Création d'un objet stylo à bille bleu : </p>
<pre><code>const stylo = {
  type: "bille",
  couleur: "bleu",
  marque: "Bic"
};
</code></pre> 

			<p> On accède aux propriétés avec <kbd>stylo.type</kbd> ou <kbd>stylo.couleur</kbd>. <br />
			On modifie un objet avec <kbd>stylo.couleur = "rouge"</kbd> par exemple. <br />
			On peut même ajouter de nouvelles propriétés sans les avoir créées : <kbd>stylo.prix = "2.5"</kbd> par exemple. </p>

			<p> Méthode -> propriété ayant pour valeur une fonction : </p>

<pre><code>const aurora = {
  nom: "Aurora",
  sante: 150,
  force: 25,

  // Renvoie la description du personnage
  decrire() {
    return `${this.nom} a ${this.sante} points de vie et ${this.force} en force`;
  }
};

// "Aurora a 150 points de vie et 25 en force"
console.log(aurora.decrire());
</code></pre>

			<h2> Les tableaux </h2>

			<p> En JS, on peut stocker dans un tableau des éléments de types différents : <br />
				<code> const tableau = ["Bonjour", 7, { message: "Coucou maman" }, true]; </code>
			</p>

			<p> <kbd>tableau.length</kbd> pour la taille de tableau. </p>

<pre><code>const films = ["Le loup de Wall Street", "Vice-Versa", "Babysitting"];

films.forEach(film => {
  console.log(film);
});
</code></pre>

<p> ou encore </p>

<pre><code>const films = ["Le loup de Wall Street", "Vice-Versa", "Babysitting"];

for (const film of films) {
  console.log(film);
}
</code></pre>

			<p> <kbd>films.push("Les Bronzés")</kbd> pour ajouter un élément à la fin d'un tableau. <br />
				<kbd>films.unshift("Les Bronzés")</kbd> pour ajouter un élément au début d'un tableau. <br />
				<kbd>films.pop()</kbd> pour supprimer le dernier élément d'un tableau. <br />
				<kbd>films.splice(0,2)</kbd> pour supprimer 2 élément à partir de l'indice 0 du tableau.
			</p>

			<h2> Les chaînes de caractères </h2>

			<p> <kbd>\n</kbd> définit un retour à la ligne. </p>

			<p> <kbd>mot.toLowerCase()</kbd> et <kbd>mot.toUpperCase()</kbd> pour mettre respectivement en minuscules et en majuscules. <br />
				Crée une nouvelle chaîne. Une chaîne créée en JS est <strong>immuable</strong> (ne peut plus être modifiée). 
			</p>

			<p> On compare avec l'opérateur <kbd>===</kbd>. Comparer avec <kbd>==</kbd> est déconseillé en JS. </p>

			<p> La méthode <kbd>Array.from(string)</kbd> permet de transformer un String en tableau, qui peut être parcouru avec la méthode <kbd>forEach()</kbd>. <br />
				La méthode <kbd>indexOf(string)</kbd> prend en paramètre la sous-chaîne recherchée et renvoie l'indice de sa première occurence ou sinon -1. <br />
				Les méthodes <kbd>startsWith(string)</kbd> et <kbd>endsWith(string)</kbd> renvoient un booléen en fonction de la présence ou non du string en début ou fin de chaîne. <br />
				La méthode <kbd>split(séparateur)</kbd> décompose un string et renvoie un tableau contenant les sous-parties.
			</p>

			<h2> POO </h2>

			<p> Créer une classe : </p>

<pre><code>class Personnage {
  constructor(nom, sante, force) {
    this.nom = nom;
    this.sante = sante;
    this.force = force;
    this.xp = 0; // Toujours 0 au début
  }
  decrire() {
    return `${this.nom} a ${this.sante} points de vie, ${
      this.force
    } en force et ${this.xp} points d'expérience`;
  }
}

const aurora = new Personnage("Aurora", 150, 25);
const glacius = new Personnage("Glacius", 130, 30);

// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience"
console.log(aurora.decrire());
// "Glacius a 130 points de vie, 30 en force et 0 points d'expérience"
console.log(glacius.decrire());
</code></pre>

			<p> En plus des propriétés particulières, tout objet JavaScript possède une propriété interne appelée <strong>prototype</strong>. Il s'agit d'un lien (on parle de référence) vers un autre objet : </p>

<pre><code>const unObjet = { a: 2 };

// Crée unAutreObjet avec unObjet comme prototype
const unAutreObjet = Object.create(unObjet);

console.log(unAutreObjet.a); // 2
</code></pre>

			<p> Contrairement au Java, Javascript est basé sur les prototypes et non sur les classes. <strong>Une classe JavaScript est elle-même un objet</strong>, pas un modèle statique (fonctionnement assez proche du Python, Ruby ou Smalltalk). </p>

			<p> Même si la POO reste très employée à l'heure actuelle, il est tout àfait possible de combiner l'utilisation d'objets et de simples fonctions au sein d'un même programme, voire de ne pas utiliser du tout d'objets ! </p> 
			

			<h2> Animer les pages </h2>

			<p> <kbd>setInterval(fonction, intervalle)</kbd> permet d'appeler la fonction passée en paramètre à intervalles réguliers. Le délai est exprimé en millisecondes. </p>

			<p> <kbd>clearInterval(id)</kbd> permet de stopper une exécution répétée. Elle prend en paramètre l'identifiant de l'action, renvoyée par la fonction <kbd>setInterval</kbd>. </p>

			<p> <kbd>setTimeout(fonction, délai)</kbd> permet d'exécuter une fonction une seule fois après un certain délai, exprimé en millisecondes. </p>

			<p> La fonction <kbd>requestAnimationFrame(animer)</kbd> permet de demander au navigateur d'exécuter dès que possible une fonction qui met à jour une animation. Le navigateur va optimiser la mise à jour de manière à la rendre fluide. <br />
				Voilà comment utiliser <kbd>requestAnimationFrame</kbd> en combinaison avec une fonction d'animation : </p>

<pre><code>function animer() {
    // ...
    requestAnimationFrame(animer);
}
requestAnimationFrame(animer);
</code></pre>

			<p> A savoir : ne pas utiliser <kbd>Number</kbd> pour convertir une chaîne contenant "px" en valeur numérique: cela ne fonctionne pas et le résultat renvoyé sera <kbd>NaN</kbd>. </p>

			<p> La fonction <kbd>cancelAnimationFrame(id)</kbd> permet de stopper une animation. Elle prend en paramètre l'identifiant de l'animation : </p>

<pre><code>var bloc = document.getElementById("bloc");
var cadre = document.getElementById("cadre");
var vitesse = 7; 
var largeurBloc = parseFloat(getComputedStyle(bloc).width);
var animationId = null; 

function deplacerBloc() {
    var xBloc = parseFloat(getComputedStyle(bloc).left);
    var xMax = parseFloat(getComputedStyle(cadre).width);
    if (xBloc + largeurBloc <= xMax) {
        bloc.style.left = (xBloc + vitesse) + "px";
        animationId = requestAnimationFrame(deplacerBloc);
    } else {
        cancelAnimationFrame(animationId);
    }
}
animationId = requestAnimationFrame(deplacerBloc); // Début de l'animation
</code></pre>

			<p> Les animations avec CSS sont plus efficaces du point de vue des performances, mais elles ne permettent pas de tout faire. </p>

			<p> Comment choisir la technique entre <kbd>setInterval</kbd>, <kbd>requestAnimationFrame</kbd> et CSS pour effectuer une animation ? </p>

			<ul>
				<li> <kbd>setInterval</kbd> : si l'animation n'est pas en temps réel et doit simplement se produire à intervalles réguliers </li>
				<li> CSS : si l'animation est en temps réel et qu'elle peut être effectuée avec CSS </li>
				<li> <kbd>requestAnimationFrame</kbd> : pour tous les autres cas </li>
			</ul>
			

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
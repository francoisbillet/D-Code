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

			<h2> le DOM (Document Object Model) </h2>

			<p> Le DOM définit la structure d'une page et le moyen d'intéragir avec elle : il s'agit d'une interface de programmation, ou API (Application Programming Interface). </p>

			<p> La variable <kbd>document</kbd> correspond à l'élément <kbd>&lt;html&gt;</kbd>. <br />
				<kbd>document.head</kbd> et <kbd>document.body</kbd> permettent d'accéder aux objets head et body du DOM. 
			</p>

			<p> Chaque objet du DOM a une propriété <kbd>nodeType</kbd> qui indique son type. La valeur est <kbd>document.ELEMENT_NODE</kbd> pour un noeud "élément" (balise HTML) et <kbd>document.TEXT_NODE</kbd> pour un noeud textuel.
			</p>

			<p> Chaque objet du DOM de type élément possède une propriété <kbd>childNodes</kbd>. Ce n'est pas un véritable tableau JS, mais on peut l'utiliser comme tel. <br />
				Le premier enfant du noeud <kbd>body</kbd> (<kbd>document.body.childNodes[0]</kbd>) est un noeud textuel à cause des espaces et retours à la ligne qui sont considérés pas le navigateur comme des noeuds textuels. 
			</p>

			<p> Chaque objet du DOM possède une propriété <kbd>parentNode</kbd> qui renvoie son noeud parent sous la forme d'un objet DOM. <br />
				La valeur de <kbd>parentNode</kbd> du noeud racine (la variable <kbd>document</kbd>) est null. 
			</p>

			<p> Propriétés <kbd>firsChilt</kbd>, <kbd>lastChild</kbd>, <kbd>nextSibling</kbd> </p>

			<p> <kbd>console.error()</kbd> pour afficher une erreur dans la console (plutôt que <kbd>console.log()</kbd>). </p>

			<h2> Parcourir le DOM </h2>

			<p> <kbd>document.getElementsByTagName("h2")</kbd> renvoie la liste des h2 de la page. <br />
				La recherche s'effectue sur l'ensemble des sous-éléments du nœud sur lequel la méthode est appelée, et pas seulement ses enfants directs. <br />
				C'est une bonne pratique de faire en sorte que les variables stockant des éléments du DOM finissent par <kbd>Elts</kbd> pour "éléments". Si la variable no stocke qu'un seul élément du DOM, elle se terminera par <kbd>Elt</kbd>.
			</p>

			<p> <kbd>document.getElementsByClassName(string)</kbd>renvoie la liste des éléments ayant le nom de classe passé en paramètre. <br />
				La recherche s'effectue sur l'ensemble des sous-éléments du nœud sur lequel la méthode est appelée, et pas seulement ses enfants directs.
			</p>

			<p> <kbd>document.getElementById(string)</kbd> renvoie l'élément possédant l'identifiant passé en paramètre. </p>

			<p> <kbd>document.querySelectorAll("#contenu p")</kbd> renvoie tous les paragraphes à l'intérieur de l'élément identifié par "contenu". </p>

			<p> <kbd>document.querySelector("p")</kbd> fonctionne de la même manière mais renvoie uniquement le premier élément correspondant au sélecteur passé en paramètre. </p>

			<p> Quelle méthode de selection choisir ? <br />
				Il faut savoir que les méthodes <kbd>querySelectorAll</kbd> et <kbd>querySelector</kbd> sont <strong>beaucoup moins performantes</strong> que les méthodes <kbd>getElementsByTagName</kbd>, <kbd>getElementsByClassName</kbd> et <kbd>getElementById</kbd>. </p>

			<p> Voilà une approche pragmatique pour choisir la méthode :
				<table>
					<thead>
						<tr>
							<th>Nombre d'éléments à obtenir</th>
							<th>Critère de sélection</th>
							<th>Méthode à utiliser</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Plusieurs</td>
							<td>Par balise</td>
							<td><kbd>getElementsByTagName</kbd></td>
						</tr>
						<tr>
							<td>Plusieurs</td>
							<td>Par classe</td>
							<td><kbd>getElementsByClassName</kbd></td>
						</tr>
						<tr>
							<td>Plusieurs</td>
							<td>Autre que par balise ou par classe</td>
							<td><kbd>querySelectorAll</kbd></td>
						</tr>
						<tr>
							<td>Un seul</td>
							<td>Par identifiant</td>
							<td><kbd>getElementById</kbd></td>
						</tr>
						<tr>
							<td>Un seul (le premier)</td>
							<td>Autre que par identifiant</td>
							<td><kbd>querySelector</kbd></td>
						</tr>
					</tbody>
				</table>
			</p>

			<p> La propriété <kbd>innerHTML</kbd> permet de récupérer tout le contenu HTML d'un élément du DOM. <br />
				La propriété <kbd>textContent</kbd> renvoie tout le contenu textuel d'un élément du DOM, sans l'éventuel balisage HTML. 
			</p>

			<p> La méthode <kbd>getAttribute(attribut)</kbd> renvoie la valeur de l'attribut passé en paramètre. <br />
				La méthode <kbd>hasAttribute(attribut)</kbd> permet de vérifier la présence d'un attribut sur un élement. <br />
				A savoir : certains attributs sont directement accessibles sous la forme de propriétés, comme <kbd>id</kbd>, <kbd>href</kbd> et <kbd>value</kbd>.
			</p>

			<p> La propriété <kbd>classList</kbd> permet de récupérer la liste des classes d'un élément du DOM. Elle s'utilise comme un tableau. <br />
				On peut aussi tester la présence d'une classe dans un élément avec la méthode <kbd>contains</kbd> sur la liste des classes : <br />
				<code>if (document.getElementById("antiques").classList.contains("merveille"))</code>
			</p>

			<h2> Modifier la structure de la page </h2>

			<p> On peut utiliser la propriété <kbd>innerHTML</kbd> pour modifier le contenu HTML d'un élément du DOM (opérateur <kbd>+=</kbd>. <br />
				<kbd>innerHTML</kbd> est souvent employé pour "vider" un élément de tout son contenu. <br />
				Afin de préserver la lisibilité du code et d'éviter les erreurs, on réserve l'utilisation d'<kbd>innerHTML</kbd> à de petites modifications.
			</p>

			<p> On peut utiliser la propriété <kbd>textContent</kbd> pour modifier le contenu textuel d'un élément du DOM (opérateur <kbd>+=</kbd>). </p>

			<p> La méthode <kbd>element.setAttribute(attribut,valeur)</kbd> permet de définir la valeur de l'un des attributs d'un élément. <br />
				On pourrait aussi écrire <kbd>element.id = "titre"</kbd>
			</p>

			<p> On peut utiliser la propriété <kbd>classList</kbd> pour ajouter ou supprimer des classes à un élément du DOM. Pour ajouter : <kbd>element.classList.add(classe)</kbd> et pour supprimer : <kbd>element.classList.remove(classe)</kbd>.
			</p>

			<p> L'ajout d'un nouvel élément à une page web peut se décomposer en 3 opérations :
				<ul> 
					<li> création du nouvel élément avec <kbd>document.createElement("li")</kbd> </li>
					<li> définition des informations de l'élément </li>
					<li> insertion du nouvel élément dans le DOM avec <kbd>elementParent.appendChild(element)</kbd> (par exemple) </li>
				</ul>
			</p>

			<p> Exemple : </p>

<pre><code>var pythonElt = document.createElement("li"); // Création d'un élément li
pythonElt.id = "python"; // Définition de son identifiant
pythonElt.textContent = "Python"; // Définition de son contenu textuel
document.getElementById("langages").appendChild(pythonElt); // Insertion du nouvel élément
</code></pre>

			<p> On peut aussi utiliser <kbd>document.createTextNode(string)</kbd> au lieu de <kbd>element.textContent</kbd>. </p>

			<p> On peut ajouter un noeud avant un autre noeud (alors qu'avec <kbd>appendChild</kbd> c'est à la fin) avec <kbd>elementParent.insertBefore(element, elementSuivant)</kbd> </p>

			<p> La méthode <kbd>elementParent.insertAdjacentHTML(position, string)</kbd>, plus récente, permet de définir plus précisément la position de l'élément inséré. La position du nouveau contenu doit être une valeur parmi :
				<ul>
					<li><kbd>beforebegin</kbd> : avant l'élément existant lui-même</li>
					<li><kbd>afterbegin</kbd> : juste à l'intérieur de l'élément existant, avant son premier enfant</li>
					<li><kbd>beforeend</kbd> : juste à l'intérieur de l'élément existant, après son dernier enfant</li>
					<li><kbd>afterend</kbd> : après l'élément existant lui-même</li>
				</ul>
			</p>

			<p> La méthode <kbd>elementParent.replaceChild(element, elementaRemplacer)</kbd> permet de remplacer un noeud enfant de l'élément courant par un autre noeud. </p>

			<p> La méthode <kbd>elementParent.removeChild(element)</kbd> permet de supprimer un noeud. </p>

			<p> Il est conseillé de limiter au nécessaire le nombre d'opérations de manipulation du DOM car elles peuvent ralentir l'affichage de la page. <br />
				La création et la modification des nouveaux éléments <strong>avant</strong> leur insertion dans le DOM est une bonne pratique pour préserver les performances au maximum. 
			</p>

			<h2> Donner du style aux éléments </h2>

			<p> La propriété <kbd>element.style.color</kbd> (ou margin, padding, etc.) permet de modifier le style de l'élément. <br />
				Si la propriété s'écrit sous la forme d'un nom composé, comme font-family ou background-color, il faut supprimer le tiret et écrire la première lettre du mot suivant en majuscule (norme <strong>camelCase</strong>) : <kbd>element.style.fontFamily</kbd> ou <kbd>element.style.backgroundColor</kbd>.
			</p>

			<p> La propriété <kbd>style</kbd> représente l'attribut style de l'élément. Elle ne permet pas d'accéder aux déclarations de style situées dans une feuille de style CSS. </p>

			<p> On utilise donc la fonction <kbd>getComputedStyle(element)</kbd> pour accéder au style d'un élément. Elle renvoie un objet représentant son style. </p>

			<h2> Les évènements </h2>

			<p> La méthode <kbd>element.addEventListener(type, fonction)</kbd> pour ajouter un gestionnaire pour un évènement particulier. Cette méthode prend en paramètre le type de l'évènement et la fonction qui gère l'évènement. </p>

			<p> Exemple avec une fonction anonyme : </p>

<pre><code>var boutonElt = document.getElementById("bouton");
boutonElt.addEventListener("click", function () {
    console.log("clic");
});
</code></pre>

			<p> Pour supprimer un gestionnaire d'évènement sur un élément du DOM, il faut appeler la méthode <kbd>element.removeEventListener(type, fonction)</kbd>. <br />
				Pour pouvoir utiliser cette méthode, il faut que la fonction qui gère l'évènement n'ait <strong>pas été définie de manièr eanonyme</strong>.
			</p>

			<p> Les principales catégories d'évènements sont :
				<ul>
					<li> Évènements clavier : appui ou relâchement d'une touche du clavier </li>
					<li> Évènements souris : clic, appui ou relâchement d'un bouton, survol d'une zone </li>
					<li> Évènements fenêtre : chargement ou fermeture de la page, redimensionnement, défilement (<em>scrolling</em>) </li>
					<li> Évènements formulaire : changement de cible de saisie (<em>focus</em>), envoi d'un formulaire </li>
				</ul>
			</p>

			<p> Le déclenchement d'un évènement s'accompagne de la création d'un objet <kbd>Event</kbd>. <br />
				La propriété <kbd>type</kbd> de l'objet <kbd>Event</kbd> renvoie le type et <kbd>target</kbd> renvoie la cible, c'est à dire l'élément du DOM auquel l'évènement est destiné.
			</p>

<pre><code>document.getElementById("bouton").addEventListener("click", function (e) {
    console.log("Evènement : " + e.type + ", texte de la cible : " + e.target.textContent);
});
</code></pre>

			<h2> Gestion des évènements les plus courants </h2>

			<h3> Appui sur une touche du clavier </h3>

			<p> Les évènements de type <kbd>keypress</kbd> correspondent à l'appui sur une touche du clavier. </p>

<pre><code>document.addEventListener("keypress", function (e) {
    console.log("Vous avez appuyé sur la touche " + String.fromCharCode(e.charCode));
});
</code></pre>

			<p> La propriété <kbd>charCode</kbd> de l'objet <kbd>Event</kbd> donne la valeur numérique (valeur <strong>Unicode</strong> du caractère). <br />
				La méthode <kbd>String.fromCharCode(number)</kbd> permet de traduire la valeur en un String. 
			</p>

			<p> Pour gérer l'appui et le relâchement sur n'importe quelle touche du clavier (pas seulement celles qui produisent des caractères), on utilise les évènements <kbd>keydown</kbd> et <kbd>keyup</kbd>. </p>

<pre><code>function infosClavier(e) {
    console.log("Evènement clavier : " + e.type + ", touche : " + e.keyCode);
}

document.addEventListener("keydown", infosClavier);
document.addEventListener("keyup", infosClavier);
</code></pre>

			<p> On constate que l'ordre de déclenchement des évènements clavier est : <kbd>keydown</kbd> -> <kbd>keypress</kbd> -> <kbd>keyup</kbd>. </p>

			<h3> Click sur un bouton de la souris </h3>

			<p> Les évènements de type <kbd>click</kbd> correspondent au clic de la souris. <br />
				Dans le cas d'une interface tactile (tablette, smartphone), l'évènement <kbd>click</kbd> associé à un bouton est déclenché par l'appui avec les doigt sur ce bouton.
			</p>

			<p> La propriété <kbd>button</kbd> permet de connaître le bouton de la souris utilisé, ainsi que des propriétés <kbd>clientX</kbd> et <kbd>clientY</kbd> qui renvoient les coordonnées horizontales et verticales de l'endroit où le clic s'est produit. <br />
				Ces coordonnées sont définies par rapport à de la page <strong>actuellement affichée</strong> par le navigateur contrairement aux propriétés <kbd>pageX</kbd> et <kbd>pageY</kbd>.
			</p>

<pre><code>function getBoutonSouris(code) {
    var bouton = "inconnu";
    switch (code) {
    case 0: // 0 est le code du bouton gauche
        bouton = "gauche";
        break;
    case 1: // 1 est le code du bouton du milieu
        bouton = "milieu";
        break;
    case 2: // 2 est le code du bouton droit
        bouton = "droit";
        break;
    }
    return bouton;
}

function infosSouris(e) {
    console.log("Evènement souris : " + e.type + ", bouton " +
        getBoutonSouris(e.button) + ", X : " + e.clientX + ", Y : " + e.clientY);
}

document.addEventListener("click", infosSouris);
</code></pre>

			<p> Comme pour les évènements clavier, on peut utiliser les évènement <kbd>moudown</kbd> et <kbd>mouseup</kbd> pour détecter l'appui et le relâchement d'un bouton de la souris.
			</p>

			<p> On constante que l'ordre de déclenchement des évènement souris est : <kbd>mousedown</kbd> -> <kbd>mouseup</kbd> -> <kbd>click</kbd>. </p>

			<h3> Fin du chargement de la page web </h3>

			<p> Il est possible de détecter la fin du chargement de la page avec l'évènement <kbd>load</kbd> sur l'objet <kbd>window</kbd>. Cela permet d'éviter d'intéragir via JS avec des parties de la page non encore chargées : </p>

<pre><code>window.addEventListener("load", function () {
    console.log("Page entièrement chargée");
});
</code></pre>

			<h3> Fermeture de la page web </h3>

			<p> On peut afficher une demande de confirmation (par exemple) lorsque l'utilisateur ferme l'onglet de la page web ou navigue vers une autre page avec <kbd>beforeunload</kbd> sur l'objet <kbd>window</kbd> : </p>

<pre><code>window.addEventListener("beforeunload", function (e) {
    var message = "On est bien ici !";
    e.returnValue = message; // Provoque une demande de confirmation (standard)
    return message; // Provoque une demande de confirmation (certains navigateurs)
});
</code></pre>

			<p> En théorie, c'est la modification de la propriété <kbd>returnValue</kbd> qui suspend la fermeture de la page et provoque l'apparition de la boîte de dialogue affichant la valeur de la propriété. Cependant, certains nivagateurs se basent sur la valeur de retour de la fonction qui gère l'évènement. <br />
				Le code ci-dessus associe les deux techniques et fonctionne quel que soit le navigateur utilisé.
			</p>

			<h3> Aller plus loin </h3>

			<p> Les évènements déclenchés sur un noeud enfant vont se déclencher ensuite sur son noeud parent, etc. jusqu'à la racine du DOM (la variable <kbd>document</kbd>). C'est ce qu'on appelle la <strong>propagation</strong> des évènements. </p>

			<p> Cette propagation peut être interrompue à tout moment en appelant la méthode <kbd>stopPropagation</kbd> sur l'objet <kbd>Event</kbd> depuis une fonction qui gère un évènement. <br />
				C'est utilse pour éviter qu'un même évènement soit géré plusieurs fois.
			</p>

			<p> Il est possible d'annuler le comportement par défaut des évènements (ex: clic sur un lien -> navigation, clic bouton droit -> menu contextuel) avec la méthode <kbd>preventDefault</kbd> sur l'objet <kbd>Event</kbd>. <br />
				Sans une raison valable, il est fortement déconseillé de modifier le comportement standard des éléments de la page.
			</p>

			<h2> Manipuler les formulaires </h2>

			<h3> Les zones de texte </h3>

			<p> On accède à la valeur d'une zone de texte avec la propriété <kbd>value</kbd> de l'élément du DOM correspondant. <br />
			Ceci va remplir le champ pseudo de "MonPseudo : </p>

<pre><code>var pseudoElt = document.getElementById("pseudo");
pseudoElt.value = "MonPseudo";
</code></pre>

			<p> Lorsqu'une zone de texte est la clible de saisie, on dit que cette zone possède le <strong>focus</strong>. <br />
				L'utilisateur qui clique sur une zone de saisie déclenche l'apparition d'un évènement de type <kbd>focus</kbd>.<br />
				Inversement, le changement de cible de saisie provoque l'apparition d'un évènement de type <kbd>blur</kbd> sur l'ancienne zone qui avait le focus.
			</p>

<pre><code>pseudoElt.addEventListener("focus", function () {
    document.getElementById("aidePseudo").textContent = "Entrez votre pseudo";
});

pseudoElt.addEventListener("blur", function (e) {
    document.getElementById("aidePseudo").textContent = "";
});
</code></pre>

			<p> Le fonctionnement des zones de texte multiligne (balises <kbd>&lt;textarea&gt;</kbd>) est similaire à celui des balises <kbd>&lt;input&gt;</kbd>. </p>

			<h3> Les cases à cocher </h3>

			<p> Ces éléments déclenchent un évènement de type <kbd>change</kbd> lorsque l'utilisateur modifie son choix. <br />
				Lorsque la case change de valeur, l'objet <kbd>Event</kbd> associé à l'évènement dispose d'une propriété booléenne <kbd>checked</kbd> qui indique le nouvel état de la case (cochée/décochée).
			</p>

<pre><code>document.getElementById("confirmation").addEventListener("change", function (e) {
    console.log("Demande de confirmation : " + e.target.checked);
});
</code></pre>

			<h3> Les boutons radio </h3>

			<p> Lors d'un changement de valeur d'un groupe de boutons radio, la propriété <kbd>e.target.value</kbd> de l'évènement <kbd>change</kbd> contient la valeur de l'attribut <kbd>value</kbd> de la nouvelle balise <kbd>&lt;input&gt;</kbd> sélectionnée. </p>

<pre><code>var aboElts = document.getElementsByName("abonnement");
for (var i = 0; i < aboElts.length; i++) {
    aboElts[i].addEventListener("change", function (e) {
        console.log("Formule d'abonnement choisie : " + e.target.value);
    });
}
</code></pre>

			<h3> Les listes déroulantes </h3>

			<p> Comme pour les boutons radio, la propriété <kbd>e.target.value</kbd> de l'évènement <kbd>change</kbd> contient la valeur de l'attribut <kbd>value</kbd> de la balise <kbd>&lt;option&gt;</kbd> associée au nouveau choix, et non pas le texte affiché dans la liste déroulante. </p>

<pre><code>document.getElementById("nationalite").addEventListener("change", function (e) {
    console.log("Code de nationalité : " + e.target.value);
});
</code></pre>

			<h2> Formulaire comme élément du DOM </h2>

			<p> La balise <kbd>&lt;form&gt;</kbd> de formulaire possède une propriété <kbd>element</kbd> rassemblant les champs de saisie du formulaire. On peut l'utiliser pour accéder à un champ à partir de son nom (attribut <kbd>name</kbd>) ou à partir de son indice dans l'ordre d'apparition dans le formulaire : </p>

<pre><code>var form = document.querySelector("form");
console.log("Nombre de champs de saisie : " + form.elements.length); // Affiche 10
console.log(form.elements[0].name); // Affiche "pseudo"
console.log(form.elements.mdp.type); // Affiche "password"
</code></pre>

			<p> En règle générale, la soumission du formulaire se traduit par l'envoi de ses données à la ressource identifiée par l'attribut <kbd>action</kbd> de la balise <kbd>&lt;form&gt;</kbd>. Mais avant cela, un évènement de type <kbd>submit</kbd> est déclenché. On peut donc accéder aux données du formulaire avant leur envoi, et on peut même annuler l'envoi ultérieur des données en appelant la méthode <kbd>preventDefault</kbd> sur l'objet <kbd>Event</kbd> associé à l'évènement. </p>

			<h2> Validation des données saisies </h2>

			<p> Contrôler les données saisies par l'utilisateur avant de les envoyer à un serveur est l'un des grands intérêts de l'utilisation de JavaScript avec les formulaires web. Ainsi, on peut signaler immédiatement d'éventuelles erreurs de saisie et on évite également des allers-retours réseau coûteux en temps. </p>

			<p> Le contrôle de validité peut se faire de plusieurs manières, éventuellement combinables :
				<ul>
					<li> au fur et à mesure de la saisie d'une donnée </li>
					<li> à la fin de la saisie d'une donnée </li>
					<li> au moment où l'utilisateur soumet le formulaire </li>
				</ul>
				Cette dernière technique consiste simplement à ajouter des vérifications dans le gestionnaire des évènements <kbd>submit</kbd> sur le formulaire.
			</p>

			<h4> Validation pendant la saisie </h4>

			<p> Cette validation repose sur l'exploitation des évènements <kbd>input</kbd>, qui se déclenchent sur une zone de saisie à chaque fois que sa valeur est modifiée : </p>

<pre><code>document.getElementById("mdp").addEventListener("input", function (e) {
    var mdp = e.target.value; 
    var longueurMdp = "faible";
    var couleurMsg = "red"; 
    if (mdp.length >= 8) {
        longueurMdp = "suffisante";
        couleurMsg = "green"; 
    } else if (mdp.length >= 4) {
        longueurMdp = "moyenne";
        couleurMsg = "orange"; 
    }
    var aideMdpElt = document.getElementById("aideMdp");
    aideMdpElt.textContent = "Longueur : " + longueurMdp; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
});
</code></pre>

			<h4> Validation à la fin de la saisie </h4>

			<p> La fin de la saisie dans une zone de texte correspond à la perte du focus par cette zone, ce qui déclenche l'apparition d'un évènement de type <kbd>blur</kbd>. <br />
				Pour vérifier la présence du caractère <kbd>@</kbd> dans le courriel :

<pre><code>document.getElementById("courriel").addEventListener("blur", function (e) {
    var validiteCourriel = "";
    if (e.target.value.indexOf("@") === -1) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});
</code></pre>

			<h3> Utilisation d'une expression régulière </h3>

			<p> On définit une expression régulière en JS en plaçant son motif entre deux caractères <kbd>/</kbd>. La variable ainsi créée est un objet. Sa méthode <kbd>test</kbd> permet de comparer le regex au string passé en paramètre et renvoie un booléen. </p>

			<table>
				<thead>
					<tr>
						<th> Motif </th>
						<th> Correspondance </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> <kbd>abc</kbd> </td>
						<td> contient "abc" </td>
					</tr>
					<tr>
						<td> <kbd>[abc]</kbd> </td>
						<td> contient soit "a", soit "b", soit "c" </td>
					</tr>
					<tr>
						<td> <kbd>[a-z]</kbd> </td>
						<td> contient n'importe quelle lettre minuscule </td>
					</tr>
					<tr>
						<td> <kbd>[0-9]</kbd> ou <kbd>\d</kbd> </td>
						<td> contient un chiffre </td>
					</tr>
					<tr>
						<td> <kbd>a.c</kbd> </td>
						<td> contient "a" suivi d'un caractère suivi de "c" </td>
					</tr>
					<tr>
						<td> <kbd>a\.c</kbd> </td>
						<td> contient "a.c" </td>
					</tr>
					<tr>
						<td> <kbd>a.+c</kbd> </td>
						<td> contient "a" suivi d'un ou plusieurs caractères suivi de "c" </td>
					</tr>
					<tr>
						<td> <kbd>a.*c</kbd> </td>
						<td> contient "a" suivi de zéro ou plusieurs caractères suivi de "c" </td>
					</tr>
				</tbody>
			</table>

<pre><code>document.getElementById("courriel").addEventListener("blur", function (e) {
    var regexCourriel = /.+@.+\..+/;
    var validiteCourriel = "";
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});
</code></pre>

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

			<h2> HTTP, AJAX et JSON </h2>

			<p> Le protocole HTTP est le socle technique du Web. Il s'agit d'un protocole client/serveur qui fonctionne suivant un mécanisme requête/réponse. Les principaux types de requêtes HTTP sont <kbd>GET</kbd> (pour demander une ressource au serveur) et <kbd>POST</kbd> (pour lui envoyer des données). Une réponse HTTP contient un code indiquant le résultat de la requête : 200 pour un succès, 404 si la ressource n'a pas été trouvée, etc. </p>

			<p> Les applications web modernes interceptent les actions de l'utilisateur, lancent des requêtes HTTP <strong>asynchrones</strong> et ne mettent à jour qu'une partie de la page web avec leurs résultats. Les technologies utilisées sont regroupées sous l'acronyme <strong>AJAX</strong> (Asynchronous JavaScript And XML). <br />
				Les requêtes HTTP asynchrones utilisées avec AJAX permettent de ne pas bloquer le navigateur en attentant la réponse du seveur. <br />
				Pour des raisons de sécurité, les requêtes AJAX dites <em>cross-domain</em> entre deux domaines différents sont interdites (par défaut).
			</p>

			<p> Le format de données <strong>JSON</strong> (JavaScript Object Notation) constitue le standard actuel pour les échanges de données sur le Web, notamment avec AJAX. Il s'agit d'une syntaxe pour décrire des information structurées sous une forme proche des objets JavaScript. </p>

			<h3> Interroger un serveur Web </h3>

			<p> L'objet <kbd>XMLHttpRequest</kbd> permet de créer des requêtes HTTP en JS. <br />
				Sa méthode <kbd>open</kbd> permet de configurer la requête HTTP avant son lancement. Elle prend en paramètres le type de requête HTTP (le plus souvent <kbd>GET</kbd>, <kbd>POST</kbd> ou <kbd>PUT</kbd>), l'URL cible, ainsi qu'un booléen indiquant si la requête sera asynchrone ou non. <br />
				Sa méthode <kbd>send</kbd> envoie la requête HTTP vers l'URL cible fournie à <kbd>open</kbd>. Elle prend en paramètre l'éventuelle information envoyée au serveur (requêtes <kbd>POST</kbd> ou <kbd>PULL</kbd>), ou bien <kbd>null</kbd> dans le cas d'une requête <kbd>GET</kbd>. <br />
				Sa propriété <kbd>responseText</kbd> contient sous forme textuelle la réponse renvoyée par le serveur à la requête HTTP. 
			</p>

			<p> Lorsqu'on utilise les requêtes synchrones, il se peut que la console affiche un message d'avertissement pour rappeler au développeur qu'il est risqué d'utiliser ces requêtes-là en JavaScript car pendant toute la durée de l'échange, la page web semblera bloquée et ne répondra plus aux actions de l'utilisateur. </p>

			<p> Pour passer en mode asynchrone, on utilise les évènements. <br />
				Un évènement de type <kbd>load</kbd> indique la fin du traitement de la requête par le serveur. <br />
				La différence entre une requête synchrone et asynchrone est imperceptible pour l'utilisateur lorsque le client et serveur s'exécutent sur la même machine et que le traitement de la requête est instantané. 
			</p>

			<h3> Gestion des erreurs </h3>

			<p> On distingue deux principaux cas d'erreur :
				<ul>
					<li> La requête n'a pas réussi à atteindre le serveur (nom du serveur incorrect, erreur réseau, etc). Ces erreurs déclenchent l'apparition d'un évènement de type <kbd>error</kbd> sur la requête </li>
					<li> La requête a atteint le serveur, mais son traitement a échoué (ressource demandé non trouvée, problème interne au serveur, etc). C'est le code de retour HTTP de la requête, contenu dans sa propriété <kbd>status</kbd>, qui indique son résultat. <br />
					Un code supérieur ou égal à 200 et strictement inférieur à 400 signale la réussite de la requête </li>
				</ul>
			</p>

			<p> Voilà une fonction <strong>générique</strong> permettant d'exécuter une requête HTTP asynchrone, autrement dit un appel AJAX : </p>

<pre><code>// Exécute un appel AJAX GET
// Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès

function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(null);
}
</code></pre>
	
			<p> Cette fonction prend en paramètre l'URL cible et la fonction appelée en cas de succès de la requête. En effet, JavaScript permet de passer des fonctions en paramètre comme n'importe quelle valeur. Le terme <strong>callback</strong> utilisé ici est souvent employé pour désigner une fonction appelée ultérieurement, en réaction à un certain évènement. </p>

			<p> Pour utiliser la fonction, il suffit de l'appeler en lui donnant la cible et la fonction à utiliser : 
				<code>ajaxGet("http://localhost/javascript-web-srv/data/langages.txt", console.log);</code>
			</p>

			<p> Pour pouvoir utiliser la fonction AJAX dans plusieurs fichiers, on la définit dans un autre fichier JavaScript inclus partout où c'est nécessaire. <br />
				Le fichier <kbd>ajax.js</kbd> (contenant la fonction) doit toujours être inclus dans la page web AVANT les autres fichiers JavaScript qui utilisent les fonctions qu'il contient.
			</p>

			<h3> Appels AJAX et JSON </h3>

			<p> Transmettre des informations sous forme d'un fichier texte se révèle vite limité lorsque ces informations sont <strong>structurées</strong>. C'est pourquoi on utilise souvent le format JSON pour échanger des données entre programmes. </p>

			<p> La fonction <kbd>JSON.parse</kbd> permet de transformer une chaîne de caractères conforme au format JSON en un objet JavaScript. <br />
				La fonction <kbd>JSON.stringify</kbd> joue le rôle inverse : elle transforme un objet JavaScript en chaîne de caractères conforme au format JSON.
			</p>

			<p> La technique utilisée pour récupérer des données JSON est la même que pour un fichier texte. Seul le traitement de la réponse reçue diffère pour s'adapter au format JSON : </p>

<pre><code>ajaxGet("http://localhost/javascript-web-srv/data/films.json", function (reponse) {
    // Transforme la réponse en tableau d'objets JavaScript
    var films = JSON.parse(reponse);
    films.forEach(function (film) {
        console.log(film.titre);
    })
});
</code></pre>

			<h2> Utiliser des API web </h2>

			<p> Une <strong>API</strong> (Application Programming Interface ou inteface de programmation) est un ensemble de services offert par un logiciel à d'autres logiciels. <br />
				On appelle <strong>API web</strong> une API accessible via les technologies du Web, notamment le protocole HTTP ou sa version sécurisée HTTPS. <br />
				Bon nombre d'API web offrent aux développeurs le moyen d'exploiter leurs données et leurs services. <br />
				Une API REST est un type particulier d'API web.
			</p>

			<p> Pour pouvoir utiliser une API web, il faut connaître son adresse et son mode de fonctionnement. La plupart des API web sont accessibles via une URL et utilisent le format JSON pour les échanges de données. </p>

			<p> L'utilisation d'une API web se fait exactement comme l'interrogation d'un serveur web local. La fonction <kbd>ajaxGet</kbd> est réutilisée pour fournir le mécanisme d'appel et la gestion des erreurs. </p>

			<p> Une fois l'API web trouvée, il faut étudier sa documentation afin de découvrir comment l'utiliser ou la tester avec RESTClient (Firefox) ou Postman. </p>

			<p> Toutes les API web de sont pas accessibles librement et sans restriction. Afin de se prémunir contre d'éventuels abus, la plupart d'entre elles imposent au client qui souhaite les utiliser de s'identifier. Des limites d'utilisation peuvent s'ajouter : elles concernent le nombre d'appels par heure ou le volume de données transférées. </p>

			<p> Il existe plusieurs mécanismes pour authentifier le client d'une API. Le plus simple repose sur le principe de <strong>clé d'accès</strong> (access key). Une clé d'éccès permet d'identifier un client de manière unique. Elle se présente souvent sous la forme d'une longue série de lettres et de chiffres ajoutées dans l'URL de l'API. </p>






			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
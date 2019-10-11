<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Les évènements </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_js"> Les évènements en JavaScript </h1>

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

			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
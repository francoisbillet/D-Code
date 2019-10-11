<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Le DOM </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_js"> Le DOM (Document Object Model) </h1>

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

			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
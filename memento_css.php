<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style.css" />
		<title> Mémento des propriétés et sélecteurs CSS </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_css"> Mémento des propriétés et sélecteurs CSS </h1>

				<h2> Propriétés de mise en forme du texte </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>font-family</kbd> </td>
							<td> Nom de police </td>
							<td> <em>police1</em>, <em>police2</em>, serif, sans-serif, monospace </td>
						</tr>
						<tr> 
							<td> <kbd>@font-face</kbd> </td>
							<td> Police personnalisée </td>
							<td> Nom et source de la police </td>
						</tr>
						<tr>
							<td> <kbd>font-size</kbd> </td>
							<td> Taille du texte </td>
							<td> 1.3em, 15px, 120% </td>
						</tr>
						<tr>
							<td> <kbd>font-weight</kbd> </td>
							<td> Gras </td>
							<td> bold, normal </td>
						</tr>
						<tr>
							<td> <kbd>font-style</kbd> </td>
							<td> Italique </td>
							<td> italic, oblique, normal </td>
						</tr>
						<tr>
							<td> <kbd>text-decoration</kbd> </td>
							<td> Soulignement, ligne au-dessus, barré ou clignotant </td>
							<td> underline, overline, line-through, blink, none </td>
						</tr>
						<tr>
							<td> <kbd>font-variant</kbd> </td>
							<td> Petites capitales </td>
							<td> small-caps, normal </td>
						</tr>
						<tr>
							<td> <kbd>text-transform</kbd> </td>
							<td> Capitales </td>
							<td> capitalize, lowercase, uppercase </td>
						</tr>
						<tr>
							<td> <kbd>font</kbd> </td>
							<td> Super-propriété de police qui combine <kbd>font-weight</kbd>, <kbd>font-style</kbd>, <kbd>font-size</kbd>, <kbd>font-variant</kbd>, <kbd>font-family</kbd> </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>text-align</kbd> </td>
							<td> Alignement horizontal </td>
							<td> left, center, right, justify </td>
						</tr>
						<tr>
							<td> <kbd>vertical-align</kbd> </td>
							<td> Alignement vertical (cellules de tableau ou éléments <kbd>inline-block</kbd> uniquement) </td>
							<td> baseline, middle, sub, super, top, bottom </td>
						</tr>
						<tr>
							<td> <kbd>line-height</kbd> </td>
							<td> Hauteur de ligne </td>
							<td> 18px, 120%, normal </td>
						</tr>
						<tr>
							<td> <kbd>text-indent</kbd> </td>
							<td> Alinéa </td>
							<td> 25px </td>
						</tr>
						<tr>
							<td> <kbd>white-space</kbd> </td>
							<td> Césure </td>
							<td> pre, nowrap, normal </td>
						</tr>
						<tr>
							<td> <kbd>word-wrap</kbd> </td>
							<td> Césure forcée (à utiliser dès que le visiteur est amené à écrire) </td>
							<td> break-word, normal </td>
						</tr>
						<tr>
							<td> <kbd>text-shadow</kbd> </td>
							<td> Ombre de texte </td>
							<td> 5px 5px 2px blue (horizontale, verticale, fondu, couleur) </td>
						</tr>
						<tr>
							<td> <kbd>/* */</kbd> </td>
							<td> Commentaire </td>
							<td> </td>
						</tr>
					</tbody>
				</table>

				<h2> Propriétés de couleur et de fond </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>color</kbd> </td>
							<td> Couleur du texte </td>
							<td> nom, rgb, rgba, hexa... </td>
						</tr>
						<tr>
							<td> <kbd>background-color</kbd> </td>
							<td> Couleur de fond </td>
							<td> identique à color </td>
						</tr>
						<tr>
							<td> <kbd>background-image</kbd> </td>
							<td> Image de fond </td>
							<td> url("image.png") </td>
						</tr>
						<tr>
							<td> <kbd>background-attachment</kbd> </td>
							<td> Fond fixe </td>
							<td> fixed, scroll </td>
						</tr>
						<tr>
							<td> <kbd>background-repeat</kbd> </td>
							<td> Répétition du fond </td>
							<td> repeat-x, repeat-y, no-repeat, repeat </td>
						</tr>
						<tr>
							<td> <kbd>background-position</kbd> </td>
							<td> Position du fond </td>
							<td> (x y), top, center, bottom, left, right </td>
						</tr>
						<tr>
							<td> <kbd>background</kbd> </td>
							<td> Super-propriété du fonc qui combine <kbd>background-image</kbd>, <kbd>background-repeat</kbd>, <kbd>background-attachment</kbd>, <kbd>background-position</kbd> </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>opacity</kbd> </td>
							<td> Transparence (tout le contenu de l'élément sera transparent) </td>
							<td> 0.5 </td>
						</tr>
					</tbody>
				</table>

				<h2> Propriétés des boîtes </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>width</kbd> </td>
							<td> Largeur </td>
							<td> 150px, 80% </td>
						</tr>
						<tr>
							<td> <kbd>height</kbd> </td>
							<td> Hauteur </td>
							<td> 150px, 80% </td>
						</tr>
						<tr>
							<td> <kbd>min-width</kbd> </td>
							<td> Largeur minimale </td>
							<td> 150px, 80% </td>
						</tr>
						<tr>
							<td> <kbd>max-width</kbd> </td>
							<td> Largeur maximale </td>
							<td> 150px, 80% </td>
						</tr>
						<tr>
							<td> <kbd>min-height</kbd> </td>
							<td> Hauteur minimale </td>
							<td> 150px, 80% </td>
						</tr>
						<tr>
							<td> <kbd>max-height</kbd> </td>
							<td> Hauteur maximale </td>
							<td> 150px, 80% </td>
						</tr>
						<tr>
							<td> <kbd>margin-top</kbd> </td>
							<td> Marge en haut </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>margin-right</kbd> </td>
							<td> Marge à droite </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>margin-bottom</kbd> </td>
							<td> Marge en bas </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>margin-left</kbd> </td>
							<td> Marge à gauche </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>margin</kbd> </td>
							<td> Super-propriété de marge qui combine <kbd>margin-top</kbd>, <kbd>margin-right</kbd>, <kbd>margin-bottom</kbd>, <kbd>margin-left</kbd> </td>
							<td> 20px 5px 20px 5px (haut, droite, bas, gauche) </td>
						</tr>
						<tr>
							<td> <kbd>padding-top</kbd> </td>
							<td> Marge intérieure en haut </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>padding-right</kbd> </td>
							<td> Marge intérieure à droite </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>padding-bottom</kbd> </td>
							<td> Marge intérieure en bas </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>padding-left</kbd> </td>
							<td> Marge intérieure à gauche </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>padding</kbd> </td>
							<td> Super-propriété qui de marge intérieure qui combine <kbd>padding-top</kbd>, <kbd>padding-right</kbd>, <kbd>padding-bottom</kbd>, <kbd>padding-left</kbd> </td>
							<td> 20px 5px 20px 5px (haut, droite, bas, gauche) </td>
						</tr>
						<tr>
							<td> <kbd>border-width</kbd> </td>
							<td> Épaisseur de bordure </td>
							<td> 2px </td>
						</tr>
						<tr>
							<td> <kbd>border-color</kbd> </td>
							<td> Couleur de bordure </td>
							<td> nom, rgb, rgba, hexa... </td>
						</tr>
						<tr>
							<td> <kbd>border-style</kbd> </td>
							<td> Type de bordure </td>
							<td> solid, dotter, dashed, double, grooxe, ridge, inset, outset </td>
						</tr>
						<tr>
							<td> <kbd>border</kbd> </td>
							<td> Super-propriété de bordure qui combine <kbd>border-width</kbd>, <kbd>border-color</kbd>, <kbd>border-style</kbd>. Existe aussi en version <kbd>border-top</kbd>, <kbd>border-right</kbd>, <kbd>border-bottom</kbd>, <kbd>border-left</kbd> </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>border-radius</kbd> </td>
							<td> Bordure arrondie (courbes elliptiques : indiquer 2 valeurs séparées par un "/") </td>
							<td> 5px </td>
						</tr>
						<tr>
							<td> <kbd>box-shadow</kbd> </td>
							<td> Ombre de boîte (<kbd>inset</kbd> 5ème valeur facultative pour effet enfoncé) </td>
							<td> 5px 5px 0px black (horizontale, verticale, fondu, couleur) </td>
						</tr>
					</tbody>
				</table>

				<h2> Propriétés de positionnement et d'affichage </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>display</kbd> </td>
							<td> Type d'élément </td>
							<td> block, inline, inline block, table-cell, none... </td>
						</tr>
						<tr>
							<td> <kbd>visibility</kbd> </td>
							<td> Visibilité </td>
							<td> visible, hidden </td>
						</tr>
						<tr>
							<td> <kbd>clip</kbd> </td>
							<td> Affichage d'une partie de l'élément </td>
							<td> rect (0px, 60px, 30px, 0px) (haut, droite, bas, gauche) </td>
						</tr>
						<tr>
							<td> <kbd>overflow</kbd> </td>
							<td> Comportement en cas de dépassement </td>
							<td> auto (conseillé), scroll, visible, hidden </td>
						</tr>
						<tr>
							<td> <kbd>float</kbd> </td>
							<td> Flottant (placer le flottant en premier dans le code) </td>
							<td> left, right, none </td>
						</tr>
						<tr>
							<td> <kbd>clear</kbd> </td>
							<td> Arrêt d'un flottant </td>
							<td> left, right, both (conseillé), none </td>
						</tr>
						<tr>
							<td> <kbd>position</kbd> </td>
							<td> Positionnement </td>
							<td> relative, absolute, fixed, static </td>
						</tr>
						<tr>
							<td> <kbd>top</kbd> </td>
							<td> Position par rapport au haut </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>right</kbd> </td>
							<td> Position par rapport à la droite </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>bottom</kbd> </td>
							<td> Position par rapport au bas </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>left</kbd> </td>
							<td> Position par rapport à la gauche </td>
							<td> 20px </td>
						</tr>
						<tr>
							<td> <kbd>z-index</kbd> </td>
							<td> Ordre d'affichage en cas de superposition. La plus grande valeur est affichée par-dessus les autres </td>
							<td> 10 </td>
						</tr>
					</tbody>
				</table>

				<h2> Propriétés Flexbox </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>display</kbd> </td>
							<td> Type d'élément </td>
							<td> flex </td>
						</tr>
						<tr>
							<td> <kbd>flex-direction</kbd> </td>
							<td> Sens d'affichage </td>
							<td> row, column, row-reverse, column-reverse </td>
						</tr>
						<tr>
							<td> <kbd>flex-wrap</kbd> </td>
							<td> Retour à la ligne des blocs lorsqu'ils n'ont plus de place </td>
							<td> no-wrap, wrap, wrap-reverse </td>
						</tr>
						<tr>
							<td> <kbd>justify-content</kbd> </td>
							<td> Alignement sur l'axe principal </td>
							<td> flex-start, flex-end, center, space between, space around </td>
						</tr>
						<tr>
							<td> <kbd>align-items</kbd> </td>
							<td> Alignement sur l'axe secondaire </td>
							<td> stretch, flex-start, flex-end, center, baseline </td>
						</tr>
						<tr>
							<td> <kbd>align-self</kbd> </td>
							<td> Exception pour un seul des éléments sur l'axe secondaire </td>
							<td> flex-start, flex-end; etc. </td>
						</tr>
						<tr>
							<td> <kbd>align-content</kbd> </td>
							<td> Alignement des blocs sur plusieurs lignes </td>
							<td> flex-start, flex-end, center, space between, space around, stretch </td>
						</tr>
						<tr>
							<td> <kbd>order</kbd> </td>
							<td> Ordre des éléments </td>
							<td> 3 (éléments triés du plus petit au plus grand) </td>
						</tr>
						<tr>
							<td> <kbd>flex</kbd> </td>
							<td> Super-propriété qui combine <kbd>flex-grow</kbd> (capacité à grossir), <kbd>flex-shrink</kbd> (capacité à maigrir), <kbd>flex-basis</kbd> (taille par défaut en px) </td>
							<td> 1 1 100px </td>
						</tr>
					</tbody>
				</table>

				<h2> Propriétés des listes </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>list-style-type</kbd> </td>
							<td> Type de liste </td>
							<td> disc, circle, square, decimal, lower-roman, upper-roman, lower-alpha, upper-alpha, none </td>
						</tr>
						<tr>
							<td> <kbd>list-style-position</kbd> </td>
							<td> Position en retrait </td>
							<td> inside, outside </td>
						</tr>
						<tr>
							<td> <kbd>list-style-image</kbd> </td>
							<td> Puce personnalisée </td>
							<td> url('puce.png') </td>
						</tr>
						<tr>
							<td> <kbd>list-style</kbd> </td>
							<td> Super-propriété de liste qui combine <kbd>list-style-type</kbd>, <kbd>list-style-position</kbd>, <kbd>list-style-image</kbd> </td>
							<td> </td>
						</tr>
					</tbody>
				</table>

				<h2> Propriétés des tableaux </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>border-collapse</kbd> </td>
							<td> Fusion des bordures (appliquer des bordures aux cellules avant) </td>
							<td> collapse, separate </td>
						</tr>
						<tr>
							<td> <kbd>empty-cells</kbd> </td>
							<td> Affichage des cellules vides </td>
							<td> hide, show </td>
						</tr>
						<tr>
							<td> <kbd>caption-side</kbd> </td>
							<td> Position du titre du tableau </td>
							<td> bottom, top </td>
						</tr>
					</tbody>
				</table>

				<h2> Autres propriétés </h2>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs (exemples) </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>cursor</kbd> </td>
							<td> Curseur de souris </td>
							<td> crosshair, default,help, move, pointer, progress, text, wait, e-resize, ne-resize, auto... </td>
						</tr>
					</tbody>
				</table>

				<h2> Pseudo-classes </h2>

				<table>
					<thead>
						<tr>
							<th> Pseudo-classe </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>:hover</kbd> </td>
							<td> Au survol </td>
						</tr>
						<tr>
							<td> <kbd>:active</kbd> </td>
							<td> Au moment du clic (pas toujours visible) </td>
						</tr>
						<tr>
							<td> <kbd>:focus</kbd> </td>
							<td> Lors de la sélection (lien ou champ de formulaire) (sous Chrome et Safari, appuyer sur Tab pour le voir) </td>
						</tr>
						<tr>
							<td> <kbd>:visited</kbd> </td>
							<td> Lorsque le lien a déjà été consulté </td>
						</tr>
						<tr>
							<td> <kbd>:required</kbd> </td>
							<td> Pour changer le style des champs de formulaire requis </td>
						</tr>
						<tr>
							<td> <kbd>:invalid</kbd> </td>
							<td> Pour changer le style des champs de formulaire invalides </td>
						</tr>
						<tr>
							<td> <kbd>:nth-child(2n+1)</kbd> </td>
							<td> Cible les éléments fils 1, 3, 5, 7, etc. (on peut aussi utiliser <kbd>odd</kbd> et <kbd>even</kbd>) </td>
						</tr>
						<tr>
							<td> <kbd>:last-child</kbd> </td>
							<td> Cible l'élément qui est le dernier enfant de son parent </td>
						</tr>
					</tbody>
				</table>

				<h2> Sélecteurs </h2>

				<table>
					<thead>
						<tr>
							<th> Sélecteur </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> * </td>
							<td> Sélecteur universel </td>
						</tr>
						<tr>
							<td> h1, em </td>
							<td> Sélectionne les titres &lt;h1&gt; et les balises &lt;em&gt; </td>
						</tr>
						<tr>
							<td> h1 em </td>
							<td> Sélectionne les balises &lt;em&gt; dans les titre &lt;h1&gt; </td>
						</tr>
						<tr>
							<td> h1 + em </td>
							<td> Sélectionne la première balises &lt;em&gt; après un titre &lt;h1&gt; </td>
						</tr>
						<tr>
							<td> a[title] </td>
							<td> Sélectionne les liens &lt;a&gt; qui possèdent un attribut title </td>
						</tr>
						<tr>
							<td> a[title="valeur"] </td>
							<td> Sélectionne les liens &lt;a&gt; qui possèdent un attribut title qui a exactement la valeur indiquée </td>
						</tr>
						<tr>
							<td> a[title*="valeur"] </td>
							<td> Sélectionne les liens &lt;a&gt; qui possèdent un attribut title qui contient la valeur indiquée </td>
						</tr>
						<tr>
							<td> #devant:hover + #derriere </td>
							<td> Sélectionne le bloc #devant <strong>et</strong> le bloc #derrière lorsqu'on survole le bloc #devant (ne fonctionne que pour des blocs situés côte à côte dans le code HTML) </td>
						</tr>
					</tbody>
				</table>

				<h2> Préfixes </h2>

				<table>
					<thead>
						<tr>
							<th> Préfixe </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>-webkit</kbd> </td>
							<td> Chrome, Safari, Opera </td>
						</tr>
						<tr>
							<td> <kbd>-moz</kbd> </td>
							<td> Firefox </td>
						</tr>
					</tbody>
				</table>

				<p> A savoir : principe de l'héritage -> si on applique un style à un élément, tous les sous-éléments l'auront aussi </p>

			</section>

			<?php include("footer.php"); ?>

		</div>

	</body>
</html>
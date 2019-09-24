<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style.css" />
		<title> Effets avancés en CSS </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<div>

				<h1 class="titre_css"> Effets avancés en CSS </h1>

				<section>

				<h2> Les multi-colonnes </h2>

				<div class="journal">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet cursus metus. Nunc tortor ante, feugiat vel nunc id, semper interdum nunc. Donec blandit urna eget lacus vestibulum, id eleifend magna cursus. Sed augue mi, accumsan ut erat eu, dapibus lobortis lectus. Integer lobortis metus nisi, scelerisque consequat felis sollicitudin vitae. </p>

					<h1> Titre test </h1>

					<p> Quisque dapibus tincidunt tellus, in scelerisque mauris elementum at. Vestibulum efficitur velit sit amet diam dictum, quis dapibus risus aliquam. Quisque aliquam tincidunt ante id lobortis. Aenean consequat erat ut nibh laoreet ornare. Etiam volutpat, mi sed maximus ullamcorper, justo ligula sollicitudin nisi, in tempor odio elit efficitur risus. </p>
				</div>

				<table>
					<thead>
						<tr>
							<th> Propriété </th>
							<th> Description </th>
							<th> Valeurs </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>column-count</kbd> </td>
							<td> Nombre de colonnes </td>
							<td> 4 </td>
						</tr>
						<tr>
							<td> <kbd>column-width</kbd> </td>
							<td> Largeur des colonnes </td>
							<td> px, em (pas en %) </td>
						</tr>
						<tr>
							<td> <kbd>column</kbd> </td>
							<td> Super-propriété de column qui combine <kbd>column-count</kbd> et <kbd>column-width</kbd> </td>
							<td> 4 100px </td>
						</tr>
						<tr>
							<td> <kbd>column-gap</kbd> </td>
							<td> Espace entre 2 colonnes </td>
							<td> px, em (pas en %) </td>
						</tr>
						<tr>
							<td> <kbd>column-rule</kbd> </td>
							<td> Super-propriété qui combine les propriétés <kbd>column-rule-color</kbd>, <kbd>column-rule-width</kbd> et <kbd>column-rule-style</kbd>. Indique un liseré de séparation entre les colonnes </td>
							<td> 2px dashed black </td>
						</tr>
						<tr>
							<td> <kbd>column-span</kbd> </td>
							<td> Ecrire un texte sur plusieurs colonnes (non pris en charge par Firefox) </td>
							<td> none, all (toutes les colonnes) </td>
						</tr>
						<tr>
							<td> <kbd>break-before</kbd> </td>
							<td> Indique si on a le droit de faire un saut de colonne avant le texte </td>
							<td> auto, column, avoid-column </td>
						</tr>
						<tr>
							<td> <kbd>break-inside</kbd> </td>
							<td> Indique si on a le droit de faire un saut de colonne à l'intérieur du texte </td>
							<td> auto, column, avoid-column </td>
						</tr>
						<tr>
							<td> <kbd>break-after</kbd> </td>
							<td> Indique si on a le droit de faire un saut de colonne à l'intérieur du texte </td>
							<td> auto, column, avoid-column </td>
						</tr>
						<tr>
							<td> <kbd>hyphens</kbd> </td>
							<td> Activer la césure (non pris en charge par Chrome et Opera). Rajouter <kbd>lang="fr"</kbd> à la balise <kbd>&lt;html&gt;</kbd> </td>
							<td> auto </td>
						</tr>
					</tbody>
				</table>

				<p> A savoir : Il est conseillé de limiter la largeur des lignes de texte pour le confort des yeux (50 à 70 caractères par ligne). </p>

				<p> Générateur de faux texte : <a href="http://www.lipsum.com">lipsum.com</a> ou <a href="http://www.loripsum.net">loripsum.net</a> </p>

				</section>

				<section>

					<h2> Les dégradés... </h2>

					<h3> linéaires : </h3>

					<section class="degrades">
						<div id="linear"></div>
						<div id="linear_to_right"></div>
						<div id="linear_to_top_left"></div>
						<div id="repeating_linear"></div>
					</section>

					<ul> 
						<li> Les dégradés linéaires contiennent autant de couleurs que désiré. </li>
						<li> Le premier paramètre peut être en degrés (90deg = vers la droite), en gradians ou en radians </li>
						<li> On peut aussi faire des dégradés en jouant avec la transparence avec la notation <em>RGBa</em> </li>
						<li> On peut modifier l'espace occupé par chaque couleur en ajoutant un second paramètre à chaque couleur (en px ou %) </li>
					</ul>

					<h3> radiaux : </h3>

					<section class="degrades">
						<div id="radial_circle"></div>
						<div id="radial_right"></div>
						<div id="radial_top_left_to_bottom_right"></div>
						<div id="repeating_radial"></div>
					</section>

					<ul>
						<li> Les dégradés radiaux contiennent autant de couleurs que désiré. </li>
						<li> Ils peuvent etre <strong>circulaires</strong> (circle) ou <strong>elliptiques</strong> (ellipse) </li>
						<li> On indique à quel endroit commence le dégradé (center, top, bottom right, etc.) </li>
						<li> On peut indiquer jusqu'où va le dégradé (closest-corner, closest-side, farthest-corner, farthest-side) </li>
					</ul>

					<table>
						<thead>
							<tr>
								<th> Propriété </th>
								<th> Description </th>
								<th> Valeurs </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <kbd>linear-gradient</kbd> </td>
								<td> Dégradé linéaire (ne s'applique qu'à la propriété <kbd>background-image</kbd>) </td>
								<td> to top left, green 0%, blue 30% </td>
							</tr>
							<tr>
								<td> <kbd>repeating-linear-gradient</kbd> </td>
								<td> Dégradé linéaire qui se répète (limiter l'espace occupé par les couleurs pour le voir) </td>
								<td> white, green 100px </td>
							</tr>
							<tr>
								<td> <kbd>radial-gradient</kbd> </td>
								<td> Dégradé radial (ne s'applique qu'à la propriété <kbd>background-image</kbd>) </td>
								<td> circle at center, white, green </td>
							</tr>
							<tr>
								<td> <kbd>repeating-radial-gradient</kbd> </td>
								<td> Dégradé radial qui se répète (limiter l'espace occupé par les couleurs pour le voir) </td>
								<td> white, green 100px </td>
							</tr>
						</tbody>
					</table>

				</section>

				<section>

					<h2> Les transformations 2D </h2>

					<section class="deuxd">
						<div> <img src="images/montgolfiere.jpg" alt="2 montgolfieres" id="rotate" /> </div>
						<div> <img src="images/montgolfiere.jpg" alt="2 montgolfieres" id="origin" /> </div>
						<div> <img src="images/montgolfiere.jpg" alt="2 montgolfieres" id="scale" /> </div>
						<div> <img src="images/montgolfiere.jpg" alt="2 montgolfieres" id="translate" /> </div>
						<div> <img src="images/montgolfiere.jpg" alt="2 montgolfieres" id="skewX" /> </div>
						<div> <img src="images/montgolfiere.jpg" alt="2 montgolfieres" id="skewY" /> </div>
					</section>

					<p> Toutes les transformations se déclarent avec le propriété <kbd>transform</kbd>. Cette propriété n'est pas reconnue par Safari, qui a donc besoin du préfixe <kbd>-webkit-</kbd>. <br />
					Voilà les différentes valeurs que peut prendre <kbd>transform</kbd> :

					<ul>
						<li> <kbd>rotate(10deg)</kbd> pour faire pivoter l'objet </li>
						<li> <kbd>origin(0 0)</kbd> pour modifier l'origine de la transformation (px ou %) </li>
						<li> <kbd>scale(1.3)</kbd> pour agrandir ou rétrécir l'élément </li>
						<li> <kbd>scale(1.3,0.6)</kbd> pour agrandir sur l'axe des X et rétrécir sur l'axe des Y </li>
						<li> <kbd>scaleX(1.3)</kbd> pour agrandir ou rétrécir sur l'axe des X </li>
						<li> <kbd>scaleY(0.6)</kbd> pour agrandir ou rétrécir sur l'axe des Y </li>
						<li> <kbd>translate(30px,90px)</kbd> pour déplacer un élément (valeurs négatives possibles) (fonctionne comme position: relative) </li>
						<li> <kbd>translateX(30px)</kbd> pour déplacer un élément sur l'axe des X </li>
						<li> <kbd>translateY(90px)</kbd> pour déplacer un élément sur l'axe des Y </li>
						<li> <kbd>skewX(20deg)</kbd> pour "étirer" un des côtés du bloc sur l'axe des X (valeurs négatives possibles) </li>
						<li> <kbd>skewY(20deg)</kbd> pour "étirer" un des côtés du bloc sur l'axe des Y (valeurs négatives possibles) </li>
						<li> <kbd>matrix(1,0,0,1,20,0)</kbd> pour combiner les transformations </li>
					</ul>

					<p> Il est possible de combiner plusieurs transformations consécutives. Par exemple : <br />
						<code> transform: scale(0.7) rotate(15deg) skewY(10deg); </code> <br />
					L'ordre des fonctions est important car le résultat ne sera pas toujours le même ! </p>

					<p> On peut également combiner plusieurs transformations en utilisant les matrices :
<pre>
1 0 20
0 1 0
0 0 1
</pre>	
					Le premier "1" indique l'agrandissement sur X (<kbd>scaleX</kbd>) et le deuxième l'agrandissement sur Y (<kbd>scaleY</kbd>). Le "20" indique le déplacement sur X (<kbd>translateX</kbd>). </p>				

					<p> Le site <a href="http://www.lorempixel.com">lorempixel.com</a> génère des images libres d'utilisation. </p>

				</section>

				<section>

					<h2> Les transitions </h2>

					<p> La différence entre une transition et une animation :
						<ul>
							<li> la <strong>transition</strong> fait passer un objet d'un état A à un état B (tout bouge en même temps) </li>
							<li> l'<strong>animation</strong> est une combinaison de transitions les unes à la suite des autres </li>
						</ul>
					</p>

					<section class="transitions">
						<div id="transition_one"> </div>
						<div id="transition_two"> </div>
						<div id="transition_three"> </div>
					</section>

					<p> On peut aller plus loin en définissant sa propre fonction de transition <kbd>transition-timing-function</kbd> avec <kbd>cubic-bezier()</kbd>. La courbe se définit avec quatres points. </p>

					<table>
						<thead>
							<tr>
								<th> Propriété </th>
								<th> Description </th>
								<th> Valeurs </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <kbd>transition-property</kbd> </td>
								<td> Indique quelle propriété CSS est animée </td>
								<td> background-color </td>
							</tr>
							<tr>
								<td> <kbd>transition-duration</kbd> </td>
								<td> Indique combien de temps dure la transition </td>
								<td> 1s </td>
							</tr>
							<tr>
								<td> <kbd>transition-delay</kbd> </td>
								<td> Indique au bout de combien de temps commence l'animation (valeurs négatives possibles) </td>
								<td> 0.2s </td>
							</tr>
							<tr>
								<td> <kbd>transition-timing-function</kbd> </td>
								<td> Indique quel type de transition on veut voir (accélération de l'effet) </td>
								<td> ease, linear, ease-in, ease-out, ease-in-out, cubic-bezier() </td>
							</tr>
							<tr>
								<td> <kbd>transition</kbd> </td>
								<td> Super-propriété qui combine <kbd>transition-property</kbd>, <kbd>transition-duration</kbd>, <kbd>transition-delay</kbd> et <kbd>transition-timing-function</kbd> </td>
								<td> background-color 2s ease, width 1s linear (2 effets de transition en parallèle) </td>
							</tr>
						</tbody>
					</table>

				</section>

				<section>

					<h2> Les animations </h2>

					<p> Les animations sont en quelque sorte des "super-transitions". Elles passent par autant d'états que l'on veut. <br />
					Pour créer une animation en CSS, il faut :
					<ol>
						<li> définir les étapes de l'animation à l'aide d'une directive <kbd>@keyframes</kbd> </li>
						<li> appliquer la propriété <kbd>animation</kbd> sur l'élément que l'on veut </li>
					</ol>
				</p>

				<section class="animations">
					<div id="animation_one"> </div>
					<div id="animation_two"> </div>
					<div id="animation_three"> </div>
				</section>

				<table>
						<thead>
							<tr>
								<th> Propriété </th>
								<th> Description </th>
								<th> Valeurs </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <kbd>animation-name</kbd> </td>
								<td> Nom de l'animation à utiliser </td>
								<td> monanimation </td>
							</tr>
							<tr>
								<td> <kbd>animation-duration</kbd> </td>
								<td> Durée de l'animation </td>
								<td> 2s, 350ms </td>
							</tr>
							<tr>
								<td> <kbd>animation-delay</kbd> </td>
								<td> Délai avant le démarrage de l'animation </td>
								<td> 2s, 350ms (valeurs négatives possibles) </td>
							</tr>
							<tr>
								<td> <kbd>animation-timing-function</kbd> </td>
								<td> Accélération de l'animation </td>
								<td> ease, linear, ease-in, ease-out, ease-in-out, cubic-bezier(), <strong>step-start</strong>, <strong>step-end</strong>, <strong>steps(X)</strong> </td>
							</tr>
							<tr>
								<td> <kbd>animation-iteration-count</kbd> </td>
								<td> Nombre de répétitions de l'animation </td>
								<td> 1 (jouée 1 fois, défaut), infinite (joué en continu) </td>
							</tr>
							<tr>
								<td> <kbd>animation-direction</kbd> </td>
								<td> Fait revenir l'animation en sens inverse ou non </td>
								<td> normal (défaut), reverse, alternate </td>
							</tr>
							<tr>
								<td> <kbd>animation-fill-mode</kbd> </td>
								<td> Indique comment l'objet doit s'afficher avant et après l'animation </td>
								<td> none (défaut), forwards, backwards </td>
							</tr>
							<tr>
								<td> <kbd>animation</kbd> </td>
								<td> Super-propriété qui combine toutes ces propriétés </td>
								<td>  </td>
							</tr>
						</tbody>
					</table>

				</section>

				<section>

					<h2> Les transformations 3D </h2>

					<section id="trois_d">
						<section class="translations">
							<div id="translation_one"> translateZ(-200px) </div>
							<div id="translation_two"> </div>
							<div id="translation_three"> translateZ(200px) </div>
						</section>

						<section class="devant_derriere">
							<div id="devant"> Devant </div>
							<div id="derriere"> Derrière </div>
						</section>
					</section>

					<ul>
						<li> <kbd>perspective</kbd> donne l'impression de profondeur à la scène. Elle indique la distance de l'oeil à la scène (en px). Plus elle est faible, plus on est près ; plus elle est élevée, plus on est loin </li>
						<li> <kbd>perspective-origin</kbd> définit le point de fuite, c'est à dire le point d'ancrage de la scène, ce qui va donner l'impression qu'on la regarde d'un certain côté. Il faut indiquer deux valeurs: l'axe des X et celui des Y (en px) ou utiliser top, bottom, center, left, right </li>
						<li> La propriété <kbd>transform</kbd> est aussi utilisée en 3D et peut prendre ces valeurs :
							<ul>
								<li> <kbd>translate3d(x,y,z)</kbd> : positionne l'objet dans l'espace en 3D aux coordonnées (x,y,z) </li>
								<li> <kbd>translateZ(z)</kbd> : positionne l'objet dans l'espace en 3D aux coordonnées (0,0,z) </li>
								<li> <kbd>scale3d(sx,sy,sz)</kbd> : agrandit l'objet sur les différents axes </li>
								<li> <kbd>scaleZ(sz)</kbd> : agrandit l'objet sur l'axe des Z (pas évident à voir si utilisé seul) </li>
								<li> <kbd>rotateX(x)</kbd> : rotation sur l'axe des X </li>
								<li> <kbd>rotateY(y)</kbd> : rotation sur l'axe des Y </li>
								<li> <kbd>rotateZ(z)</kbd> : rotation sur l'axe des Z (correspond à une rotation en 2D <kbd>rotate()</kbd>) </li>
								<li> <kbd>rotate3d(x,y,z)</kbd> : roation sur plusieurs axes en même temps </li>
							</ul>
						</li>
						<li> Si on donne la valeur <kbd>hidden</kbd> à la propriété <kbd>backface-visibility</kbd>, la face arrière du bloc est cachée (<kbd>visible</kbd> par défaut) </li>
					</ul>

				</section>

			</div>
			

			<?php include("footer.php"); ?>

		</div>

	</body>
</html>
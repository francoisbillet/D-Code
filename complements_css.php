<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style.css" />
		<title> Compléments aux propriétés CSS </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<div>

				<h1 class="titre_css"> Compléments aux propriétés CSS </h1>

				<section>

					<h2> Polices </h2>

					<p> Polices qui fonctionnent bien sur la plupart des navigateurs : 
						<ul>
							<li> Arial </li>
							<li> Arial Black </li>
							<li> Comic Sans MS </li>
							<li> Courier New </li>
							<li> Georgia </li>
							<li> Impact </li>
							<li> Times New Roman </li>
							<li> Trebuchet MS </li>
							<li> Verdana </li>
						</ul>
					</p>

					<p> Il existe plusieurs formats de fichiers de police et ceux-ci ne fonctionnent pas sur tous les navigateurs :

					<ul>
						<li> .ttf qui fonctionne sur tous les navigateurs </li>
						<li> .eot qui fonctionne sur Internet Explorer uniquement </li>
						<li> .otf qui ne fonctionne pas sur Internet Explorer </li>
						<li> .svg qui est le seul format reconnu sur les iPhones et iPad pour le moment </li>
						<li> .woff qui fonctionne sur tous les navigateurs </li>
					</ul> 
					</p>

				</section>

				<section>

					<h2> La couleur et le fond </h2>
				
					<p>Il n'existe que 16 couleurs "standard" (white, silver, gray, black, red, maroon, lime, green, yellow, olive, blue, navy, fuchsia, purple, aqua, teal) </p>


					<p> Il est possible de donner plusieurs images de fond à un élément. Il suffit de séparer les déclarations par une virgule, comme ceci : <br />

					<code> background: url("soleil.png") fixed no-repeat top right, url("neige.png") fixed; </code> </p>

					<p> <strong>Attention</strong> : le première image de la liste sera placée par-dessus les autres ! </p>
					
				</section>

				<section>

					<h2> Centrer des blocs </h2>

					<p> Pour centrer un bloc, il faut respecter les règles suivantes :

						<ul>
							<li> donner une largeur au bloc </li>
							<li> indiquer que l'on veut des marges extérieures automatiques, avec <kbd>margin: auto</kbd> </li>
						</ul>

						<em>A noter :</em> il n'est pas possible de centrer verticalement un bloc avec cette technique. 
					</p>

					<p> Avec flexbox, le centrage vertical et horizontal peut être obtenu en disant que le conteneur est une flexbox et en appliquant des marges extérieures automatiques sur les éléments à l'intérieur ! </p>

				</section>

				<section>

					<h2> Autres techniques de mise en page </h2>

					<p> Il est recommandé d'utiliser flexbox aujourd'hui (Flexbox > Display <kbd>inline-block</kbd> > <kbd>float</kbd> pour la mise en page), mais la majorité des sites utilisent d'autres techniques de mise en page car flexbox n'existait pas à ce moment là. Il est important de les connaître si on est amené à gérer un "vieux" code :

						<ul>
							<li> Le positionnement flottant qui consiste à faire flotter un bloc par rapport à un autre (pour que le texte ne passe pas sous le menu, lui donner une marge plus importante que la largeur du menu) </li>
							<li> La propriété <kbd>display</kbd> pour transformer un élément d'un type vers un autre (<kbd>display: none</kbd> par ex pour cacher un sous-menu qui apparaît au survol du menu en JS). Les éléments <kbd>inline-block</kbd> se positionnent les uns à côté des autres sur la même ligne (baseline) et peuvent être redimensionnés </li>
							<li> La propriété <kbd>position</kbd> pour choisir un positionnement :
								<ul>
									<li> <kbd>absolute</kbd> (absolu) permet de placer un élement n'importe où sur la page (en donnant aux propriétés top, right, bottom et left une valeur en px ou %). <br />
									Les éléments positionnés en absolu sont placés par-dessus le reste des éléments de la page. <br /> </li>
									<li> <kbd>fixed</kbd> : pareil que <kbd>absolute</kbd> sauf que le bloc reste fixe à sa position </li>
									<li> <kbd>relative</kbd> permet d'effectuer des ajustements : l'élément est décalé par rapport à sa position initiale </li>
								</ul> 
							</li>
						</ul>
					</p>

					<p> A savoir : un élement A positionné en <strong>absolu</strong> à l'intérieur d'un autre élément B (lui même en <strong>absolu, fixe ou relatif</strong>) se positionnera par rapport à l'élément B et non par rapport au coin haut gauche de la page. </p>

				</section>
			</div>

			<?php include("footer.php"); ?>

		</div>

	</body>
</html>
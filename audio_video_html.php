<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Audio & Video HTML </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<div>
				<h1 class="titre_html"> Audio et vidéo </h1>

				<section>
					<h2> Formats audio </h2>

					<p> La plupart des formats audio sont compressés (comme le sont les images JPEG, PNG et GIF). Voici les plus connus : </p>
						<ul>
							<li> <strong>MP3</strong> : l'un des plus vieux et l'un des plus compatibles </li>
							<li> <strong>AAC</strong> : format de bonne qualité utilisé majoritairement par Apple sur iTunes </li>
							<li> <strong>OGG</strong> : Ogg Vorbis, format libre et très répandu sous Linux </li>
							<li> <strong>WAV</strong> : format à éviter car non compressé et donc très volumineux (équivalent du BMP pour l'audio) </li>
						</ul>

				</section>

				<section>
					<h2> Formats vidéo </h2>

					<p> Pour la vidéo, on a besion de trois élements : 
						<ul>
							<li> <strong>un format conteneur</strong> : "boîte" qui va contenir le codec audio et le codec vidéo (AVI, MP4, MKV...) </li>
							<li> <strong>un codec audio</strong> : format du son de la vidéo, généralement compressé (MP3, AAC, OGG...) </li>
							<li> <strong>un codec vidéo</strong> : format complexe qui va compresser les images (parfois payant). Les principaux à connaître pour le web sont :
								<ul>
									<li> <strong>H.264</strong> : l'un des plus puissants et des plus utilisés aujourd'hui, mais pas 100% gratuit </li>
									<li> <strong>Ogg Theora</strong> : gratuit et libre de droits, mais moins puissant que H.264 (programmes à installer sous Windows) </li>
									<li> <strong>WebM</strong> : gratuit et libre de droits, plus récent (by Google). Concurrent de H.264 </li>
								</ul>
							</li>
						</ul>
					</p>

					<p> Il est conseillé de proposer chaque vidéo dans plusieurs formats pour qu'elle soit lisible dans un maximum de navigateurs. <br />
					Pour convertir une vidéo dans ces différents formats, utilisez <a href="mirovideoconverter/com">Miro Video Converter</a> (glisser-déposer la vidéo) </p>

				</section>

				<section>

					<h2> Insertion d'un élément audio </h2>

					<audio src="Don't Panic.mp3" controls> Mettez à jour votre navigateur ! </audio>

					<p> Il faut utiliser la balise <kbd>&lt;audio&gt;</kbd> avec comme valeur de l'attribut <kbd>src</kbd> l'endroit du fichier audio en question. On peut ajouter ces attributs :
						<ul>
							<li> <kbd>controls</kbd> : pour ajouter les boutons de contrôle. Certains sites web préfèrent créer eux-mêmes leurs boutons avec du JS </li>
							<li> <kbd>width</kbd> : pour modifier la largeur de l'outil de lecture audio </li>
							<li> <kbd>loop</kbd> : pour jouer la musique en boucle </li>
							<li> <kbd>autoplay</kbd> : pour jouer la musique dès le chargement de la page (déconseillé) </li>
							<li> <kbd>preload</kbd> : pour précharger la musique dès le chargement de la page ou non. Cet attribut peut prendre ces valeurs :
								<ul>
									<li> <kbd>auto</kbd> : le navigateur décide ce qu'il précharge (par défaut) </li>
									<li> <kbd>metadata</kbd> : charge uniquement les métadonnées (durée, etc.) </li>
									<li> <kbd>none</kbd> : pas de préchargement. Utile pour ne pas gaspiller de bande passante sur votre site </li>
								</ul>
							</li>
						</ul>

					L'apparence du lecteur audio (et vidéo) change en fonction du navigateur. <br />
					On peut écrire du texte entre les balises <kbd>&lt;audio&gt;</kbd> (et <kbd>&lt;video&gt;</kbd>) qui sera affiché à la place du lecteur si le navigateur ne gère pas cette balise. </p>

					<p> On peut également proposer plusieurs versions du fichier audio (ou vidéo), au cas où le navigateur ne gère pas un des formats audio (ou vidéo). <br />
					Pour cela, on écrit une balise <kbd>&lt;source&gt;</kbd> par format, avec l'attribut <kbd>src</kbd> de chacun (cette élément ne nécessite pas de balise fermante). </p>

				</section>

				<section>

					<h2> Insertion d'une vidéo </h2>

					<video src="milkyway.mp4" controls poster="images/code.jpg" width="80%"> Mettez à jour votre navigateur ! </video>

					<p> Il faut utiliser la balise <kbd>&lt;video&gt;</kbd> avec comme valeur de l'attribut <kbd>src</kbd> l'endroit du fichier vidéo en question. On peut ajouter ces attributs :
						<ul>
							<li> <kbd>poster</kbd> : image à afficher à la place de la vidéo tant qu'elle n'est pas lancée. Par défaut, le navigateur prend la première image de la vidéo </li>
							<li> <kbd>controls</kbd> : pour les boutons de contrôle </li>
							<li> <kbd>width</kbd> : pour modifier la largeur</li>
							<li> <kbd>height</kbd> : pour modifier la hauteur </li>
							<li> <kbd>loop</kbd> : pour jouer la vidéo en boucle </li>
							<li> <kbd>autoplay</kbd> : pour jouer la vidéo dès le chargement de la page (déconseillé) </li>
							<li> <kbd>preload</kbd> : pour précharger la vidéo ou non. Fonctionne comme pour la vidéo </li>
						</ul>
					</p>

					<p> Les proportions de la vidéo sont toujours conservées. </p>

					<p> Il n'est pas possible d'empêcher le téléchargement des vidéos en HTML. Les lecteurs vidéo Flash permettent de protéger le contenu de la vidéo mais, là encore, des solutions de contournement existent (plug-ins). </p>

				</section>
			</div>


			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
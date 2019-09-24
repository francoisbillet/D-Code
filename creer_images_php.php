<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Créer des images en PHP </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<h1 class="titre_php"> Créer des images en PHP </h1>

			<p> Pour générer des images, il faut activer la bibliothèque GD. </p>

			<p> Il y a 2 facçons de générer une image en PHP :
				<ul>
					<li> on fait en sorte que le script renvoie une image (et non une page web) </li>
					<li> on demande à PHP d'enregistrer l'image dans un fichier </li>
				</ul>
			</p>

			<p> La fonction <kbd>header</kbd> permet de dire au navigateur que l'on est en train d'envoyer une image : <br />
				<code> header ("Content-type: image/png"); </code> (ou jpeg) <br />
			A noter : comme <kbd>setcookie</kbd>, <kbd>header</kbd> doit être utilisée avant tout code HTML. </p>

			<p> Il y a 2 façons de créer une image :
				<ul>
					<li> 
						<p> créer une image vide avec <kbd>imagecreate()</kbd> : <br />
						<code> $image = imagecreate(200,50); </code> (200px de large et 50px de haut) <br />
						$image est une <strong>ressource</strong>, c'est à dire une variable un peu spéciale qui contient toutes les informations sur un objet. 
						</p>
					</li>
					<li> 
						<p> charger une image qui existe déjà et qui servira de fond à la nouvelle image avec <kbd>imagecreatefromjpeg()</kbd> ou <kbd>imagecreatefrompng</kbd> : <br />
							<code> $image = imagecreatefromjpeg("couchersoleil.jpg"); </code>
						</p>
					</li>
				</ul>
			</p>

			<p> Enfin, on affiche l'image avec <kbd>imagejpeg</kbd> ou <kbd>	imagepng</kbd> : <br />
					<code> imagepng($image); </code> <br />
				<ul>
					<li> 
						<p> Si on veut afficher l'image directement après l'avoir créée :
<pre>
<code> 
&lt;?php
header ("Content-type: image/png");
$image = imagecreate(200, 50);
// on s'amuse avec notre image
imagepng($image);
?&gt;
</code>
</pre>
						On va demander à <strong>afficher la page PHP comme une image</strong>. Si cette page s'appelle "image.php", on va mettre ce code HTML pour l'afficher depuis une autre page : <br />
							<code> &lt;img src="image.php" /&gt; </code> <br />
						Avantage de cette technique : l'image affichée peut changer à chaque fois.
						</p>
					</li>
					<li>
						<p> Si on veut enregistrer l'image sur le disque, il faut ajouter un paramètre à <kbd>imagepng</kbd> et supprimer <kbd>header</kbd> car le script ne va plus renvoyer une image :
<pre> 
<code>
&lt;?php
$image = imagecreate(200,50);
// on s'amuse avec l'image
imagepng($image, "images/monimage.png");
?&gt;
</code>
</pre>
						Cette fois, l'image a été enregistrée sur le disque. Pour l'afficher depuis une autre page : <br />
							<code> &lt;img src="images/monimage.png" /&gt; </code> <br />
						Avantage de cette technique : ne pas devoir recalculer l'image à chaque fois <br />
						Défaut de cette technique : une fois enregistrée, l'image ne change plus.
						</p>
					</li>
				</ul>
			</p>

			<p> On utilise la fonction <kbd>imagecolorallocate</kbd> pour définir une couleur en PHP : 
<pre>
<code> 
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$noir = imagecolorallocate($image, 0, 0, 0);
</code>
</pre>
			La première fois qu'on fait un appel à cette fonction, <strong>la couleur devient la couleur de fond de l'image</strong> (ici orange).
			</p>

			<p> On utilise la fonction <kbd>imagestring</kbd> pour écrire du texte : 
<pre>
<code> 
imagestring($image, $police, $x, $y, $texte_a_ecrire, $couleur); 
</code> 
</pre>
			Le paramètre <kbd>$police</kbd> correspond à la police de caractères que l'on souhaite utiliser, de 1 à 5 (1 = petit, 5 = grand). <br />
			<kbd>$x</kbd> et <kbd>$y</kbd> sont les coordonnées auxquelles on veut placer le texte sur l'image. <br />
			A noter : la fonction <kbd>imagestringup</kbd> fonctionne exactement de la même manière, sauf qu'elle écrit le texte verticalement.
			</p>

			<p> Dessiner des formes :
				<ul>
					<li> <kbd>ImageSetPixel($image, $x, $y, $couleur)</kbd> pour dessiner un pixel </li>
					<li> <kbd>ImageLine($image, $x1, $y1, $x2, $y2, $couleur)</kbd> pour dessiner une ligne entre 2 points </li>
					<li> <kbd>ImageEllipse($image, $x, $y, $largeur, $hauteur, $couleur)</kbd> pour dessiner une ellipse </li>
					<li> <kbd>ImageRectangle ($image, $x1, $y1, $x2, $y2, $couleur)</kbd> pour dessiner un rectangle </li>
					<li> <kbd>ImagePolygon ($image, $array_points, $nombre_de_points, $couleur)</kbd> pour dessiner un polygone. L'array <kbd>$array_points</kbd> contient les coordonnées de tous les points </li>
				</ul>
			</p>

			<p> La fonction <kbd>imagecolortransparent($image, $couleur)</kbd> permet de rendre une image transparente. Il faut lui indiquer quelle couleur on veut rendre transparente. <br /> 
			Seul le PNG peut être rendu transparent. </p>

			<p> La fonction <kbd>imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60</kbd> permet de "fusionner" deux images en jouant sur un effet de transparence. Cette fonction peut être par exemple utilisée pour "copyrighter" automatiquement toutes les images d'un site. </p>

<pre>
<code>
&lt;?php
header ("Content-type: image/jpeg"); // L'image que l'on va créer est un jpeg

// On charge d'abord les images
$source = imagecreatefrompng("logo.png"); // Le logo est la source
$destination = imagecreatefromjpeg("couchersoleil.jpg"); // La photo est la destination

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
$destination_x = $largeur_destination - $largeur_source;
$destination_y =  $hauteur_destination - $hauteur_source;

// On met le logo (source) dans l'image de destination (la photo)
imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);

// On affiche l'image de destination qui a été fusionnée avec le logo
imagejpeg($destination);
?&gt;
</code>
</pre>

			<p> Dans ce script, on manipule 2 images : <kbd>$source</kbd> (le logo) et <kbd>$destination</kbd> (la photo). Les fonctions <kbd>imagesx</kbd> et <kbd>imagesy</kbd> permettent de récupérer les dimensions des images. <br />
			La fonction <kbd>imagecopymerge</kbd> modifie l'image de destination pour y intégrer l'image source. C'est pour cela que l'on affiche <kbd>$destination</kbd> à la fin, et pas <kbd>$source</kbd> qui n'a pas changé. </p>

			<p> Les paramètres donnés à la fonction <kbd>imagecopymerge</kbd> sont :
				<ul>
					<li> l'image de destination : ici <kbd>$destination</kbd> </li>
					<li> l'image source : ici <kbd>$source</kbd> </li>
					<li> l'abscisse où placer le logo sur la photo : ici <kbd>$largeur_photo - $largeur_logo</kbd> </li>
					<li> l'ordonnée où placer le logo sur la photo : ici <kbd>$hauteur_photo - $hauteur_logo</kbd> </li>
					<li> l'abscisse de la source : ici 0. La fonction permet de ne prendre qu'une partie de l'image source. On prend tout le logo donc on met 0 </li>
					<li> l'ordonnée de la source : ici 0 (pareil que l'abscisse) </li>
					<li> la largeur de la source : ici <kbd>$largeur_source</kbd>. Correspond à la largeur de l'image source que l'on prend </li>
					<li> la hauteur de la source : ici <kbd>$hauteur_source</kbd> </li>
					<li> le pourcentage de transparence : ici 60. Nombre entre 0 et 100 (0: transparent, 100: opaque) </li>
				</ul>
			</p>

			<p> On peut se servir de ce code pour faire une page <kbd>copyrighter.php</kbd>. Si on veut "copyrighter" automatiquement <kbd>tropiques.jpg</kbd> : <br />
				<code> &lt;img src="copyrigther.php?image=tropiques.jpg" /&gt; </code> <br />
			Il suffit ensuite d'écrire la page <kbd>copyrighter.php</kbd>
			</p>

			<p> On utilise la fonction <kbd>imagecopyresampled</kbd> pour redimensionner une image. Elle permet de créer des miniatures d'images pour, par exemple, faire une galerie de photos. <br />
			Comme cette fonction est poussée (elle fait beaucoup de calculs mathématiques), on va ici créer la miniature une fois pour toutes et l'enregistrer dans un fichier. </p>

			<p> Nous allons utiliser la fonction <kbd>imagecreatetruecolor</kbd> pour créer une image vide qui peut contenir beaucoup plus de couleurs que <kbd>imagecreate</kbd> </p>

<pre>
<code>
&lt;?php
$source = imagecreatefromjpeg("couchersoleil.jpg"); // La photo est la source
$destination = imagecreatetruecolor(200, 150); // On crée la miniature vide

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// On crée la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
imagejpeg($destination, "mini_couchersoleil.jpg");
?&gt;
</code>
</pre>

			<p> On peut ensuite afficher l'image avec le code HTML : <br />
				<code> &lt;img src="mini_couchersoleil.jpg" alt="Coucher de soleil" /&gt; </code>
			</p>

			<p> Les paramètres donnés à la fonction <kbd>imagecopyresampled</kbd> sont :
				<ul>
					<li> l'image de destination : ici <kbd>$destination</kbd> </li>
					<li> l'image source : ici <kbd>$source</kbd> </li>
					<li> l'abscisse du point à laquelle on place la miniature : ici 0 </li>
					<li> l'ordonnée du point à laquelle on place la miniature : ici 0 </li>
					<li> l'abscisse du point de la source : ici 0 </li>
					<li> l'ordonnée du point de la source : ici 0 </li>
					<li> la largeur de la miniature : ici <kbd>$largeur_destination</kbd> </li>
					<li> la hauteur de la miniature : ici <kbd>$hauteur_destination</kbd> </li>
					<li> la largeur de la source : ici <kbd>$largeur_source</kbd> </li>
					<li> la hauteur de la source : ici <kbd>$hauteur_source</kbd> </li>
				</ul>
			</p>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
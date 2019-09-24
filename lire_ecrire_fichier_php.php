<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Accueil PHP </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>
				<h1 class="titre_php"> Lire et écrire dans un fichier </h1>

				<p> Pour que PHP puisse créer des fichiers, il faut lui donner le droit de créer et modifier les fichiers. Pour créer ces droits, on dit en général qu'on doit modifier le <strong>CHMOD</strong> du fichier ou du dossier (nom de commande sous Linux). <br />
				Les serveurs sont le plus souvent sous Linux. </p>

				<p> Le CHMOD est un nombre à trois chiffres que l'on attribue à un fichier. Selon la valeur de ce nombre, Linux autorisera (ou non) la modification du fichier. <br />
				Pour modifier le CHMOD, il faut passer par le logiciel FTP (FileZilla par exemple). </p>

				<p> Il y a trois types de personnes qui ont le droit de lire/modifier des fichiers :
					<ul>
						<li> Le propriétaire, qui a en général tous les droits (premier chiffre du CHMOD) </li>
						<li> Le groupe (deuxième chiffre du CHMOD) </li>
						<li> Permissions publiques, qui concernent tout le monde (troisième chiffre du CHMOD, par défaut 5). Mettre la valeur à 7 </li>
					</ul> 
				Il faut donc rentrer <strong>777</strong> pour que tous les programmes du serveur (dont PHP) puissent modifier le fichier. <br />
				On peut aussi modifier le CHMOD d'un dossier. Ce peut être utilse si on a besoin de créer des fichiers dans un dossier en PHP. </p>

				<p> Pour ouvrir un fichier, on utilise la fonction <kbd>fopen('nom_fichier','mode_lecture')</kbd>. Cette fonction renvoie une informatique que l'on met dans une variable (on en aura besoin pour fermer le fichier). <br />
				Voilà les principaux modes de lecture :
					<ul>
						<li> <strong>r</strong> : ouvre le fichier en lecture seule </li>
						<li> <strong>r+</strong> : ouvre le fichier en lecture et écriture </li>
						<li> <strong>a</strong> : ouvre le fichier en lecture seule. Si le fichier n'existe pas, il est automatiquement créé </li>
						<li> <strong>a+</strong> : ouvre le fichier en lecture et écriture. Si le fichier n'existe pas, il est automatiquement créé. <br />
						Le répertoire doit avoir un CHMOD à 777 dans ce cas. <br />
						Si le fichier existe déjà, le texte sera rajouté à la fin </li>
					</ul>
				</p>

				<p> Pour fermer un fichier, on utilise la fonction <kbd>fclose($variable_fichier)</kbd>. </p>

				<p> Pour lire dans un fichier, on a deux possibilités :
					<ol>
						<li> lire caractère par caractère, avec <kbd>fgetc($variable_fichier)</kbd> </li>
						<li> lire ligne par ligne, avec <kbd>fgets($variable_fichier)</kbd> </li>
					</ol>
				En général, on se débrouille pour mettre une information par ligne dans notre fichier. On se sert donc assez peu de <kbd>fgetc</kbd> qui est assez lourd à utiliser. </p>

				<p> <kbd>fgets()</kbd> renvoie la première ligne (la fonction arrête la lecture au premier saut de ligne). Il faut donc faire une boucle pour lire chaque ligne. <br />
				C'est un peu lourd, mais cela peut suffire si on stocke assez peu d'informations dans le fichier. <br />
				Si on a beaucoup d'informations à stocker, on préfèrera utiliser une <em>base de données</em>. </p>

				<p> Pour écrire dans un fichier, on utilise la fonction <kbd>fputs($variable_fichier, 'texte_a_ecrire')</kbd>. <br />
				Il faut cependant savoir où l'on écrit le texte. Après avoir lu la première ligne d'un fichier avec <kbd>fgets</kbd>, le "curseur" se trouve à la fin de la première ligne. Si on fait un <kbd>fputs</kbd> juste après, il va écrire à la suite. Or on veut remplacer le texte de la première ligne. <br />
				Pour éviter ça, on va utiliser la fonction <kbd>fseek($variable_fichier, int)</kbd> pour replacer le curseur au début du fichier. <br />
				Il suffira ensuite de faire un <kbd>fputs</kbd> pour écrire par-dessus l'ancien texte. <br />
				<em>Attention</em> : Si on a ouvert le fichier avec le mode <kbd>'a'</kbd> ou <kbd>'a+'</kbd>, toutes les données que l'on écrira seront <strong>toujours</strong> ajoutées à la fin du fichier. La fonction <kbd>fseek</kbd> n'aura donc aucun effet dans ce cas. </p>
			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
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
				<h1 class="titre_php"> Sessions et cookies </h1>

					<p> Les <strong>sessions</strong> constituent un moyen de conserver des variables sur toutes les pages du site. </p>

					<p> Fonctionnement des sessions :
						<ol>
							<li> Pour chaque visiteur arrivant sur le site, on demande à créer une session pour lui. PHP génère alors un numéro unique, très gros et en hexadécimal, qui sert d'identifiant. C'est "l'ID de session" (ou <kbd>PHPSESSID</kbd>). PHP transmet automatiquement cet ID de page en page en utilisant généralement un cookie. </li>
							<li> Une fois la session généréé, on peut créer autant de variables de session que l'on en a besoin (ex: <kbd>$_SESSION['nom']</kbd>). Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée. </li>
							<li> Lorsque le visiteur se déconnecte du site, la session est fermée et PHP "oublie" toutes les variables de session créées. Il est en fait difficile de savoir précisément quand un visiteur quitte votre site car rien ne nous en informe. Soit le visiteur clique sur le bouton "Déconnexion" que l'on a créé, soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement : c'est le <strong>timeout</strong>. Le plus souvent, le visiteur est déconnecté par un timeout. </li>
						</ol>
					</p>

					<p> Il faut connaître deux fonctions :
						<ul>
							<li> <kbd>session_start()</kbd> : démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. Il faut appeler cette fonction <strong>au tout début de chacune des pages</strong> où on a besoin des variables de session, <strong>avant même la balise <kbd>&lt;!DOCTYPE&gt;</kbd></strong>, sinon on ne peut pas les utiliser. </li>
							<li> <kbd>session_destroy()</kbd> : ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page pendant plusieurs minutes (timeout), mais on peut aussi créer une page "Déconnexion". </li>
						</ul>
					</p>

					<p> Les <strong>cookies</strong> sont des petits fichiers que l'on enregistre sur l'ordinateur du visiteur. Ces fichiers contiennent du texte et permettent de "retenir" des informations sur lui (ex: on inscrit dans un cookie son pseudo. La prochaine fois qu'il viendra sur le site, on ira lire son pseudo en regardant ce que contient le cookie). </p>

					<p> Les cookies ne sont pas dangereux. Ils peuvent retenir ce que le visiteur aime et afficher uniquement des pubs ciblées mais c'est tout. </p>

					<p> Chaque cookie stocke généralement une information à la fois. Si on souhaite stocker le pseudo et la date de naissance du visiteur, il est donc recommandé de créer deux cookies. </p>

					<p> Les cookies sont stockés à différents endroits en fonction du navigateur. Généralement on ne touche pas directement à ces fichies, mais on peut afficher à l'intérieur du navigateur la liste des cookies qui sont stockés. On peut choisir de les supprimer à tout moment. <br />
					Les cookies sont classés par site web. Chaque site web peut écrire plusieurs cookies et chacun d'eux a une nom et une valeur. Les cookies ont également une date d'expiration après laquelle ils sont automatiquement supprimés par le navigateur. <br />
					La taille des cookies est limitée à quelques kilo-octets. </p>

					<p> Pour écrire un cookie, on utilise la fonction <kbd>setcookie</kbd>, <strong>qu'il faut aussi toujours placer avant tout code HTML !</strong>, à laquelle on donne en général trois paramètres :
						<ol>
							<li> le nom du cookie </li>
							<li> la valeur du cookie </li>
							<li> la date d'expiration du cookie, sous forme de <em>timestamp</em> (nombre de secondes écoulées depuis le 1er janvier 1970) </li>
						</ol>
					<br />
					Pour obtenir le timestamp actuel, on fait appel à la fonction <kbd>time()</kbd>. Pour définir une date d'expiration du cookie, il faut ajouter le nombre de secondes au bout duquel il doit expirer au "moment" actuel (ex: <kbd>time() + 365*24*3600</kbd> pour qu'il expire dans 1 an). </p>

					<p> Il est recommandé d'utiliser l'option <kbd>httpOnly</kbd> sur le cookie. Cela rendra le cookie inaccessible en JavaScript sur tous les navigateurs qui supportent cette option. Cette option permet de réduire drastiquement les risques de faille XSS sur le site, au cas où on aurait oublié d'utiliser <kbd>htmlspecialchars</kbd> quelque part. <br />
					Le création de cookie ressemble donc à ça : <br />
					<code> &lt;?php setcookie('pseudo', 'francis', time() + 365*54*3600, null, null, false, true); ?> </code> <br />
					La dernier paramètre <kbd>true</kbd> permet d'activer le mode <kbd>httpOnly</kbd> sur le cookie. </p>

					<p> Pour afficher un cookie, il suffit d'utiliser la superglobale <kbd>$_COOKIE</kbd>. <br />
					Si le cookie n'existe pas, la variable superglobale n'existe pas. Il faut donc faire un <kbd>isset</kbd> pour vérifier si le cookie existe ou non. </p>

					<p> Pour modifier un cookie, il faut refaire appel à <kbd>setcookie</kbd> en gardant le même nom de cookie, ce qui "écrasera" l'ancien. Le temps d'expiration du cookie est alors remis à zéro. </p>
				</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
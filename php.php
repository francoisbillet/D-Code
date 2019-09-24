<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> &lt;D/Code </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_php"> Mémento PHP </h1>

				<p> Il est conseillé d'écrire les noms de variables en anglais. </p>

				<p> Concaténation : &lt;?php echo 'le visiteur a ' . $age . ' ans'; ?&gt; </p>

				<p> Pour afficher un guillemet, insérer un antislash (\) avant. </p>

				<p> On peut fermer la balise php juste après avoir ouvert l'accolade d'une condition (ou d'une boucle), puis écrire tout le code HTML que l'on veut. Cela permet de limiter le nombre de <strong>echo</strong>. <br />
				Il suffira ensuite de réouvrir la balise php avant de fermer l'accolade de la condition (ou de la boucle). </p>

				<p> La condition <strong>switch</strong> ne nous permet de ne tester que l'égalité. </p>

				<p> La boucle <strong>for</strong> est adaptée quand on sait combien d'itérations vont être nécessaires. </p> 

				<p> La boucle <strong>foreach</strong> permet de parcourir les tableaux numérotés <em>et</em> les tableaux associatifs. </p>

				<p> Lorsqu'on fait un lien vers une page, il est possible d'ajouter des paramètres de la forme <kbd>bonjour.php?nom=Billet&prenom=Francois</kbd> qui seront transmis à la page via l'URL. <br />
				<kbd>$_GET['nom']</kbd> aura pour valeur "Billet" et <kbd>$_GET['prenom']</kbd> "Francois". </p>

				<p> <kbd>isset()</kbd> permet d'éviter les modifications ou suppressions directement dans l'URL. </p>

				<p> Le transtypage permet de s'assurer par exemple qu'une variable est bien un <kbd>int</kbd>. </p>

				<p> Les champs cachés font parti du formulaire mais n'apparaissent pas aux yeux du visiteur. On peut s'en servir pour transmettre des informations fixes : <br />
					<code> &lt;input type="hidden" name="pseudo" value="Funky_Creep" /> </code>
				</p>


				<h2> Jointures entre tables </h2>

				<p> Plusieurs types de jointures. Les 2 plus importantes :
					<ul>
						<li> <strong>les jointures internes</strong> : ne sélectionnent que les données qui ont une correspondance entre les deux tables </li>
						<li> <strong>les jointures externes</strong> : sélectionnent toutes les données, même si certaines n'ont pas de correspondance dans l'autre table </li>
					</ul> 
				</p>

				<p> Les <strong>jointures internes</strong> peuvent être effectuées de deux façons différentes :
					<ul>
						<li> 
							<p> avec le mot-clé <kbd>WHERE</kbd> : ancienne syntaxe, à éviter mais à connaître. <br />
								<code> SELECT jeux_video.nom, proprietaires.prenom FROM proprietaires, jeux_video WHERE jeux_video.ID_proprietaire = proprietaire.ID </code> 
							</p>

							<p> Il est fortement conseillé d'utiliser des alias sur les noms des champs lorsqu'on fait des jointures : <br />
								<code> SELECT jeux_video.nom AS nom_jeu, proprietaires.prenom AS prenom_proprietaire FROM proprietaires, jeux_video WHERE jeux_video.ID_proprietaire = proprietaire.ID </code>
							</p>

							<p> On peut aussi donner un alias aux noms des tables, ce qui est fortement recommandé pour leur donner un nom plus court et plus facile à écrire : <br />
								<code> SELECT j.nom AS nom_jeu, p.prenom AS prenom_proprietaire FROM proprietaires AS p, jeux_video AS j WHERE j.ID_proprietaire = p.ID </code>
							</p>

							<p> Le mot-clé <kbd>AS</kbd> est en fait facultatif, on peut donc écrire : <br />
								<code> SELECT j.nom nom_jeu, p.prenom prenom_proprietaire FROM proprietaires p, jeux_video j WHERE j.ID_proprietaire = p.ID </code>
							</p>

						 </li>
						<li> 
							avec le mot-clé <kbd>JOIN</kbd> : nouvelle syntaxe, à utiliser car plus efficace et plus lisible. <br />
								<code> SELECT j.nom nom_jeu, p.prenom prenom_proprietaire FROM proprietaires p INNER JOIN jeux_video j ON j.ID_proprietaire = p.ID </code>
						</li>
					</ul>
				</p>

				<p> Les <strong>jointures externes</strong> ne se font qu'avec la syntaxe à base de <kbd>JOIN</kbd>. Il y a deux écritures à connaître :
					<ul>
						<li> 
							<p> <kbd>LEFT JOIN</kbd> : récupérer toute la table de gauche. <br />
							<code> SELECT j.nom nom_jeu, p.prenom prenom_proprietaire FROM proprietaires p LEFT JOIN jeux_video j ON j.ID_proprietaire = p.ID </code> <br />
							<kbd>proprietaires</kbd> est appelée la "table de gauche" et <kbd>jeux_video</kbd> la "table de droite". On demande à récupérer tout le contenu de la table de gauche, donc tous les propriétaires, même si ils n'ont pas d'équivalence dans la table de droite. </p>
						</li>
						<li> 
							<p> <kbd>RIGHT JOIN</kbd> : récupérer toute la table de droite. <br />
							<code> SELECT j.nom nom_jeu, p.prenom prenom_proprietaire FROM proprietaires p RIGHT JOIN jeux_video j ON j.ID_proprietaire = p.ID </code> <br />
							On demande à récupérer toutes les données de la table de droite, donc tous les jeux-vidéos, même si ils n'ont pas d'équivalence dans la table de gauche. </p>
						</li>
					</ul>

					


				<h2> Quelques fonctions </h2>

				<table>
					<thead>
						<tr>
							<th> Fonction </th>
							<th> Description </th>
							<th> Type retourné </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>nl2br(string)</kbd> </td>
							<td> Convertit les retours à la ligne en balises HTML <kbd>&lt;br /&gt;</kbd> </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>date('H', 'i', 'd', 'm', 'Y')</kbd> </td>
							<td> Renvoie une date (Heure, Minute, Jour, Mois, Année) </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>isset($_GET['nom_parametre'])</kbd> (ou $_POST) </td>
							<td> Détermine si une variable est déclarée et différente de NULL </td>
							<td> bool </td>
						</tr>
						<tr>
							<td> <kbd>htmlspecialchars(string)</kbd> </td>
							<td> Convertit les caractères spéciaux en entités HTML (permet d'échapper le code HTML et d'éviter des failles XSS) </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>strip_tags(string)</kbd> </td>
							<td> Supprime les balises HTML et PHP de la chaîne (permet d'échapper le code HTML et d'éviter des failles XSS) </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>fopen(string, string)</kbd> </td>
							<td> Ouvre un fichier ou une URL </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>pathinfo(string)</kbd> </td>
							<td> Retourne un array contenant ['dirname', 'basename', 'extension', 'filename'] </td>
							<td> array </td>
						</tr>
						<tr>
							<td> <kbd>move_uploaded_file(string, string)</kbd> </td>
							<td> Déplace un fichier téléchargé </td>
							<td> bool </td>
						</tr>
						<tr>
							<td> <kbd>basename(string)</kbd> </td>
							<td> Retourne le nom de la composante finale d'un chemin </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>print_r(array)</kbd> </td>
							<td> Permet de visualiser le contenu d'un tableau pour le débogage </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>array_key_exists(key, array)</kbd> </td>
							<td> Vérifie si une clé existe dans un tableau </td>
							<td> bool </td>
						</tr>
						<tr>
							<td> <kbd>in_array(value, array)</kbd> </td>
							<td> Vérifie si une valeur existe dans un tableau </td>
							<td> bool </td>
						</tr>
						<tr>
							<td> <kbd>array_search(value, array)</kbd> </td>
							<td> Recherche dans un tableau la clé associée à la valeur </td>
							<td> $key ou false </td>
						</tr>
						<tr>
							<td> <kbd>strlen(string)</kbd> </td>
							<td> Calcule la taille d'une chaîne </td>
							<td> int </td>
						</tr>
						<tr>
							<td> <kbd>str_replace(string1, string2)</kbd> </td>
							<td> Remplace toutes les occurences dans une chaîne </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>str_shuffle(string)</kbd> </td>
							<td> Mélange aléatoirement les caractères d'une chaîne </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>strtolower(string)</kbd> </td>
							<td> Renvoie une chaîne en minuscules </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>strtoupper(string)</kbd> </td>
							<td> Renvoie une chaîne en majuscules </td>
							<td> string </td>
						</tr>
						<tr>
							<td> <kbd>phpinfo()</kbd> </td>
							<td> Affiche des informations sur PHP </td>
							<td> </td>
						</tr>
					</tbody>
				</table>

				<h2> Récupérer les données des formulaires </h2>

				<table>
					<thead>
						<tr>
							<th> Formulaire </th>
							<th> Variable superglobale </th>
							<th> Donnée retournée </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;input type="text" /&gt;</kbd> (zone de texte monoligne) </td>
							<td> $_POST['name'] </td>
							<td> texte écrit par le visiteur </td>
						</tr>
						<tr>
							<td> <kbd>&lt;textarea&gt;</kbd> (grande zone de texte) </td>
							<td> $_POST['name'] </td>
							<td> texte écrit par le visiteur </td>
						</tr>
						<tr>
							<td> <kbd>&lt;select&gt;</kbd> (liste déroulante) </td>
							<td> $_POST['name'] </td>
							<td> <strong>value</strong> de l'option choisie </td>
						</tr>
						<tr>
							<td> <kbd>&lt;input type="checkbox" /&gt;</kbd> (cases à cocher) </td>
							<td> $_POST['name'] </td>
							<td> si case cochée, <strong>"on"</strong> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;input type="radio" /&gt;</kbd> (boutons radio) </td>
							<td> $_POST['name'] </td>
							<td> <strong>value</strong> du bouton d'option choisi </td>
						</tr>
					</tbody>
				</table>

				<h2> Variables superglobales </h2>

				<table>
					<thead>
						<tr>
							<th> Variable </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>$_SERVER</kbd> </td>
							<td> Valeurs renvoyées par le serveur. <kbd>$_SERVER['REMOTE_ADDR']</kbd> donne l'adresse IP du client qui à demandé à voir la page, ce qui peut être utilse pour l'identifier </td>
						</tr>
						<tr>
							<td> <kbd>$_ENV</kbd> </td>
							<td> Variables d'environnement données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale </td>
						</tr>
						<tr>
							<td> <kbd>$_SESSION</kbd> </td>
							<td> Variables de sessions qui restent stockées sur le serveur le temps de la présence d'un visiteur </td>
						</tr>
						<tr>
							<td> <kbd>$_COOKIE</kbd> </td>
							<td> Valeurs des cookies enregistrés sur l'ordinateur du visiteur. Permet de stocker des informations pendant plusieurs mois sur l'ordinateur du visiteur (pour se souvenir de son nom par exemple) </td>
						</tr>
						<tr>
							<td> <kbd>$_GET</kbd> </td>
							<td> Contient les données envoyées en paramètres dans l'URL </td>
						</tr>
						<tr>
							<td> <kbd>$_POST</kbd> </td>
							<td> Contient les informations qui viennent d'être envoyées par un formulaire </td>
						</tr>
						<tr>
							<td> <kbd>$_FILES</kbd> </td>
							<td> Contient la liste des fichiers qui ont été envoyés via un formulaire </td>
						</tr>
					</tbody>
				</table>


				<h2> Traitement de l'envoi d'un fichier </h2>

				<p> Pour chaque fichier envoyé, une variable <kbd>$_FILES['name']</kbd> est créée. Cette variable est un tableau qui contient plusieurs informations sur le fichier :

				<table>
					<thead>
						<tr>
							<th> Variable </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>$_FILES['name_fichier']['name']</kbd> </td>
							<td> Contient le nom du fichier envoyé </td>
						</tr>
						<tr>
							<td> <kbd>$_FILES['name_fichier']['type']</kbd> </td>
							<td> Indique le type du fichier envoyé. Si c'est un GIF, le type sera <kbd>image/gif</kbd> </td>
						</tr>
						<tr>
							<td> <kbd>$_FILES['name_fichier']['size']</kbd> </td>
							<td> Indique la taille du fichier envoyé (en octets). La taille de l'envoi est limitée par PHP (par défaut, 8 Mo max) </td>
						</tr>
						<tr>
							<td> <kbd>$_FILES['name_fichier']['tmp_name_']</kbd> </td>
							<td> Contient l'emplacement temporaire du fichier </td>
						</tr>
						<tr>
							<td> <kbd>$_FILES['name_fichier']['error']</kbd> </td>
							<td> Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué. Vaut 0 s'il n'y a pas d'erreur </td>
						</tr>
					</tbody>
				</table>

				<p> Il y a autant de variable $_FILES['name'] qu'il y a de fichiers envoyés. </p>

				<p> Voir la fonction <kbd>pathinfo(string)</kbd> pour récupérer l'extension. </p>

				<p> Voir la fonction <kbd>move_uploaded_file(string, string)</kbd> pour accepter le fichier. <br />
				Voir la fonction <kbd>basename(string)</kbd> pour extraire le nom du fichier. </p>

				<p> Lorsque l'on met le script sur Internet avec un logiciel FTP, il faut vérifier que le dossier (créé pour stocker les fichiers envoyés) existe et ait les droits d'écriture. </p>

				<br />

				<?php

				$prenoms = array('Marc', 'José', 'François', 'Clément', 'Thomas', 'Romain');

				/*foreach($prenoms as $element) {
					echo $element . '<br />';
				}*/

				$personne = array('nom' => 'Billet', 'prenom' => 'François', 'age' => 24, 'single' => true);

				/*foreach($personne as $cle => $element) {
					echo 'mon ' . $cle . ' est ' . $element . '<br />';
				}*/

				?>

				<?php
				function deg2($a,$b,$c) {
					$delta = pow($b,2) - 4*$a*$c;
					if ($delta>0) {
						echo 'Il existe 2 solutions';
					}

					else if ($delta==0) {
						return (-$b-sqrt($delta)) / 2*$a;
					}

					else {
						echo 'Il n\'y a pas de solution !';
					}
				}

				deg2(1,1,1);
				echo '<br />';
				echo deg2(1,2,1);
				echo '<br />';
				deg2(1,3,1);

				?>

			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
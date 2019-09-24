<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Fonctions et dates en SQL </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>
				<h1 class="titre_php"> Fonctions et dates en SQL </h1>

				<h2> Fonctions SQL </h2>

				<ul>
					<li> <strong>fonctions scalaires</strong> : agissent sur chaque entrée. Le contenu de la table n'est pas modifié et un champ virtuel (alias) est créé le temps de la requête </li>
					<li> <strong>fonctions d'agrégat</strong> : calculs faits sur l'ensemble de la table pour retourner <strong>une</strong> valeur </li>
				</ul>

				<p> Quelques fonctions scalaires :
					<ul>
						<li> <code> SELECT UPPER(nom) AS nom_maj FROM jeux_video </code> (convertit en majuscules) </li>
						<li> <code> SELECT LOWER(nom) AS nom_min FROM jeux_video </code> (convertir en minuscules) </li>
						<li> <code> SELECT LENGTH(nom) AS longueur_nom FROM jeux_video </code> (compte le nombre de caractères) </li>
						<li> <code> ROUND(prix, 2) AS prix_arrondi FROM jeux_video </code> (arrondir un nombre décimal) </li>
					</ul>
					On peut récupérer le contenu des autres champs sans forcément leur appliquer une fonction.
				</p>

				<p> Quelques fonctions d'agrégat :
					<ul>
						<li> <code> SELECT AVG(prix) AS prix_moyen FROM jeux_video </code> (calcule la moyenne) </li>
						<li> <code> SELECT SUM(prix) AS prix_total FROM jeux_video >HERE possesseur='Patrick </code> (additionne les valeurs) </li>
						<li> <code> SELECT MAX(prix) AS prix_max FROM jeux_video </code> (retourne la valeur maximale) </li>
						<li> <code> SELECT MIN(prix) AS prix_min FROM jeux_video </code> (retourne la valeur minimale) </li>
						<li> <code> SELECT COUNT(*) AS bnjeux FROM jeux_video WHERE possesseur='Florent' </code> (compte le nombre d'entrées) </li>
					</ul>
					On ne <strong>doit surtout pas</strong> récupérer d'autres champs de la table quand on utilise une fonction d'agrégat. <br />
					Avec ces fonctions, il n'est pas nécessaire de faire une boucle pour parcourir les résultats car il n'y en a qu'un.
				</p>

				<p> Fonction COUNT :
					<ul>
						<li> Pour compter uniquement les entrées pour lesquelles l'un des champs n'est pas vide (non NULL), on indique en paramètre le nom du champ à analyser (au lieu de *) </li>
						<li> Pour compter le nombre de valeurs distinctes sur un champ précis, on utilise le mot-clé <strong>DISTINCT</strong> devant le nom du champ à analyser : <br />
							<code> SELECT COUNT(DISTINCT possesseur) as nbpossesseurs FROM jeux_video </code> </li>
					</ul>
				</p>

				<p> On peut utiliser <kbd>GROUP BY</kbd>> en combinaison d'une fonction d'agrégat pour obtenir des informations sur des groupes de données : <br />
					<code> SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console </code> <br />
					On récupère le prix moyen et la console, et on groupe par console.
				</p>

				<p> <kbd>HAVING</kbd> est un peu l'équivalent de <kbd>WHERE</kbd>, mais il agit sur les données une fois qu'elles ont été regroupées. C'est donc une façon de filtrer les données à la fin des opérations. Exemple : <br />
					<code> SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10 </code> <br />
					On récupère uniquement la liste des consoles et leur prix moyen si ce prix moyen ne dépasse pas 10 euros. 
				</p>

				<p> Attention : <kbd>HAVING</kbd> ne doit s'utiliser que sur le résultat d'une fonction d'agrégat. Voilà pourquoi on l'utilise ici sur prix_moyen et non sur console. </p>

				<p> <kbd>WHERE</kbd> agit en premier alors que <kbd>HAVING</kbd> agit en second, après le groupement de données. <br />
				On peut d'ailleurs combiner les 2 : <br />
					<code> SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur='Patrick' GROUP BY console HAVING prix_moyen <= 10 </code> <br />
					On récupère le prix moyen par console de tous les jeux de Patrick (<kbd>WHERE</kbd>), à condition que le prix moyen des jeux de la console ne dépasse pas 10 euros (<kbd>HAVING</kbd>). 
				</p>

				<h2> Les dates </h2>

				<p> Les différents types de dates que peut stocker MySQL :
					<ul>
						<li> <kbd>DATE</kbd> : stocke une date au format AAAA-MM-JJ </li>
						<li> <kbd>TIME</kbd> : stocke un moment au format HH:MM:SS </li>
						<li> <kbd>DATETIME</kbd> : stocke la combinaison d'une date et d'un moment au format AAAA-MM-JJ HH:MM:SS </li>
						<li> <kbd>TIMESTAMP</kbd> : stocke le nombre de secondes passées depuis le 1er janvier 1970 à 0h 00 </li>
						<li> <kbd>YEAR</kbd> : stocke une année, soit au format AA, soit au format AAAA </li>
					</ul>
				On peut utiliser <kbd>DATE</kbd> quand le moment de la journée import peu, et <kbd>DATETIME</kbd> quand on a besoin du jour et de l'heure précise à la seconde près. </p>

				<p> Il est préférable de donner un autre nom au champ que <kbd>date</kbd>. C'est un mot-clé du langage SQL, ce qui peut provoquer des erreurs avec d'autres SGBD comme Oracle. </p>

				<p> Les champs de type <kbd>date</kbd> s'utilisent comme des chaînes de caractères. Il faut donc les entourer d'apostrophes : <br />
					<code> SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 15:28:22' </code> <br />
				Pour obtenir la liste de tous les messages postés après cette date </p>

				<p> En SQL, pour récupérer des données comprises entre deux intervalles, on peut utiliser le mot-clé <kbd>BETWEEN</kbd> : <br />
					<code> SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00' </code>
				</p>

				<p> Quelques fonctions de gestion des dates :
					<ul>
						<li> <kbd>NOW()</kbd> : obtenir la date et l'heure actuelles <br />
							<code> INSERT INTO minichat(pseudo, message, date) VALUES('Francis', 'coucou', NOW()) </code> <br />
						Il exite aussi les fonctions <kbd>CURDATE()</kbd> et <kbd>CURTIME()</kbd> qui retournent respectivement la date (AAAA-MM-JJ) et l'heure (HH:MM:SS) </li>

						<li> <kbd>DAY()</kbd>, <kbd>MONTH()</kbd>, <kbd>YEAR()</kbd> : extraire le jour, le mois ou l'année <br />
							<code> SELECT pseudo, message, DAY(date) AS jour FROM minichat </code> </li>

						<li> <kbd>HOUR()</kbd>, <kbd>MINUTE()</kbd>, <kbd>SECOND()</kbd> : extraire les heures, minutes, secondes <br />
							<code> SELECT pseudo, message, HOUR(date) AS heure FROM minichat </code> </li>

						<li> <kbd>DATE_FORMAT</kbd> : formater une date <br />
							<code> SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat </code> <br />
							Les symboles <kbd>%d</kbd>, <kbd>%m</kbd>, <kbd>%Y</kbd> (etc.) sont remplacés par le jour, le mois, l'année, etc. <br />
						Il existe beaucoup d'autres symboles pour extraire par exemple le nom du jour, le numéro du jour dans l'année, etc. </li>

						<li> <kbd>DATE_ADD</kbd> et <kbd>DATE_SUB</kbd> : ajouter ou soustraire des dates <br />
							<code> SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat </code> <br />
						Le champ <kbd>date_expiration</kbd> correspond à la date de l'entrée + 15 jours. Le mot-clé <kbd>INTERVAL</kbd> ne doit pas être changé mais on peut remplacer <kbd>DAY</kbd> par <kbd>MONTH</kbd>, <kbd>YEAR</kbd>, <kbd>HOUR</kbd>, <kbd>MINUTE</kbd>, <kbd>SECOND</kbd>, etc. </li>
					</ul>
				</p>
			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
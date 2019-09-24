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
				<h1 class="titre_php"> Lire et écrire des données dans la BDD </h1>

				<h2> Lire des données </h2>

				<p> On utilise l'extension <strong>PDO</strong> pour se connecter à la base de données MySQL depuis PHP. C'est un outil complet qui permet d'accéder à n'importe quel type de base de données (MySQL, PostgreSQL, etc.). </p>

				<p> Pour se connecter à MySQL avec PDO : <br />
					<code> $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); </code> <br />

				Ce code contient le nom de l'hôte (ici localhost car MySQL est installé sur le même ordinateur que PHP), le nom de la base de données, le login et le mot de passe. Le dernier paramètre permet d'afficher des détails sur les erreurs. </p>

				<p> Le premier paramètre (qui commence par <kbd>mysql</kbd>) s'appelle le DSN: Data Source Name. C'est généralement le seul qui change en fonction du type de base de données auquel on se connecte. </p>

				<p> Pour éviter que le mot de passe de la base de données s'affiche à l'écran du visiteur en cas d'erreur, on <strong>traite</strong> l'erreur avec <kbd>try</kbd> et <kbd>catch</kbd>. <br />
				En cas d'erreur, PDO renvoie une <strong>exception</strong> qui permet de "capturer" l'erreur. </p>

				<pre> 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e) {
	die('Erreur :' . $e->getMessage());
}
				</pre>

				<p> Faire une requête : <br />
					<code> $reponse = $bdd->query('SELECT name, console FROM jeux_video'); </code>
				</p>

				<p> Afficher une requête : <br />
					<pre>
while ($donnees = $reponse->fetch()) {
	echo $donnees['console'] . ' - ' . $donnees['nom'];
}

$reponse->closeCursor(); </pre>
				La dernière ligne du code précédent provoque la "fermeture du curseur d'analyse des résultats". Il faut effectuer cet appel à <kbd>closeCursor()</kbd> chaque fois que l'on a fini de traiter le retour d'une requête, afin d'éviter d'avoir des problèmes à la requête suivante. </p> 

				<p> <kbd>LIMIT</kbd> permet de ne sélectionner qu'une partie des résultats. C'est très utile lorsqu'il y a beaucoup de résultats et qu'on veut les paginer (30 résultats sur la page 1, les 30 suivants sur la page 2, etc.) </p>

				<p> <code> SELECT * FROM jeux_video LIMIT 0,20; </code> <br />
				On lit la table à partir de l'entrée 0 et on sélectionne 20 entrées. </p>

				<p> C'est une <strong>très</strong> mauvaise idée de concaténer une variable dans une requête (risque d'injection SQL !). <br />
				Au lieu de cela, on va utiliser des <strong>requêtes préparées</strong>. </p>

				<p> Les requêtes préparées sont beaucoup plus sûres et beaucoup plus rapides pour la BDD si la requête est exécutée plusieurs fois. </p>

				<p> <pre>
$req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur = ? AND prix <= ?');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));

while($donnees = $req->fetch()) {
	echo 'p' . $donnees['nom'] . ' - ' . $donnees['prix'] . '/p';
}

$req->closeCursor(); </pre>
				A noter : Bien que la requête soit "sécurisée", il faudrait quand même vérifier que $_GET['prix_max'] contient bien un nombre et qu'il est compris dans un intervalle correct. </p>

				<p> Si la requête contient beaucoup de petites variables, il peut être plus pratique de nommer les marqueurs plutôt que d'utiliser des points d'interrogation : <br />
					<code> $req = $bdd->prepare('SELECT nom,prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax'); <br />
					$req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));
					</code>
				</p>

				<h2> Ecrire des données </h2>

				<p> Ajouter des données : <br />
				<code> INSERT INTO jeux_video(ID, nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES ('', 'Battelfield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale'); </code> <br />
				On peut se passer du champ ID car il a la propriété <kbd>auto_increment</kbd>. On peut aussi se passer des noms de champs en premier, mais c'est moins claire. </p>

				<p> <code> $bdd->exec('INSERT INTO ...'); </code> pour insérer manuellement. </p>

				<pre>
$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires));</pre>

				<p> Modifier des données : <br />
				<code> UPDATE jeux_video SET prix=10, nbre_joueurs_max = 31 WHERE nom='Battlefield 1942'; </code> </p>

				<p> <code> $nb_modifs = $bdd->exec('UPDATE ...'); </code> pour modifier manuellement. Cet appel renvoie le nombre de lignes modifiées. </p>

				<p> Même chose que INSERT INTO pour utiliser une requête préparée. </p>

				<p> Supprimer des données : <br />
				<code> DELETE FROM jeux_video WHERE nom='Battlefield 1942' </code> </p>

				<p> <code> $reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo())); </code> pour afficher l'erreur renvoyée par MySQL (si il y en a une) </p>
			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
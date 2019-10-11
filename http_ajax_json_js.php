<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> HTTP, AJAX et JSON </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_js"> </h1>

				<h2> HTTP, AJAX et JSON </h2>

				<p> Le protocole HTTP est le socle technique du Web. Il s'agit d'un protocole client/serveur qui fonctionne suivant un mécanisme requête/réponse. Les principaux types de requêtes HTTP sont <kbd>GET</kbd> (pour demander une ressource au serveur) et <kbd>POST</kbd> (pour lui envoyer des données). Une réponse HTTP contient un code indiquant le résultat de la requête : 200 pour un succès, 404 si la ressource n'a pas été trouvée, etc. </p>

				<p> Les applications web modernes interceptent les actions de l'utilisateur, lancent des requêtes HTTP <strong>asynchrones</strong> et ne mettent à jour qu'une partie de la page web avec leurs résultats. Les technologies utilisées sont regroupées sous l'acronyme <strong>AJAX</strong> (Asynchronous JavaScript And XML). <br />
					Les requêtes HTTP asynchrones utilisées avec AJAX permettent de ne pas bloquer le navigateur en attentant la réponse du seveur. <br />
					Pour des raisons de sécurité, les requêtes AJAX dites <em>cross-domain</em> entre deux domaines différents sont interdites (par défaut).
				</p>

				<p> Le format de données <strong>JSON</strong> (JavaScript Object Notation) constitue le standard actuel pour les échanges de données sur le Web, notamment avec AJAX. Il s'agit d'une syntaxe pour décrire des information structurées sous une forme proche des objets JavaScript. </p>

				<h3> Interroger un serveur Web </h3>

				<p> L'objet <kbd>XMLHttpRequest</kbd> permet de créer des requêtes HTTP en JS. <br />
					Sa méthode <kbd>open</kbd> permet de configurer la requête HTTP avant son lancement. Elle prend en paramètres le type de requête HTTP (le plus souvent <kbd>GET</kbd>, <kbd>POST</kbd> ou <kbd>PUT</kbd>), l'URL cible, ainsi qu'un booléen indiquant si la requête sera asynchrone ou non. <br />
					Sa méthode <kbd>send</kbd> envoie la requête HTTP vers l'URL cible fournie à <kbd>open</kbd>. Elle prend en paramètre l'éventuelle information envoyée au serveur (requêtes <kbd>POST</kbd> ou <kbd>PULL</kbd>), ou bien <kbd>null</kbd> dans le cas d'une requête <kbd>GET</kbd>. <br />
					Sa propriété <kbd>responseText</kbd> contient sous forme textuelle la réponse renvoyée par le serveur à la requête HTTP. 
				</p>

				<p> Lorsqu'on utilise les requêtes synchrones, il se peut que la console affiche un message d'avertissement pour rappeler au développeur qu'il est risqué d'utiliser ces requêtes-là en JavaScript car pendant toute la durée de l'échange, la page web semblera bloquée et ne répondra plus aux actions de l'utilisateur. </p>

				<p> Pour passer en mode asynchrone, on utilise les évènements. <br />
					Un évènement de type <kbd>load</kbd> indique la fin du traitement de la requête par le serveur. <br />
					La différence entre une requête synchrone et asynchrone est imperceptible pour l'utilisateur lorsque le client et serveur s'exécutent sur la même machine et que le traitement de la requête est instantané. 
				</p>

				<h3> Gestion des erreurs </h3>

				<p> On distingue deux principaux cas d'erreur :
					<ul>
						<li> La requête n'a pas réussi à atteindre le serveur (nom du serveur incorrect, erreur réseau, etc). Ces erreurs déclenchent l'apparition d'un évènement de type <kbd>error</kbd> sur la requête </li>
						<li> La requête a atteint le serveur, mais son traitement a échoué (ressource demandé non trouvée, problème interne au serveur, etc). C'est le code de retour HTTP de la requête, contenu dans sa propriété <kbd>status</kbd>, qui indique son résultat. <br />
						Un code supérieur ou égal à 200 et strictement inférieur à 400 signale la réussite de la requête </li>
					</ul>
				</p>

				<p> Voilà une fonction <strong>générique</strong> permettant d'exécuter une requête HTTP asynchrone, autrement dit un appel AJAX : </p>

<pre><code>// Exécute un appel AJAX GET
// Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès

function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(null);
}
</code></pre>
	
				<p> Cette fonction prend en paramètre l'URL cible et la fonction appelée en cas de succès de la requête. En effet, JavaScript permet de passer des fonctions en paramètre comme n'importe quelle valeur. Le terme <strong>callback</strong> utilisé ici est souvent employé pour désigner une fonction appelée ultérieurement, en réaction à un certain évènement. </p>

				<p> Pour utiliser la fonction, il suffit de l'appeler en lui donnant la cible et la fonction à utiliser : 
					<code>ajaxGet("http://localhost/javascript-web-srv/data/langages.txt", console.log);</code>
				</p>

				<p> Pour pouvoir utiliser la fonction AJAX dans plusieurs fichiers, on la définit dans un autre fichier JavaScript inclus partout où c'est nécessaire. <br />
					Le fichier <kbd>ajax.js</kbd> (contenant la fonction) doit toujours être inclus dans la page web AVANT les autres fichiers JavaScript qui utilisent les fonctions qu'il contient.
				</p>

				<h3> Appels AJAX et JSON </h3>

				<p> Transmettre des informations sous forme d'un fichier texte se révèle vite limité lorsque ces informations sont <strong>structurées</strong>. C'est pourquoi on utilise souvent le format JSON pour échanger des données entre programmes. </p>

				<p> La fonction <kbd>JSON.parse</kbd> permet de transformer une chaîne de caractères conforme au format JSON en un objet JavaScript. <br />
					La fonction <kbd>JSON.stringify</kbd> joue le rôle inverse : elle transforme un objet JavaScript en chaîne de caractères conforme au format JSON.
				</p>

				<p> La technique utilisée pour récupérer des données JSON est la même que pour un fichier texte. Seul le traitement de la réponse reçue diffère pour s'adapter au format JSON : </p>

<pre><code>ajaxGet("http://localhost/javascript-web-srv/data/films.json", function (reponse) {
    // Transforme la réponse en tableau d'objets JavaScript
    var films = JSON.parse(reponse);
    films.forEach(function (film) {
        console.log(film.titre);
    })
});
</code></pre>

				<h2> Utiliser des API web </h2>

				<p> Une <strong>API</strong> (Application Programming Interface ou inteface de programmation) est un ensemble de services offert par un logiciel à d'autres logiciels. <br />
					On appelle <strong>API web</strong> une API accessible via les technologies du Web, notamment le protocole HTTP ou sa version sécurisée HTTPS. <br />
					Bon nombre d'API web offrent aux développeurs le moyen d'exploiter leurs données et leurs services. <br />
					Une API REST est un type particulier d'API web.
				</p>

				<p> Pour pouvoir utiliser une API web, il faut connaître son adresse et son mode de fonctionnement. La plupart des API web sont accessibles via une URL et utilisent le format JSON pour les échanges de données. </p>

				<p> L'utilisation d'une API web se fait exactement comme l'interrogation d'un serveur web local. La fonction <kbd>ajaxGet</kbd> est réutilisée pour fournir le mécanisme d'appel et la gestion des erreurs. </p>

				<p> Une fois l'API web trouvée, il faut étudier sa documentation afin de découvrir comment l'utiliser ou la tester avec RESTClient (Firefox) ou Postman. </p>

				<p> Toutes les API web de sont pas accessibles librement et sans restriction. Afin de se prémunir contre d'éventuels abus, la plupart d'entre elles imposent au client qui souhaite les utiliser de s'identifier. Des limites d'utilisation peuvent s'ajouter : elles concernent le nombre d'appels par heure ou le volume de données transférées. </p>

				<p> Il existe plusieurs mécanismes pour authentifier le client d'une API. Le plus simple repose sur le principe de <strong>clé d'accès</strong> (access key). Une clé d'éccès permet d'identifier un client de manière unique. Elle se présente souvent sous la forme d'une longue série de lettres et de chiffres ajoutées dans l'URL de l'API. </p>

				<h2> Envoyer des données à un serveur web </h2>

				<p> L'envoi d'informations à un serveur s'effectue grâce à une requête HTTP <kbd>POST</kbd> contenant les données à envoyer. Il existe deux techniques d'envoi :
					<ul>
						<li> Intégrer les données directement dans la requête HTTP d'envoi. C'est de cette manière que fonctionne la soumission d'un formulaire HTML </li>
						<li> Transmettre les données au format JSON </li>
					</ul>
				</p>

				<p> L'objet <kbd>FormData</kbd> facilite grandement l'envoi d'un formulaire vers un serveur. Il peut être utilisé indépendamment d'un formulaire, en lui ajoutant une à une les données à transmettre grâce à sa méthode <kbd>append</kbd>. Cette méthode prend en paramètres le nom et la valeur de la donnée ajoutée. </p>

				<h3> Écriture d'une fonction générique </h3>

				<p> Pour gérer le résultat et les éventuelles erreurs liées à l'appel AJAX, on définit une fonction générique (comme pour les appels de récupération) que l'on pourra réutiliser à chaque nouvel envoi de données : </p>

<pre><code>// Exécute un appel AJAX POST
// Prend en paramètres l'URL cible, la donnée à envoyer et la fonction callback appelée en cas de succès

function ajaxPost(url, data, callback) {
    var req = new XMLHttpRequest();
    req.open("POST", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(data);
}
</code></pre>

				<p> On peut alors utiliser cette fonction pour écrire des données dans un fichier (par exemple) : </p>

<pre><code>var commande = new FormData();
commande.append("couleur", "rouge");
commande.append("pointure", "43");
// Envoi de l'objet FormData au serveur
ajaxPost("http://localhost/javascript-web-srv/post_form.php", commande,
    function (reponse) {
        console.log("Commande envoyée au serveur");
    }
);
</code></pre>

				<h3> Soumission d'un formulaire avec FormData </h3>

				<p> L'intérêt principal de l'objet <kbd>FormData</kbd> est de simplifier la soumission d'un formulaire avec AJAX : </p>

<pre><code>var form = document.querySelector("form");
form.addEventListener("submit", function (e) {
    e.preventDefault();
    // Récupération des champs du formulaire dans l'objet FormData
    var data = new FormData(form);
    // Envoi des données du formulaire au serveur
    // La fonction callback est ici vide
    ajaxPost("http://localhost/javascript-web-srv/post_form.php", data, function () {});
});
</code></pre>

				<h3> Envoyer des données JSON </h3>

				<p> Dans certains cas (notamment l'utilisation d'une API web), le serveur attendra du client qu'il lui envoie des données structurées au format JSON. Cela nécessite de définir le type de contenu de la requête HTTP comme étant du JSON : </p>

<pre><code>// Le paramètre isJson permet d'indiquer si l'envoi concerne des données JSON
function ajaxPost(url, data, callback, isJson) {
    var req = new XMLHttpRequest();
    req.open("POST", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    if (isJson) {
        // Définit le contenu de la requête comme étant du JSON
        req.setRequestHeader("Content-Type", "application/json");
        // Transforme la donnée du format JSON vers le format texte avant l'envoi
        data = JSON.stringify(data);
    }
    req.send(data);
}
</code></pre>

				<p> A savoir : le code précédent utilisant <kbd>FormData</kbd> fonctionne toujours avec cette version de la fonction <kbd>ajaxPost</kbd> car JavaScript permet d'appeler une fonction sans définir tous ses paramètres. </p>

				<p> Dans ces cas là, on enverra les données au format JSON de cette façon : </p>

<pre><code>// Création d'un objet représentant un film
var film = {
    titre: "Zootopie",
    annee: "2016",
    realisateur: "Byron Howard et Rich Moore"
};
// Envoi de l'objet au serveur
ajaxPost("http://localhost/javascript-web-srv/post_json.php", film,
    function (reponse) {
        // Le film est affiché dans la console en cas de succès
        console.log("Le film " + JSON.stringify(film) + " a été envoyé au serveur");
    },
    true // Valeur du paramètre isJson
);
</code></pre>

			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
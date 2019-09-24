<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Les expressions régulières en PHP </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<h1 class="titre_php"> Les expressions régulières </h1>

			<p> Les expressions régulières (ou <strong>regex</strong>) constituent un système très puissant et très rapide pour faire des recherches dans des chaînes de caractères. Elles vont nous permettre notamment de :
				<ul>
					<li> vérifier si l'adresse e-mail entrée par le visiteur a une forme valide </li>
					<li> modifier une date du format américain au format français </li>
					<li> remplacer automatiquement toutes les adresses "http" par des liens cliquables </li>
					<li> créer notre propre langage simplifié à partir du HTML, comme le bbCode </li>
				</ul>
			</p>

			<p> Il existe deux types d'expressions régulières :
				<ul>
					<li> <strong>POSIX</strong> : langage d'expressions régulières mis en avant par PHP. Se veut un peu plus simple que PCRE mais plus lent </li>
					<li> <strong>PCRE</strong> : expressions régulières issues du langage Perl. Considérées un peu plus complexes mais bien plus rapides et performantes </li>
				</ul>
			</p>

			<p> Il existe plusieurs fonctions utilisant le "langage PCRE" et qui commencent toutes par <kbd>preg_</kbd> :
				<ul>
					<li> <kbd>preg_grep</kbd>; </li>
					<li> <kbd>preg_split</kbd>; </li>
					<li> <kbd>preg_quote</kbd>; </li>
					<li> <kbd>preg_match</kbd>; </li>
					<li> <kbd>preg_match_all</kbd>; </li>
					<li> <kbd>preg_replace</kbd>; </li>
					<li> <kbd>preg_replace_callback</kbd>; </li>
				</ul>
				Chaque fonction a sa particularité, certaines permettent de faire simplement une recherche, d'autres une recherche et un remplacement.
			</p>

			<p> La fonction <kbd>preg_match</kbd> renvoie <kbd>true</kbd> si elle a trouvé le mot que l'on cherchait, <kbd>false</kbd> sinon. </p>

			<p> Une regex (expression régulière) est toujours entourée de caractères spéciaux appelés <strong>délimiteurs</strong>. On peut choisir n'importe quel caractère spécial comme délimiteur: <kbd>#guitare#</kbd> </p>

			<p> Les regex sont "sensibles à la casse", c'est à dire qu'elles font la différence entre majuscules et minuscules. Il suffit de rajouter la lettre "i" comme option après le 2e dièse pour qu'elles ne fassent plus la différence entre majuscules et minuscules : <kbd>#guitare#i</kbd> </p>

			<p> On peut laisser plusieurs possibilités à la regex avec le symbole OU : <kbd>#guitare|piano|basse#</kbd> </p>

			<p> Si on place le symbole <kbd>^</kbd> devant un mot, il devra obligatoirement se trouver au début de la chaîne : <kbd>#^Bonjour#</kbd>. <br />
				De même, si on place le symbole <kbd>$</kbd> à la fin d'un mot, il devra se trouver en toute fin de chaîne : <kbd>#Aurevoir$#</kbd>
			</p>

			<p> Les <strong>classes de caractères</strong> permettent de tester beaucoup plus de possibilités de recherche à la fois, tout en étant précis : <kbd>#gr[aoi]s#</kbd> reconnaît gras, gros et gris. </p>

			<p> Les <strong>intervalles de classe</strong> permettent d'autoriser toute une plage de caractères : <kbd>[a-z]</kbd> pour accepter une lettre, <kbd>[0-9]</kbd> pour accepter un chiffre ou même <kbd>[a-zA-Z0-9]</kbd> pour accepter une lettre ou un chiffre. </p>

			<p> Si on place le symbole <kbd>^</kbd> à l'intérieur d'une classe, on indique qu'on ne veut PAS ce caractère là : <kbd>#^[^a-z]#</kbd> signifie que la chaîne ne commence pas par une lettre minuscule. </p>

			<p> Les <strong>quantificateurs</strong>sont des symboles qui permettent de dire combien de fois peuvent se répéter un caractère ou une suite de caractères. Trois symboles sont à retenir : 
				<ul>
					<li> <kbd>?</kbd> : la lettre est facultative. Elle peut y etre <strong>0 ou 1 fois</strong>. <br />
						<kbd>#chiens?#</kbd> reconnaît "chien" et "chiens" </li>
					<li> <kbd>+</kbd> : la lettre est obligatoire. Elle peut y être <strong>1 ou plusieurs fois</strong> <br />
						<kbd>#[0-9]+#</kbd> reconnaît n'importe quel nombre </li>
					<li> <kbd>*</kbd> : la lettre est facultative. Elle peut y être <strong>0, 1 ou plusieurs fois</strong> <br />
						<kbd>#^Bla(bla)*$#</kbd> reconnaît "Bla", "Blabla", "Blablabla", etc. </li>
				</ul>
			</p>

			<p> Les accolades permettent d'indiquer un nombre de répétions. Il y a trois façons de les utiliser :
				<ul>
					<li> <kbd>{3}</kbd> : doit être répété <strong>exactement 3 fois</strong> </li>
					<li> <kbd>{3,5}</kbd> : doit être répété <strong>de 3 à 5 fois</strong> </li>
					<li> <kbd>{3,}</kbd> : doit être répété <strong>3 fois ou plus</strong> </li>
				</ul>
			</p>

			<p> On remarque que :
				<ul>
					<li> <kbd>?</kbd> revient à écrire {0,1} </li>
					<li> <kbd>+</kbd> revient à écrire {1,} </li>
					<li> <kbd>*</kbd> revient à écrire {0,} </li>
				</ul>
			</p>

			<p> Les métacaractères en PCRE : <kbd> # ? ^ $ ( ) [ ] { } ? + * . \ |</kbd>. Si on recherche "Quoi ?", on doit <strong>échapper</strong> le "?" en mettant un antislash <kbd>\</kbd> devant : <kbd>#Quoi \?#</kbd>. <br />
			C'est la même chose pour tous les autres métacaractères (<kbd>\\</kbd> pour chercher un <kbd>\</kbd>). </p>

			<p> On peut mettre des accents dans les classes de caractères : <kbd>#[a-zéèàêâùïüë]</kbd>. <br />
			On peut aussi mettre des métacaractères <strong>sans les échapper</strong> ! A l'intérieur des crochets, ils ne comptent plus : <kbd>#[a-z?+*{}]#</kbd>. <br />
			Cependant, il y a 3 cas particuliers :
				<ul>
					<li> <kbd>#</kbd> : sert toujours à indeiquer la fin de la regex. Pour l'utiliser, il faut mettre un antislash devant, même dans une classe de caractère </li>
					<li> <kbd>]</kbd> : indique la fin de la classe. Pour l'utiliser, il faut mettre un antislash devant, même dans une classe de caractère </li>
					<li> <kbd>-</kbd> : sert à définir une intervalle de classe. Pour l'utiliser, il faut le mettre soit au début de la classe, soit à la fin. Par exemple : <kbd>[a-z0-9-]</kbd> pour chercher une lettre, un chiffre ou un tiret </li>
				</ul>
			</p>

			<p> Les classes abrégées (ou raccourcis) :
				<table>
					<thead>
						<tr>
							<th> Raccourci </th>
							<th> Signification </th>
						</tr> 
					</thead>
					<tbody>
						<tr>
							<td> \d </td>
							<td> Undique un chiffre. <br />
								Revient à taper <kbd>[0-9]</kbd> 
							</td>
						</tr>
						<tr>
							<td> \D </td>
							<td> Indique ce qui n'est PAS un chiffre. <br />
								Revient à taper <kbd>[^0-9]</kbd>
							</td>
						</tr>
						<tr>
							<td> \w </td>
							<td> Indique un caractère alphanumérique ou un tiret de soulignement. <br />
								Revient à taper <kbd>[a-zA-Z0-9-]</kbd>
							</td>
						</tr>
						<tr>
							<td> \W </td>
							<td> Indique ce qui n'est PAS un mot. <br />
								Revient à taper <kbd>[^a-zA-Z0-9-]</kbd>
							</td>
						</tr>
						<tr>
							<td> \t </td>
							<td> Indique une tabulation </td>
						</tr>
						<tr>
							<td> \n </td>
							<td> Indique une nouvelle ligne </td>
						</tr>
						<tr>
							<td> \r </td>
							<td> Indique un retour chariot </td>
						</tr>
						<tr>
							<td> \s </td>
							<td> Indique un espace blanc </td>
						</tr>
						<tr>
							<td> \S </td>
							<td> Indique ce qui n'est PAS un espace blanc (<kbd>\t \n \r</kbd>) </td>
						</tr>
						<tr>
							<td> . </td>
							<td> Indique n'importe quel caractère </td>
						</tr>
					</tbody>
				</table>

				<br />
				A noter : Le point indique tout <strong>sauf les entrées</strong> (<kbd>\n</kbd>). Pour qu'il indique tout, il faut utiliser l'option "s" de PCRE : <kbd>#[0-9]-.#s</kbd>
			</p>

			<p> Regex qui vérifie un numéro de téléphone : <kbd>#^0[0-9]([-. ]?[0-9]{2}){4}$#</kbd> <br />
				Regex qui vérifie une adresse e-mail : <kbd>#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#</kbd>
			</p>

			<p> MySQL comprend les regex, mais seulement en langage POSIX (et pas PCRE). Pour faire une regex POSIX :
				<ul>
					<li> il n'y a pas de délimiteur ni d'options. La regex n'est donc pas entourée de dièses </li>
					<li> il n'y a pas de classes abrégées (ou raccourcis). On peut utiliser le point pour dire "n'importe quel caractère" </li>
				</ul>
			</p>

			<p> Exemple de regex avec MySQL : <kbd>SELECT nom FROM visiteurs WHERE ip REGEXP '^84\.254(\.[0-9]{1,3}){2}$'</kbd> </p>

			<h2> Capture et remplacement </h2>

			<p> A chaque fois qu'il y a une parenthèse, cela crée une variable <kbd>$i</kbd> (1, 2, 3, etc.). On va ensuite se servir de ces variables pour modifier la chaîne : <br />
			<code> $texte = preg_replace('#\[b\](.+)\[/b\]#i', '&lt;strong&gt;$1&lt;/strong&gt;', $texte); </code>
			</p>

			<p> C'est l'ordre dans lequel les parenthèses sont ouvertes qui est important. <br />
			Une variable <kbd>$0</kbd> est toujours créée; elle contient toute la regex. <br />
			Si on ne veut pas qu'une parenthèse soit capturante, il faut qu'elle commence par un "?" suivi de ":": <kbd>#(anti)co(?:nsti)(tu(tion)nelle)ment#</kbd>.
			</p>

			<h2> Créer un bbCode </h2>

			<p> Le code vu pour mettre en gras est presque le bon. Il manque seulement 3 options :
				<ul>
					<li> i : pour accepter les majuscules comme les minuscules </li>
					<li> s : pour que le "point" fonctionne aussi pour les retours à la ligne </li>
					<li> U (Ungreedy) : pour que le tout fonctionne même si on a plusieurs <kbd>[b]</kbd> dans le texte </li>
				</ul>
			On a donc : <kbd>$texte = preg_replace('#\[b\](.+)\[/b\]#isU', '&lt;strong&gt;$1&lt;/strong&gt;', $texte);</kbd>
			</p>

			<p> Pour la couleur : <kbd>$texte = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '&lt;span style="color:$1"&gt;$2&lt;/span&gt;', $texte);</kbd>
			</p>

			<p> Pour les liens cliquables : <kbd>$lien = preg_replace('#^[https?]://[a-z0-9._/-]+$#i', '&lt;a href=$0&gt; $0 &lt;/a&gt;', $lien);</kbd> <br />
			Cette regex ne fonctionne pas si il y a des variables en paramètres dans l'URL.
			</p>


			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
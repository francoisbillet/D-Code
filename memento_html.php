<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Mémento des balises et attributs HTML </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_html"> Mémento des balises et attributs HTML </h1>

				<h2> Balises de premier niveau </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;html&gt;</kbd> </td>
							<td> Balise principale </td>
						</tr>
						<tr>
							<td> <kbd>&lt;head&gt;</kbd> </td>
							<td> En-tête de la page </td>
						</tr>
						<tr>
							<td> <kbd>&lt;body&gt;</kbd> </td>
							<td> Corps de la page </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises d'en-tête </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
							<th> Attributs </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;link /&gt;</kbd> </td>
							<td> Liaison avec une feuille de style </td>
							<td> rel (relationship), href </td>
						</tr>
						<tr>
							<td> <kbd>&lt;meta /&gt;</kbd> </td>
							<td> Métadonnées de la page </td>
							<td> charset </td>
						</tr>
						<tr> 
							<td> <kbd>&lt;script&gt;</kbd> </td>
							<td> Code JavaScript </td>
							<td> src </td>
						</tr>
						<tr>
							<td> <kbd>&lt;style&gt;</kbd> </td>
							<td> Code CSS (déconseillé) </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;title&gt;</kbd> </td>
							<td> Titre de la page </td>
							<td> </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises de structuration du texte </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
							<th> Attributs </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;abbr&gt;</kbd> </td>
							<td> Abbréviation </td>
							<td> title </td>
						</tr>
						<tr>
							<td> <kbd>&lt;blockquote&gt;</kbd> </td>
							<td> Citation (longue) </td>
							<td> cite </td>
						</tr>
						<tr>
							<td> <kbd>&lt;cite&gt;</kbd> </td>
							<td> Citation du titre d'une oeuvre ou d'un évènement </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;q&gt;</kbd> </td>
							<td> Citation (courte) </td>
							<td> cite </td>
						</tr>
						<tr>
							<td> <kbd>&lt;sup&gt;</kbd> </td>
							<td> Exposant </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;sub&gt;</kbd> </td>
							<td> Indice </td>
							<td> </td>
						</tr>
						<tr> 
							<td> <kbd>&lt;strong&gt;</kbd> </td>
							<td> Mise en valeur forte </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;em&gt;</kbd> </td>
							<td> Mise en valeur normale </td>
							<td> </td>
						</tr>
						<tr> 
							<td> <kbd>&lt;mark&gt;</kbd> </td>
							<td> Mise en valeur visuelle </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;h1&gt;</kbd> </td>
							<td> Titre (1 à 6) </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;img /&gt;</kbd> </td>
							<td> Image (à l'intérieur d'un paragraphe ou d'une figure) </td>
							<td> <strong>src</strong>, <strong>alt</strong>, title </td>
						</tr>
						<tr>
							<td> <kbd>&lt;figure&gt;</kbd> </td>
							<td> Figure (image, code, etc.) </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;figcaption&gt;</kbd> </td>
							<td> Description de la figure </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;audio&gt;</kbd> </td>
							<td> Son </td>
							<td> src </td>
						</tr>
						<tr>
							<td> <kbd>&lt;video&gt;</kbd> </td>
							<td> Vidéo </td>
							<td> src </td>
						</tr>
						<tr>
							<td> <kbd>&lt;source&gt;</kbd> </td>
							<td> Format source pour les balises &lt;audio&gt; et &lt;video&gt; </td>
							<td> <strong>src</strong> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;a&gt;</kbd> </td>
							<td> Lien hypertexte (absolu, relatif, ancre, mailto, téléchargement) </td>
							<td> <strong>href</strong>, title, target </td>
						</tr>
						<tr>
							<td> <kbd>&lt;br /&gt;</kbd> </td>
							<td> Retour à la ligne (break, doit être utilisé dans un paragraphe) </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;p&gt;</kbd> </td>
							<td> Paragraphe </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;hr /&gt;</kbd> </td>
							<td> Ligne de séparation horizontale </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;address&gt;</kbd> </td>
							<td> Adresse du contact </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;del&gt;</kbd> </td>
							<td> Texte supprimé </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;ins&gt;</kbd> </td>
							<td> Texte inséré </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;dfn&gt;</kbd> </td>
							<td> Définition </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;kbd&gt;</kbd> </td>
							<td> Saisie clavier </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;pre&gt;</kbd> </td>
							<td> Affichage formaté (pour les codes sources) </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;progress&gt;</kbd> </td>
							<td> Barre de progression </td>
							<td> max, value </td>
						</tr>
						<tr>
							<td> <kbd>&lt;time&gt;</kbd> </td>
							<td> Date ou heure </td>
							<td> datetime </td>
						</tr>
						<tr>
							<td> <kbd>&lt;code&gt;</kbd> </td>
							<td> Code </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;!-- --&gt;</kbd> </td>
							<td> Commentaire </td>
							<td> </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises de listes </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;ul&gt;</kbd> </td>
							<td> Lise à puces (non numérotée) </td>
						</tr>
						<tr>
							<td> <kbd>&lt;ol&gt;</kbd> </td>
							<td> Liste numérotée </td>
						</tr>
						<tr>
							<td> <kbd>&lt;li&gt;</kbd> </td>
							<td> Élement de la liste </td>
						</tr>
						<tr>
							<td> <kbd>&lt;dl&gt;</kbd> </td>
							<td> Liste de définitions </td>
						</tr>
						<tr>
							<td> <kbd>&lt;dt&gt;</kbd> </td>
							<td> Terme à définir </td>
						</tr>
						<tr>
							<td> <kbd>&lt;dd&gt;</kbd> </td>
							<td> Définition du terme </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises de tableau </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
							<th> Attributs </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;table&gt;</kbd> </td>
							<td> Tableau </td>
							<td> </td>
						</tr>
						<tr> 
							<td> <kbd>&lt;caption&gt;</kbd> </td>
							<td> Titre du tableau </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;tr&gt;</kbd> </td>
							<td> Ligne du tableau </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;th&gt;</kbd> </td>
							<td> Cellule d'en-tête </td>
							<td> colspan, rowspan </td>
						</tr>
						<tr>
							<td> <kbd>&lt;td&gt;</kbd> </td>
							<td> Cellule </td>
							<td> colspan, rowspan </td>
						</tr>
						<tr>
							<td> <kbd>&lt;thead&gt;</kbd> </td>
							<td> Section de l'en-tête du tableau </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;tbody&gt;</kbd> </td>
							<td> Section du corps du tableau </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;tfoot&gt;</kbd> </td>
							<td> Section du pied du tableau </td>
							<td> </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises de formulaire </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
							<th> Attributs </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;form&gt;</kbd> </td>
							<td> Formulaire </td>
							<td> <strong>action</strong>, <strong>method</strong> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;fieldset&gt;</kbd> </td>
							<td> Groupe de champs </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;legend&gt;</kbd> </td>
							<td> Titre d'un groupe de champs </td>
							<td> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;label&gt;</kbd> </td>
							<td> Libellé d'un champ </td>
							<td> <strong>for</strong> </td>
						</tr>
						<tr>
							<td> <kbd>&lt;input /&gt;</kbd> </td>
							<td> Champ de formulaire (texte, mot de passe, case à cocher, bouton, etc.) (de type <em>inline-block</em>) </td>
							<td> <strong>type</strong>, size, maxlength, value, placeholder, id, name, required </td>
						</tr>
						<tr>
							<td> <kbd>&lt;textarea&gt;</kbd> </td>
							<td> Zone de saisie multiligne </td>
							<td> cols, rows, id, name, autofocus </td>
						</tr>
						<tr>
							<td> <kbd>&lt;select&gt;</kbd> </td>
							<td> Liste déroulante (de type <em>inline-block</em>) </td>
							<td> autofocus </td>
						</tr>
						<tr>
							<td> <kbd>&lt;option&gt;</kbd> </td>
							<td> Élément d'une liste déroulante </td>
							<td> selected, value </td>
						</tr>
						<tr>
							<td> <kbd>&lt;optgroup&gt;</kbd> </td>
							<td> Groupe d'éléments d'une liste déroulante </td>
							<td> label </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises sectionnantes </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;header&gt;</kbd> </td>
							<td> En-tête </td>
						</tr>
						<tr>
							<td> <kbd>&lt;nav&gt;</kbd> </td>
							<td> Liens principaux de navigation </td>
						</tr>
						<tr>
							<td> <kbd>&lt;footer&gt;</kbd> </td>
							<td> Pied de page </td>
						</tr>
						<tr>
							<td> <kbd>&lt;section&gt;</kbd> </td>
							<td> Section de page </td>
						</tr>
						<tr>
							<td> <kbd>&lt;article&gt;</kbd> </td>
							<td> Article (contenu autonome) </td>
						</tr>
						<tr>
							<td> <kbd>&lt;aside&gt;</kbd> </td>
							<td> Informations complémentaires </td>
						</tr>
					</tbody>
				</table>

				<h2> Balises génériques </h2>

				<table>
					<thead>
						<tr>
							<th> Balise </th>
							<th> Description </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>&lt;span&gt;</kbd> </td>
							<td> Balise générique de type inline </td>
						</tr>
						<tr>
							<td> <kbd>&lt;div&gt;</kbd> </td>
							<td> Balise générique de type block </td>
						</tr>
					</tbody>
				</table>

			</section>

			<section>

				<p> A savoir : Il faut remplacer les "&" d'une URL en "&amp" </p>

				<p> La page d'accueil du site doit s'appeler <strong>index.html</strong>. C'est la page qui sera chargée lorsqu'un nouveau visiteur arrivera sur le site </p>

			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
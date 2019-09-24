<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Formulaires HTML </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<div>
				<h1 class="titre_html"> Les formulaires </h1>

				<section>
					<h2> Attribut method </h2>

					<p> L'attribut <kbd>method</kbd> du formulaire indique par quel moyen les données vont être envoyées. Il existe 2 solutions pour envoyer des données sur le web :
								<ol>
									<li> <kbd>method="get"</kbd>, assez peu adaptée car limitée à 255 caractères. Les informations sont envoyées dans l'adresse de la page. </li>
									<li> <kbd>method="post"</kbd>, plus utilisée car elle permet d'envoyer un grand nombre d'informations. Les données ne transitent pas par la barre d'adresse. </li>
								</ol>
					</p>
				</section>

				<section>
					<h2> Zone de texte monoligne </h2>

					<form method="post" action="traitement.php">
						<p>
							<label for="pseudo">Votre pseudo</label> : 
							<input type="text" name="pseudo" id="pseudo" size="20" placeholder="&lt;D/Code" maxlength="5"/>
						</p>
					</form>

					<p> Plusieurs choses à savoir :
						<ul>
							<li> L'attribut <kbd>name</kbd> de la zone de texte monoligne sera utile par la suite pour exploiter les données enregistrées </li>
							<li> Il faut lier le label à la zone de texte en donnant <strong>la même valeur</strong> à l'attribut <kbd>for</kbd> du label et à l'attribut <kbd>id</kbd> de la zone de texte. <br />
							Le curseur se place alors automatiquement dans la zone de texte lorsqu'on clique sur le libellé </li>
						</ul>
					</p>
				</section>

				<section>
					<h2> Zone de mot de passe </h2>

					<form method="post" action="traitement.php">
						<p>
							<label for="pass">Votre mot de passe :</label>
							<input type="password" name="pass" id="pass" maxlength="4" />
						</p>
					</form>

					<p> Il faut utiliser l'attribut <kbd>type="password"</kbd> </p>
				</section>

				<section>
					<h2> Zone de texte multiligne </h2>

					<form method="post" action="traitement.php">
						<p>
							<label for="feedback"> Que pensez-vous de mon site ? </label> <br />
							<textarea name="feedback" id="feedback" rows="5" cols="40"> Tapez votre texte ici </textarea>
						</p>
					</form>

					<p> Plusieurs choses à savoir :
						<ul>
							<li> On peut modifier la taille de la zone de texte avec les propriétés CSS <kbd>width</kbd> et <kbd>height</kbd> ou avec les attributs <kbd>rows</kbd> et <kbd>cols</kbd> de la balise <kbd>&lt;textarea&gt;</kbd> </li>
							<li> On peut pré-remplir la zone de texte en écrivant simplement le texte entre les balises (sans utiliser l'attribut <kbd>value</kbd>) </li>
						</ul>
					</p>
				</section>

				<section>
					<h2> Zones de saisie enrichies </h2>

					<p> Pour les utiliser, il suffit de donner à l'attribut <kbd>type</kbd> de la balise <kbd>&lt;input /&gt;</kbd> une de ces valeurs : </p>

					<table>
						<thead>
							<tr>
								<th> Valeur </th>
								<th> Description </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <kbd>email</kbd> </td>
								<td> E-mail (clavier adapté sur mobile) </td>
							</tr>
							<tr>
								<td> <kbd>url</kbd> </td>
								<td> URL (clavier adapté sur mobile) </td>
							</tr>
							<tr>
								<td> <kbd>tel</kbd> </td>
								<td> Numéro de téléphone (clavier adapté sur mobile) </td>
							</tr>
							<tr>
								<td> <kbd>number</kbd> </td>
								<td> Nombre entier (<kbd>min</kbd>, <kbd>max</kbd>, <kbd>step</kbd>) </td>
							</tr>
							<tr>
								<td> <kbd>range</kbd> </td>
								<td> Curseur (<kbd>min</kbd>, <kbd>max</kbd>, <kbd>step</kbd>) </td>
							</tr>
							<tr>
								<td> <kbd>color</kbd> </td>
								<td> Couleur </td>
							</tr>
							<tr>
								<td> <kbd>date</kbd> </td>
								<td> Date (20/11/1994 par exemple) </td>
							</tr>
							<tr>
								<td> <kbd>time</kbd> </td>
								<td> Heure (20:45 par exemple) </td>
							</tr>
							<tr>
								<td> <kbd>week</kbd> </td>
								<td> Semaine </td>
							</tr>
							<tr>
								<td> <kbd>month</kbd> </td>
								<td> Mois </td>
							</tr>
							<tr>
								<td> <kbd>datetime</kbd> </td>
								<td> Date et heure (avec gestion du décalage horaire) </td>
							</tr>
							<tr>
								<td> <kbd>datetime-local</kbd> </td>
								<td> Date et heure (sans gestion du décalage horaire) </td>
							</tr>
							<tr>
								<td> <kbd>search</kbd> </td>
								<td> Champ de recherche </td>
							</tr>
							<tr>
								<td> <kbd>file</kbd> </td>
								<td> Envoi de fichier (ajouter <kbd>enctype="multipart/form-data"</kbd> à la balise <kbd>&lt;form&gt;</kbd>) </td>
							</tr>
						</tbody>
					</table>
				</section>

				<section>
					<h2> Élements d'option </h2>

					<h3> Cases à cocher </h3>

					<form method="post" action="traitement.php">
						<p>
							Quel(s) langages connaissez-vous ? <br />
							<input type="checkbox" name="html" id="html" checked /> <label for="html">HTML</label> <br />
							<input type="checkbox" name="css" id="css" /> <label for="css">CSS</label> <br />
							<input type="checkbox" name="js" id="js" /> <label for="js">JavaScript</label> <br />
							<input type="checkbox" name="php" id="php" /> <label for="php">PHP</label>
						</p>
					</form>

					<p> Il faut utiliser l'attribut <kbd>type="checkbox"</kbd>. <br />
					L'attribut <kbd>checked</kbd> permet de cocher une case par défaut (ne nécessite pas de valeur). </p>

					<h3> Zones d'options </h3>

					<form method="post" action="traitement.php">
						<p>
							Lequel de ces langages fait partie du back-end (côté serveur) ? <br />
							<input type="radio" name="back-end" value="html" id="html" /> <label for="html">HTML</label> <br />
							<input type="radio" name="back-end" value="css" id="css" /> <label for="css">CSS</label> <br />
							<input type="radio" name="back-end" value="jsl" id="js" /> <label for="js">JavaScript</label> <br />
							<input type="radio" name="back-end" value="php" id="php" /> <label for="php">PHP</label>
						</p>
					</form>

					<p> Il faut utiliser l'attribut <kbd>type="radio"</kbd>. Pour ne pouvoir faire qu'un seul choix, les options d'un même groupe doivent avoir le même <kbd>name</kbd>, mais chaque option doit avoir une <kbd>value</kbd> différente. On choisit dont un <kbd>id</kbd> différent de <kbd>name</kbd> car un <kbd>id</kbd> doit être unique. <br />
					L'attribut <kbd>checked</kbd> permet de cocher un bouton par défaut. </p>

					<h3> Listes déroulantes </h3>

					<form method="post" action="traitement.php">
						<p>
							<label for="langage">Quel est le prochain langage que vous aimeriez apprendre ?</label> <br />
							<select name="langage" id="langage">
								<option value="html">HTML</option>
								<option value="css">CSS</option>
								<option value="js">JavaScript</option>
								<option value="php">PHP</option>
								<option value="ruby">Ruby</option>
								<option value="python">Python</option>
							</select>
						</p>
					</form>

					<p> Il faut utiliser la balise <kbd>&lt;select&gt;</kbd> qui indique le début et la fin de la liste déroulante, avec son attribut <kbd>name</kbd>. On ajoute à l'intérieur du <kbd>&lt;select&gt;</kbd> une balise <kbd>&lt;option&gt;</kbd> par choix possible, avec leur attribut <kbd>value</kbd>. <br />
					L'attribut <kbd>selected</kbd> permet de sélectionner une option par défaut (ne nécessite pas de valeur). </p>

					<form method="post" action="traitement.php">
						<p>
							<label for="langage">Quel est le prochain langage que vous aimeriez apprendre ?</label> <br />
							<select name="langage" id="langage">
								<optgroup label="Front-end">
									<option value="html">HTML</option>
									<option value="css">CSS</option>
									<option value="js">JavaScript</option>
								</optgroup>
								<optgroup label="Back-end">
									<option value="php">PHP</option>
									<option value="ruby">Ruby</option>
									<option value="python">Python</option>
								</optgroup>
							</select>
						</p>
					</form>

					<p> Il faut entourer les options ciblées par la balise <kbd>&lt;optgroup&gt;</kbd> avec son attribut <kbd>label</kbd>. </p>

				</section>

				<section>
					<h2> Regrouper les champs </h2>

					<form method="post" action="traitement.php">

						<fieldset>
							<legend> Vos coordonnées </legend>
								<p>
									<label for="pseudo"> Votre pseudo :</label> 
									<input type="text" name="pseudo" id="pseudo" size="20" placeholder="&lt;D/Code" />
								</p>

								<p>
									<label for="pass">Votre mot de passe :</label>
									<input type="password" name="pass" id="pass" maxlength="4" /> 
								</p>

								<p>
									<label for="email">Votre e-mail :</label>
									<input type="email" name="email" id="email" />
								</p>
						</fieldset>

						<fieldset>
							<legend> Nos questions </legend>

							<p>
								Quel(s) langages connaissez-vous ? <br />
								<input type="checkbox" name="html" id="html" checked /> <label for="html">HTML</label> <br />
								<input type="checkbox" name="css" id="css" /> <label for="css">CSS</label> <br />
								<input type="checkbox" name="js" id="js" /> <label for="js">JavaScript</label> <br />
								<input type="checkbox" name="php" id="php" /> <label for="php">PHP</label>
							</p>

							<p>
								Lequel de ces langages fait partie du back-end (côté serveur) ? <br />
								<input type="radio" name="back-end" value="html" id="html" /> <label for="html">HTML</label> <br />
								<input type="radio" name="back-end" value="css" id="css" /> <label for="css">CSS</label> <br />
								<input type="radio" name="back-end" value="jsl" id="js" /> <label for="js">JavaScript</label> <br />
								<input type="radio" name="back-end" value="php" id="php" /> <label for="php">PHP</label>
							</p>

							<p>
								<label for="langage">Quel est le prochain langage que vous aimeriez apprendre ?</label> <br />
								<select name="langage" id="langage">
									<option value="html">HTML</option>
									<option value="css">CSS</option>
									<option value="js">JavaScript</option>
									<option value="php">PHP</option>
									<option value="ruby">Ruby</option>
									<option value="python">Python</option>
								</select>
							</p>

						</fieldset>
					</form>

					<p> Il faut utiliser la balise <kbd>&lt;fieldset&gt;</kbd> pour regrouper plusieurs champs de formulaire. Chaque <kbd>&lt;fieldset&gt;</kbd> peut contenir une légende avec la balise <kbd>&lt;legend&gt;</kbd>. </p>

				</section>

				<section>

					<h2> Sélectionner automatiquement un champ </h2>

					<form method="post" action="traitement.php">
						<p>
							<label for="pseudo">Votre pseudo</label> : 
							<input type="text" name="pseudo" id="pseudo" size="20" placeholder="&lt;D/Code" />
						</p>
					</form>

					<p> Il faut utiliser l'attribut <kbd>autofocus</kbd> de <kbd>&lt;input&gt;</kbd>. </p>

				</section>

				<section>

					<h2> Rendre un champ obligatoire </h2>

					<p> Il faut utiliser l'attribut <kbd>required</kbd> de <kbd>&lt;input&gt;</kbd>. Le navigateur indiquera alors au visiteur, si le champ est vide au moment de l'envoi, qu'il doit impérativement être rempli. <p/>

					<p> Les anciens navigateurs qui ne reconnaissant pas cet attribut enverront le contenu du formulaire sans vérification. Pour ces navigateurs, il sera nécessaire de compléter les tests avec, par exemple, des scripts JavaScript. </p>

					<p> En CSS, on peut changer le style des élément requis avec <kbd>:required</kbd> et invalides avec <kbd>:invalid</kbd>. <kbd>:focus</kbd> (qu'on a déjà vu) permet de changer l'apparence d'un champ lorsque le curseur se trouve à l'intérieur </p>

				</section>

				<section>

					<h2> Bouton d'envoi </h2>

					<input type="submit" value="Envoyer" />

					<p> Il faut donner à l'attribut <kbd>type</kbd> de la balise <kbd>&lt;input /&gt;</kbd> une de ces valeurs : </p>

					<table>
						<thead>
							<tr>
								<th> Valeur </th>
								<th> Description </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <kbd>submit</kbd> </td>
								<td> Bouton d'envoi du formulaire, redirection vers la page indiquée dans <kbd>action</kbd> (utilisé le plus souvent) </td>
							</tr>
							<tr>
								<td> <kbd>reset</kbd> </td>
								<td> Remise à zéro du formulaire </td>
							</tr>
							<tr>
								<td> <kbd>image</kbd> </td>
								<td> Équivalent du bouton <kbd>submit</kbd>, présenté sous forme d'image (rajouter l'attribut <kbd>src</kbd> pour indiquer l'URL) </td>
							</tr>
							<tr>
								<td> <kbd>button</kbd> </td>
								<td> Bouton générique, aucun effet (par défaut). En général géré en JS pour gérer des actions sur la page </td>
							</tr>
						</tbody>
					</table>

					<p> On peut changer le texte affiché à l'intérieur des boutons avec l'attribut <kbd>value</kbd>. </p>
				</section>
			</div>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
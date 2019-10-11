<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css" />
		<title> Les formulaires </title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header.php"); ?>

			<?php include("banniere.php"); ?>

			<section>

				<h1 class="titre_js"> Les formulaires en JavaScript </h1>

				<h3> Les zones de texte </h3>

				<p> On accède à la valeur d'une zone de texte avec la propriété <kbd>value</kbd> de l'élément du DOM correspondant. <br />
				Ceci va remplir le champ pseudo de "MonPseudo : </p>

<pre><code>var pseudoElt = document.getElementById("pseudo");
pseudoElt.value = "MonPseudo";
</code></pre>

				<p> Lorsqu'une zone de texte est la clible de saisie, on dit que cette zone possède le <strong>focus</strong>. <br />
					L'utilisateur qui clique sur une zone de saisie déclenche l'apparition d'un évènement de type <kbd>focus</kbd>.<br />
					Inversement, le changement de cible de saisie provoque l'apparition d'un évènement de type <kbd>blur</kbd> sur l'ancienne zone qui avait le focus.
				</p>

<pre><code>pseudoElt.addEventListener("focus", function () {
    document.getElementById("aidePseudo").textContent = "Entrez votre pseudo";
});

pseudoElt.addEventListener("blur", function (e) {
    document.getElementById("aidePseudo").textContent = "";
});
</code></pre>

				<p> Le fonctionnement des zones de texte multiligne (balises <kbd>&lt;textarea&gt;</kbd>) est similaire à celui des balises <kbd>&lt;input&gt;</kbd>. </p>

				<h3> Les cases à cocher </h3>

				<p> Ces éléments déclenchent un évènement de type <kbd>change</kbd> lorsque l'utilisateur modifie son choix. <br />
					Lorsque la case change de valeur, l'objet <kbd>Event</kbd> associé à l'évènement dispose d'une propriété booléenne <kbd>checked</kbd> qui indique le nouvel état de la case (cochée/décochée).
				</p>

<pre><code>document.getElementById("confirmation").addEventListener("change", function (e) {
    console.log("Demande de confirmation : " + e.target.checked);
});
</code></pre>

				<h3> Les boutons radio </h3>

				<p> Lors d'un changement de valeur d'un groupe de boutons radio, la propriété <kbd>e.target.value</kbd> de l'évènement <kbd>change</kbd> contient la valeur de l'attribut <kbd>value</kbd> de la nouvelle balise <kbd>&lt;input&gt;</kbd> sélectionnée. </p>

<pre><code>var aboElts = document.getElementsByName("abonnement");
for (var i = 0; i < aboElts.length; i++) {
    aboElts[i].addEventListener("change", function (e) {
        console.log("Formule d'abonnement choisie : " + e.target.value);
    });
}
</code></pre>

				<h3> Les listes déroulantes </h3>

				<p> Comme pour les boutons radio, la propriété <kbd>e.target.value</kbd> de l'évènement <kbd>change</kbd> contient la valeur de l'attribut <kbd>value</kbd> de la balise <kbd>&lt;option&gt;</kbd> associée au nouveau choix, et non pas le texte affiché dans la liste déroulante. </p>

<pre><code>document.getElementById("nationalite").addEventListener("change", function (e) {
    console.log("Code de nationalité : " + e.target.value);
});
</code></pre>

				<h2> Formulaire comme élément du DOM </h2>

				<p> La balise <kbd>&lt;form&gt;</kbd> de formulaire possède une propriété <kbd>element</kbd> rassemblant les champs de saisie du formulaire. On peut l'utiliser pour accéder à un champ à partir de son nom (attribut <kbd>name</kbd>) ou à partir de son indice dans l'ordre d'apparition dans le formulaire : </p>

<pre><code>var form = document.querySelector("form");
console.log("Nombre de champs de saisie : " + form.elements.length); // Affiche 10
console.log(form.elements[0].name); // Affiche "pseudo"
console.log(form.elements.mdp.type); // Affiche "password"
</code></pre>

				<p> En règle générale, la soumission du formulaire se traduit par l'envoi de ses données à la ressource identifiée par l'attribut <kbd>action</kbd> de la balise <kbd>&lt;form&gt;</kbd>. Mais avant cela, un évènement de type <kbd>submit</kbd> est déclenché. On peut donc accéder aux données du formulaire avant leur envoi, et on peut même annuler l'envoi ultérieur des données en appelant la méthode <kbd>preventDefault</kbd> sur l'objet <kbd>Event</kbd> associé à l'évènement. </p>

				<h2> Validation des données saisies </h2>

				<p> Contrôler les données saisies par l'utilisateur avant de les envoyer à un serveur est l'un des grands intérêts de l'utilisation de JavaScript avec les formulaires web. Ainsi, on peut signaler immédiatement d'éventuelles erreurs de saisie et on évite également des allers-retours réseau coûteux en temps. </p>

				<p> Le contrôle de validité peut se faire de plusieurs manières, éventuellement combinables :
					<ul>
						<li> au fur et à mesure de la saisie d'une donnée </li>
						<li> à la fin de la saisie d'une donnée </li>
						<li> au moment où l'utilisateur soumet le formulaire </li>
					</ul>
					Cette dernière technique consiste simplement à ajouter des vérifications dans le gestionnaire des évènements <kbd>submit</kbd> sur le formulaire.
				</p>

				<h4> Validation pendant la saisie </h4>

				<p> Cette validation repose sur l'exploitation des évènements <kbd>input</kbd>, qui se déclenchent sur une zone de saisie à chaque fois que sa valeur est modifiée : </p>

<pre><code>document.getElementById("mdp").addEventListener("input", function (e) {
    var mdp = e.target.value; 
    var longueurMdp = "faible";
    var couleurMsg = "red"; 
    if (mdp.length >= 8) {
        longueurMdp = "suffisante";
        couleurMsg = "green"; 
    } else if (mdp.length >= 4) {
        longueurMdp = "moyenne";
        couleurMsg = "orange"; 
    }
    var aideMdpElt = document.getElementById("aideMdp");
    aideMdpElt.textContent = "Longueur : " + longueurMdp; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide
});
</code></pre>

				<h4> Validation à la fin de la saisie </h4>

				<p> La fin de la saisie dans une zone de texte correspond à la perte du focus par cette zone, ce qui déclenche l'apparition d'un évènement de type <kbd>blur</kbd>. <br />
					Pour vérifier la présence du caractère <kbd>@</kbd> dans le courriel : 
				</p>

<pre><code>document.getElementById("courriel").addEventListener("blur", function (e) {
    var validiteCourriel = "";
    if (e.target.value.indexOf("@") === -1) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});
</code></pre>

				<h3> Utilisation d'une expression régulière </h3>

				<p> On définit une expression régulière en JS en plaçant son motif entre deux caractères <kbd>/</kbd>. La variable ainsi créée est un objet. Sa méthode <kbd>test</kbd> permet de comparer le regex au string passé en paramètre et renvoie un booléen. </p>

				<table>
					<thead>
						<tr>
							<th> Motif </th>
							<th> Correspondance </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <kbd>abc</kbd> </td>
							<td> contient "abc" </td>
						</tr>
						<tr>
							<td> <kbd>[abc]</kbd> </td>
							<td> contient soit "a", soit "b", soit "c" </td>
						</tr>
						<tr>
							<td> <kbd>[a-z]</kbd> </td>
							<td> contient n'importe quelle lettre minuscule </td>
						</tr>
						<tr>
							<td> <kbd>[0-9]</kbd> ou <kbd>\d</kbd> </td>
							<td> contient un chiffre </td>
						</tr>
						<tr>
							<td> <kbd>a.c</kbd> </td>
							<td> contient "a" suivi d'un caractère suivi de "c" </td>
						</tr>
						<tr>
							<td> <kbd>a\.c</kbd> </td>
							<td> contient "a.c" </td>
						</tr>
						<tr>
							<td> <kbd>a.+c</kbd> </td>
							<td> contient "a" suivi d'un ou plusieurs caractères suivi de "c" </td>
						</tr>
						<tr>
							<td> <kbd>a.*c</kbd> </td>
							<td> contient "a" suivi de zéro ou plusieurs caractères suivi de "c" </td>
						</tr>
					</tbody>
				</table>

<pre><code>document.getElementById("courriel").addEventListener("blur", function (e) {
    var regexCourriel = /.+@.+\..+/;
    var validiteCourriel = "";
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});
</code></pre>

			</section>

			<?php include("footer.php"); ?>
		</div>
	</body>
</html>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8"/>

	<title>Carnet d'adresse</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
	<div id="container">
	<h1>Mes contacts</h1>
	<a href="ajouter.php">Ajouter un contact</a>
	<br /><br />
	<table>
		<tr class='tete'>
			<td>Prénom Nom</td>
			<td width="100"></td>
			<td width="100"></td>
		</tr>
		<?php
		# On affiche le tableau
		echo $html;
		?>
	</table>
	</div>
</body>
</html>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8"/>
	<title>Supprimer un contact</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
<table>
	<tr>
		<td colspan="2" style="text-align: center">
			<h1>!!! ATTENTION !!!</h1>
			<br/><br/>
			Voulez-vous réellement effacer ce contact ?<br />
			Il sera impossible d'annuler !
		</td>
	</tr>
	<tr>
		<td width="50%" style="text-align: center">
			<a href="supprimer.php?id=<?php echo $id; ?>&amp;validation=oui" class="valid">CONFIRMER</a>
		</td>
		<td width="50%" style="text-align: center">
			<a href="liste.php" class="cancel">ANNULER</a>
		</td>
	</tr>
</table>
</div>
</body>
</html>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8"/>

	<title>Modifier un contact</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />

</head>

<body>
	<div id="container">
		<h1>Modifier un contact</h1>
		<form action="modifier.php" method="post" accept-charset="utf-8">
			<input type="hidden" name="id" value="<?php echo $id; ?>" id="id"/>
			<p><label for="nom">Nom : </label><input type="text" name="nom" value="<?php echo $nom; ?>" id="nom" /></p>
			<p><label for="prenom">Prenom : </label><input type="text" name="prenom" value="<?php echo $prenom; ?>" id="prenom" /></p>
			<p><label for="email">eMail : </label><input type="email" name="email" value="<?php echo $email; ?>" id="email" /></p>
			<p><label for="adresse">adresse : </label><input type="text" name="adresse" value="<?php echo $adresse; ?>" id="adresse" /></p>
			<p><label for="cp">cp : </label><input type="text" name="cp" value="<?php echo $cp; ?>" id="cp" /></p>
			<p><label for="ville">ville : </label><input type="text" name="ville" value="<?php echo $ville; ?>" id="ville" /></p>
			<p><label for="tel">tel : </label><input type="text" name="tel" value="<?php echo $tel; ?>" id="tel" /></p>
			<p><label for="nele">Date de naissance : </label><input type="text" name="nele" value="<?php echo $nele; ?>" id="nele" /> AAAA-MM-JJ</p>
			<p class="submit"><input type="submit" name="submit" value=":: Modifier ::" /></p>
		</form>
	</div>
</body>
</html>

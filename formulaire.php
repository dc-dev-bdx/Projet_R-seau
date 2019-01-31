<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Réponse du formulaire</title>
</head>
<body>
	<h1>
		Voici votre réponse
	</h1>
	<?php
		echo $_POST["type_maison"];
		echo $_POST["code_postal"];			
	?>
	
</body>
</html>
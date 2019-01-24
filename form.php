<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">		
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>

	<body>

	<?php
		include 'includes/bdd.inc.php';


		if(isset($_POST["inputZipCode"])) {
			$sql = "SELECT * FROM town WHERE zip_code LIKE '" . $_POST["inputZipCode"] . "%' ORDER BY zip_code ASC;";
			$res = mysqli_query($link, $sql);

			if($res){
				while($row = mysqli_fetch_array($res)){
					echo "<span style='display: block;'>" . $row["town_name"] . " - " . $row["zip_code"] . "</span>";
				}
			} else {
				echo "<span>Le code postal insiqué ne correspond à aucunes communes Française !</span>";
			}
		}

	?>
	
	</body>	
</html>
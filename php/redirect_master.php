<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>


<?php include "../include/connexion.php";

if (isset($_GET) && isset($_GET['delete']) && !empty($_GET['delete'])) {
	mysqli_query($link, "DELETE FROM phone WHERE id_crypt='$_GET[delete]'");
	echo "<div class='col-md-4 col-md-offset-4' id='loading'><center><span>Redirection en cours</span><br /><img src='../img/loading.GIF' /></center></div>";
	header("Refresh: 3;url=../index.php");
}


if (isset($_GET) && isset($_GET['identifiant_connexion'])) {
	if (isset($_POST) && isset($_POST['identifiant'])) {
		if (!empty($_POST['identifiant'])) {
			$row = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM phone WHERE id_crypt='$_POST[identifiant]'"));
			if ($row) {
				echo "<div class='col-md-4 col-md-offset-4' id='loading'><center><span>Redirection en cours</span><br /><img src='../img/loading.GIF' /></center></div>";
				header("Refresh: 3;url=../index.php");
			}
			else{
				echo "<script>alert(\"Identifiant Incorrect !!\")</script>";
				header("Refresh: 0; url=../index.php");
			}
		}
	}
}


else{
	header('Location: ../index.php');
}



 ?>
<html lang="fr">
<head>
	<meta charset="utf-8">
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


elseif (isset ($_GET) && isset ($_GET['validation_ticket']) && !empty($_GET['validation_ticket'])) {
    if (isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['email']) && isset($_POST['telephone'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['email']) && !empty($_POST['telephone'])) {
          extract($_POST);
          mysqli_query($link, "UPDATE phone SET nom='$nom', prenom='$prenom', location='$adresse', email='$email', telephone='$telephone' WHERE id_crypt='$_GET[validation_ticket]'") or die("Erreur lors de la requête SQL");
          echo "<div class='col-md-6 col-md-offset-3' id='loading_1'><center><span>Envoi de votre demande...</span><br /><img src='../img/loading_1.GIF' /></center></div>";
			header("Refresh: 5;url=../index.php?envoi_success=$_GET[validation_ticket]");
        }
    }
} 


else{
	header('Location: ../index.php');
}



 ?>
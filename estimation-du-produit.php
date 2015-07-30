<?php include "include/header.php"; ?>
  <meta name="keywords" content="Juge, juge des affaires familiales, juge de proximité, juridique, tribunal, tribunal d'instance, tribunal des affaires de sécurité sociale, prud'hommes, PV, JAF, démarches, demarche, demarches, administratif, saisine.">
  <meta name="description" content="Toute La Justice simplifie et facilite vos démarches judiciaires en vous permettant de saisir rapidement les tribunaux, directement en ligne et sans avocat.">
  <title>Phone Justice | Estimation du prix du téléphone</title>

<?php 

extract($_POST);

if (isset($_POST) && isset($brand) && isset($capacity) && isset($state)) {

	// Insertion en BDD si besoin est

	$date = date("Y-m-d H:i:s");

	$link = mysqli_connect("localhost","root","motdepasselocalhostgwen","PhoneMarket") or die("Erreur connexon à la BDD");

	if ($brand == "apple") {
	mysqli_query($link , "INSERT INTO phone(brand, capacity, state, modal, date, id_crypt) VALUES ('$brand', '$capacity', '$state', '$apple', '$date', '$identifiant')");
	}
	if ($brand == "samsung") {
	mysqli_query($link , "INSERT INTO phone(brand, capacity, state, modal, date, id_crypt) VALUES ('$brand', '$capacity', '$state', '$samsung' , '$date', '$identifiant')");
	}

?>

<body id="body" class="landing home">
  <div class="page">
    
    <?php include "include/navbar.php"; ?>

    <section class="landing-header homepage-background">
        <div class="container">
          <h1 class="landing-header-title">Estimation du prix du téléphone</h1>
          <p class="landing-header-intro">En ligne, sans avocat.</p>
          	<div class="col-md-8 col-md-offset-2 bloc_produit">
          		<div class="col-md-6">
          	<?php if ($_POST['brand'] == "samsung") {
          		switch ($_POST['samsung']) {
          			case 'Galaxy s3':
          				echo "<img src=img/galaxy_s3.png>";
          				break;
          			case 'Galaxy s4':
          				echo "<img src=img/galaxy_s4.jpg>";
          				break;
      				case 'Galaxy s5':
          				echo "<img src=img/galaxy_s5.png>";
          				break;
      				case 'Galaxy s6':
          				echo "<img src=img/galaxy_s6.jpg>";
          				break;
          			default:
          				echo "autre";
          				break;
      				} 
          		} elseif ($_POST['brand'] == "apple") {
          		switch ($_POST['apple']) {
          			case 'iphone 5' || 'iphone 5c' || 'iphone 5s':
          				echo "<img src=img/iphone_5.png>";
          				break;
          			case 'Galaxy s4':
          				echo "<img src=img/galaxy_s4.jpg>";
          				break;
      				case 'Galaxy s5':
          				echo "<img src=img/galaxy_s5.jpg>";
          				break;
      				case 'Galaxy s6':
          				echo "<img src=img/galaxy_s6.jpg>";
          				break;
      				case 'iphone 5' || 'iphone 5s' || 'iphone 5c' :
          				echo "<img src=img/iphone_5.png>";
          				break;
          			default:
          				echo "autre";
          				break;
      				} 
          		}  ?>
      			</div>	
	          		<div class="col-md-6 produit_description">
	          			<ul>
	          				<?php if ($_POST['brand'] == "samsung") { ?>
	          				<li>Marque : <?php echo $_POST['brand'] ?></li>
	          				<li>Modèle : <?php echo $_POST['samsung'] ?></li>
	          				<li>Capacité de : <?php echo $_POST['capacity'] ?></li>
	          				<li>Etat signalé : <?php echo $_POST['state'] ?></li>
	          				<li>Prix estimé :
	          				<?php 	switch($_POST['capacity']){
	          							case '08 go':
			          						echo "<span>50 €</span>";
		          							break;
	          							case '16 go':
			          						echo "<span>60 €</span>";
		          							break;
	          							case '32 go':
			          						echo "<span>80 €</span>";
		          							break;
	          							case '64 go':
			          						echo "<span>100 €</span>";
		          							break;
	          							default;
	          								header('Location: index.php'); ?></li>
          					<?php 	} }elseif($_POST['brand'] == "apple"){ ?>
	          				<li>Marque : <?php echo $_POST['brand'] ?></li>
	          				<li>Modèle : <?php echo $_POST['apple'] ?></li>
	          				<li>Capacité de : <?php echo $_POST['capacity'] ?></li>
	          				<li>Etat signalé : <?php echo $_POST['state'] ?></li>
	          				<li>Prix estimé :
	          				<?php 	switch($_POST['capacity']){
	          							case '08 go':
			          						echo "<span>50 €</span>";
		          							break;
	          							case '16 go':
			          						echo "<span>60 €</span>";
		          							break;
	          							case '32 go':
			          						echo "<span>80 €</span>";
		          							break;
	          							case '64 go':
			          						echo "<span>100 €</span>";
		          							break;
	          							default;
	          								header('Location: index.php'); ?></li>
          					<?php } } ?>
	          			</ul>
	          			<button class="btn-custom vente_trigger">Je vends</button>
	          			<a href=<?php echo "php/redirect_master.php?delete=$_POST[identifiant]"; ?>><button class="btn-cancel">Retour</button></a>
	          		</div>
            </div>


            <!-- Si 'lutilisateru clique sur je vends' -->

            	<form class="col-md-8 col-md-offset-2 bloc_vente" action=<?php echo "index.php?validation_ticket=$_POST[identifiant]"; ?> method="POST">
            		<div class="form-group">
                <input type="text" name="nom" placeholder="Nom" required />
                
            		<input type="text" name="prenom" placeholder="Prénom" required />

            		<input type="text" name="adresse" placeholder="Adresse postale" required />
              
            		<input type="email" name="email" placeholder="Adresse email" required />
            		<input type="telephone" name="telephone" placeholder="Votre numéro de téléphone" required />
                
            		<br>
                <div class="col-md-4 col-md-offset-4" style="margin-top: 1%">
            		<button class="btn-custom">Valider</button>
                <span class="btn-cancel vente_trigger">Retour</span>
                </div>
            	</div>
              </form>
        </div>
<?php }	

else{
	header('Location: include/404.php');
}

include "include/footer.php";

 ?>
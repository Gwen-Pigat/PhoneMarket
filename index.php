<?php include "include/header.php"; ?>
  <meta name="keywords" content="Juge, juge des affaires familiales, juge de proximité, juridique, tribunal, tribunal d'instance, tribunal des affaires de sécurité sociale, prud'hommes, PV, JAF, démarches, demarche, demarches, administratif, saisine.">
  <meta name="description" content="Toute La Justice simplifie et facilite vos démarches judiciaires en vous permettant de saisir rapidement les tribunaux, directement en ligne et sans avocat.">
  <title>Phone Justice | Accueil</title>

</head>
<body id="body" class="landing home">
    
    <?php include "include/navbar.php"; include "include/connexion.php";

    if (isset($_GET) && isset($_GET['envoi_success']) && !empty($_GET['envoi_success'])) {

      $row = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM phone WHERE id_crypt='$_GET[envoi_success]'"));

      if ($row) {
         echo "<script>alert(\"Votre demande à bien été envoyé, vous pourrez suivre l'avancement de celle-ci en renseignant l'identifiant que nous vous avons envoyé par mail ($_GET[envoi_success])\")</script>";
         echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>";
      }
      else{
        echo "<script>alert(\"Erreur\")</script>";
        echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>";
      }
    }

    ?>

    <section class="landing-header homepage-background">
        <div class="container">
          <h1 class="landing-header-title">Vendez votre téléphone au meilleur prix</h1>
          <p class="landing-header-intro">En ligne, sans avocat.</p>
              <form action="estimation-du-produit.php" method="post" class="col-md-12 formulaire_accueil">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <select name="brand" id="brand_select">
                      <option selected="true" disabled="disabled" id="default">Marque</option>
                      <option value="apple" id="apple">Apple</option>
                      <option value="samsung" id="samsung">Samsung</option>
                  </select>
                  <select name="apple" id="brand_apple">
                      <option value="iphone 4">iPhone 4</option>
                      <option value="iphone 4s">iPhone 4s</option>
                      <option value="iphone 5">iPhone 5</option>
                      <option value="iphone 5c">iPhone 5c</option>
                      <option value="iphone 5s">iPhone 5s</option>
                      <option value="iphone 6">iPhone 6</option>
                  </select>
                  <select name="samsung" id="brand_samsung">
                      <option value="Galaxy s3">Galaxy S3</option>
                      <option value="Galaxy s4">Galaxy S4</option>
                      <option value="Galaxy s5">Galaxy S5</option>
                      <option value="Galaxy s6">Galaxy S6</option>
                  </select> 
                </div>
                <div class="col-md-8 col-md-offset-2">
                  <select name="capacity" id="capacity"> 
                     <option selected="true" disabled="disabled" value="default">Capacité</option> 
                     <option value="08 go">08 Go</option> 
                     <option value="16 go">16 Go</option>
                     <option value="32 go">32 Go</option>
                     <option value="64 go">64 Go</option>
                  </select>
                  <select name="state" id="ListeElement"> 
                     <option selected="true" disabled="disabled" value="default">Etat</option> 
                     <option id="comme_neuf" value="Comme neuf">Comme neuf</option> 
                     <option id="tres_bon_etat" value="Très bon état">Très bon état</option>
                     <option id="fonctionnel" value="Fonctionnel">Fonctionnel</option>
                     <option id="non_fonctionnel" value="Non fonctionnel">Non fonctionnel</option> 
                  </select>
                  <br>
                  <input type="hidden" name="identifiant" value="<?php echo str_shuffle('0123456789azertyuiop'); ?>" />
                  <button class="btn btn-green"><strong>Valider</strong></button>
                </div>
              </form>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                  <div id="spot_information_comme_neuf">
                    <ul>
                      <li>Ne pas excéder 15 jours d'utilisation depuis sa première mise en service. Ceci est déterminé sur la base de la date de facture d'achat de l'Article.</li>
                        <li>Etre complet : comporter l'ensemble des éléments le composant (hors Accessoires)</li>
                        <li>Etre pleinement fonctionnel et dépourvu de tout défaut ou de vices</li>
                        <li>Etre en mesure de se mettre en marche normalement et de permettre d'utiliser toutes les fonctionnalités sans aucune gêne pour l'utilisateur</li>
                        <li>Etre en parfait état physique (matériel et logiciel) et ne pas présenter de rayures ou de traces d'utilisation</li>
                  </div>
                  <div id="spot_information_tres_bon_etat">
                    <ul>
                      <li>N'excéder pas 90 jours d'utilisation depuis sa première mise en service. Ceci est déterminé sur la base de la date de facture d'achat de l'Article.</li>
                      <li>Etre complet : comporter l'ensemble des éléments le composant (hors Accessoires).</li>
                      <li>Etre pleinement fonctionnel et dépourvu de tout défaut ou de vices.</li>
                      <li>Etre en mesure de se mettre en marche normalement et de permettre d'utiliser toutes les fonctionnalités sans aucune gêne pour l'utilisateur.</li>
                      <li>Etre en parfait état physique (matériel et logiciel) et ne pas présenter de rayures ou de traces d'utilisation.</li>
                    </ul>
                  </div>
                  <div id="spot_information_fonctionnel">
                    <ul>
                      <li>Comporter un cache de batterie et une batterie fonctionnelle qui se recharge sans présenter des signes défectueux ou des gonflements.</li>
                      <li>Etre fonctionnel et dépourvu de défauts ou de vices empêchant définitivement toute utilisation normale et/ou remise en état complète en vue d'une revente ultérieure.</li>
                      <li>Etre en mesure de se mettre en marche normalement et de permettre d'utiliser les principales fonctionnalités sans réparation et sans gêne pour l'utilisateur.</li>
                      <li>Permettre une remise en état complète des fonctionnalités au moyen de réparations normales et sans remplacement de composants.</li>
                      <li>Pour les téléphones mobiles, être notamment en mesure de passer et de recevoir des appels sans gêne ou coupures liées à l'appareil.</li>
                      <li>Etre dans un état physique (matériel et logiciel) permettant à l'écran tactile et au rétro-éclairage d'être fonctionnels.</li>
                      <li>Etre dans un état physique de non-oxydation.</li>
                    </ul>
                  </div>
                  <div id="spot_information_non_fonctionnel">
                    <ul>
                      <li>Compter un cache de batterie et une batterie fonctionnelle qui se recharge sans présenter des signes défectueux ou des gonflements.L'état physique de l'écran tactile est altéré de façon apparente (cassé, rayure importante, etc.).</li>
                      <li>Etre dans un état physique de non-oxydation, présenter des signes d'utilisation mais ne pas être ni écrasé ni tordu.</li>
                      <li>Permettre une remise en état complète au moyen de réparations normales, sans remplacement des principaux composants</li>
                      <li>Etre dépourvu de défauts ou de vices empêchant définitivement toute utilisation complète et/ou réparation en vue d'une revente ultérieure.</li>
                      <li>En outre, il présente une ou plusieurs des caractéristiques suivantes :
                      Ne plus être en mesure de se mettre en marche normalement.</li>
                      <li>Ne pas permettre une utilisation des principales fonctionnalités sans réparation par RIF ou sans gêne pour l'utilisateur .</li>
                      <li>Pour les téléphones mobiles, ne plus être en mesure de passer et de recevoir des appels .</li>
                      <li>Etre dans un état physique (matériel et logiciel) ne permettant plus à l'écran tactile et/ou au rétro éclairage d'être fonctionnels.</li>
                    </ul>
                  </div>
              </div>

              <script type="text/javascript">

              $(function() {
                  $("#brand_select").change(function() {
                    if ($("#apple").is(":selected")) {
                      $("#brand_apple").show(500);
                      $("#brand_samsung").hide(500);
                    } else if ($("#samsung").is(":selected")) {
                      $("#brand_samsung").show(500);
                      $("#brand_apple").hide(500);
                    }else{
                      $("#brand_apple").hide(500);
                        $("#brand_samsung").hide(500);
                    }
                  }).trigger('change');

                  $("#ListeElement").change(function() {
                    if ($("#comme_neuf").is(":selected")) {
                      $("#spot_information_comme_neuf").show(500);
                      $("#spot_information_tres_bon_etat").hide(500);
                      $("#spot_information_fonctionnel").hide(500);
                      $("#spot_information_non_fonctionnel").hide(500);
                    } else if ($("#tres_bon_etat").is(":selected")) {
                      $("#spot_information_comme_neuf").hide(500);
                      $("#spot_information_tres_bon_etat").show(500);
                      $("#spot_information_fonctionnel").hide(500);
                      $("#spot_information_non_fonctionnel").hide(500);
                    }else if ($("#fonctionnel").is(":selected")) {
                      $("#spot_information_comme_neuf").hide(500);
                      $("#spot_information_tres_bon_etat").hide(500);
                      $("#spot_information_fonctionnel").show(500);
                      $("#spot_information_non_fonctionnel").hide(500);
                    }else if ($("#non_fonctionnel").is(":selected")) {
                      $("#spot_information_comme_neuf").hide(500);
                      $("#spot_information_tres_bon_etat").hide(500);
                      $("#spot_information_fonctionnel").hide(500);
                      $("#spot_information_non_fonctionnel").show(500);
                    }else{
                      $("#spot_information_comme_neuf").hide(500);
                      $("#spot_information_tres_bon_etat").hide(500);
                      $("#spot_information_fonctionnel").hide(500);
                      $("#spot_information_non_fonctionnel").hide(500);
                    }

                  }).trigger('change');
                });

              </script>
        </div>
    </section>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 three-steps text-center">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="fa fa-hourglass-start fa-5x"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="fa fa-hourglass-half fa-5x"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="fa fa-hourglass-end fa-5x"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
        </div>
        <div class="background col-md-12 col-sm-12 col-xs-12">
          <h3 class="absolute">Domaines d'intervention</h3>
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature ">
                      <h4 class="f-title">Séparation</h4>
                      <div class="f-details">Fixez ou révisez les droits sur les enfants.</div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Après-divorce</h4>
                      <div class="f-details">Modifiez votre jugement rendu par le JAF.</div>
                  </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Cotisations RSI / URSSAF</h4>
                      <div class="f-details">Contestez les cotisations, contraintes, etc.</div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Accidents du travail</h4>
                      <div class="f-details">Indemnisation des accidents du travail.</div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Litiges entre particuliers</h4>
                      <div class="f-details">Baux d'habitation, voisinage, etc.</div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Litiges avec une société</h4>
                      <div class="f-details">Litiges artisans, commercants, opérateurs, etc.</div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Permis de conduire</h4>
                      <div class="f-details">Contestez vos PV d'excès de vitesse.</div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 feature">
                      <h4 class="f-title">Prud' hommes</h4>
                      <div class="f-details">Contestation de licenciement, heures suplémentaires, etc.</div>
                  </div>
          </div>
        </div>
      <?php include "include/footer.php"; ?>
  </body>
</html>
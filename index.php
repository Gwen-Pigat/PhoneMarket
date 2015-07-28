<?php include "include/header.php"; ?>
  <meta name="keywords" content="Juge, juge des affaires familiales, juge de proximité, juridique, tribunal, tribunal d'instance, tribunal des affaires de sécurité sociale, prud'hommes, PV, JAF, démarches, demarche, demarches, administratif, saisine.">
  <meta name="description" content="Toute La Justice simplifie et facilite vos démarches judiciaires en vous permettant de saisir rapidement les tribunaux, directement en ligne et sans avocat.">
  <title>Phone Justice | Accueil</title>

</head>
<body id="body" class="landing home">
  <div class="page">
    
    <?php include "include/navbar.php"; ?>

    <section class="landing-header homepage-background">
        <div class="container">
          <h1 class="landing-header-title">Vendez votre téléphone au meilleur prix</h1>
          <p class="landing-header-intro">En ligne, sans avocat.</p>

          <?php 
if (isset($_GET['enregistrement'])) {
  echo "<div class='col-md-8 col-md-offset-2 enregistrement'><h1>Votre produit à bien été enregistré</h1><img src='img/loading.gif' /></div>";
}
 ?>
              <form action="estimation-du-produit.php" method="post" class="col-md-12 formulaire_accueil">
                <div class="col-md-8 col-md-offset-2">
                  <select name="brand" id="brand_select">
                      <option selected="true" disabled="disabled" id="default">Marque</option>
                      <option id="apple">Apple</option>
                      <option id="samsung">Samsung</option>
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

    <section class="three-steps text-center pad">
          <div class="container">
            <h2 class="section-heading">Toute la justice.com : saisir en ligne la juridiction compétente sans avocat.</h2>
           <p>La plupart des juridictions peuvent se saisir sans avocat. Pour autant, le droit demeure une matière complexe et inabordable.<br /> <br>
           Toute la justice.com vous permet de saisir le tribunal dans un grand nombre de cas directement en ligne et sans avocat.
           Nous vous aidons dans vos démarches juridiques et administratives au travers de l'assistance de notre équipe juridique.</p><br /><br />
        </div>
    </section>

  <div class="background col-md-12 col-sm-12 col-xs-12">

    <h3 class="absolute">Domaines d'intervention</h3>

    <div id="features" class="container-fluid row3 features">

            <div class="row">
                <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Séparation</div>
                    <div class="f-details">Fixez ou révisez les droits sur les enfants.</div>
                </div>
                <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Après-divorce</div>
                    <div class="f-details">Modifiez votre jugement rendu par le JAF.</div>
                </div>
               <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Cotisations RSI / URSSAF</div>
                    <div class="f-details">Contestez les cotisations, contraintes, etc.</div>
                </div>
                <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Accidents du travail</div>
                    <div class="f-details">Indemnisation des accidents du travail.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Litiges entre particuliers</div>
                    <div class="f-details">Baux d'habitation, voisinage, etc.</div>
                </div>
                <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Litiges avec une société</div>
                    <div class="f-details">Litiges artisans, commercants, opérateurs, etc.</div>
                </div>
                <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Permis de conduire</div>
                    <div class="f-details">Contestez vos PV d'excès de vitesse.</div>
                </div>
               <div class="col-sm-3 col-xs-6 feature">
                    <div class="f-title">Prud' hommes</div>
                    <div class="f-details">Contestation de licenciement, heures suplémentaires, etc.</div>
                </div>
           </div>
      </div>
    </div>

<div id="testimonials" class="carousel-main container-fluid row6">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="testimonial">
                                <div class="testimonial-title">Gwenaël P.</div>
                                <div class="testimonial-details">Merci à vous car j'ai gagné le procès qui m'opposait à mon voisin. <br>Merci mille fois.</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="testimonial-title">Julie B.</div>
                                <div class="testimonial-details">Il ne me restait plus que 2 points sur mon permis, que j’allais perdre puisque j’ai été flashé sur l’A10 récemment. Dès que j’ai reçu le PV, j’ai fait appel à Toutelajutice.com. J’ai donc conservé mes 2 points, mon permis, et mon boulot ! Un grand bravo !</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <div class="testimonial-title">Bernard H.</div>
                                <div class="testimonial-details">L'URSAFF m'a demandé de payer des sommes que je ne comprenais pas et après plusieurs courriers ils n'ont rien voulu savoir. J'ai tenté le tout pour le tout avec vous, et je ne voulais pas passer par un avocat. J'ai immédiatement été contacté par leur service et on a trouvé un terrain d'entente.</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial">
                                <div class="testimonial-title">Arthur K.</div>
                                <div class="testimonial-details">Merci à vous de permettre aux justiciables de contester facilement un PV sans se ruiner. Un grand service rendu, j'attends avec impatience la réponse.</div>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
</div>
    
  </div>

</div>

<footer class="l-footer">

  <div class="footer-bottom">
    <div class="container">
        <div class="col-md-4">
          <a href="Saisissez-le-JAF-20145.php">
          <h2 class="footer-title">Affaires familiales</h2></a>
         <ul>
            <li><a href="php/Fiches-pratiques/Affaires-familiales/Liste-complete-Pension-alimentaire-00233.php">Pension alimentaire</a></li>
            <li><a href="php/Fiches-pratiques/Affaires-familiales/Liste-complete-Prestation-compensatoire-11245.php">Prestation compensatoire</a></li>
            <li><a href="php/Fiches-pratiques/Affaires-familiales/Liste-complete-Garde-des-enfants-66565.php">Garde des enfants</a></li>
            <li><a href="php/Fiches-pratiques/Affaires-familiales/Liste-complete-Droit-des-grands-parents-02156.php">Droit des grands-parents</a></li>
            <li><a href="php/Fiches-pratiques/Affaires-familiales/Liste-complete-Informations-sur-le-JAF-9995.php">informations sur le JAF</a></li>
          </ul> 
        </div>
        <div class="col-md-4">
          <a href="Reglez-votre-litige-en-5-minutes-45785.php">
          <h2 class="footer-title">Litiges du quotidien</h2></a>

        </div>
        <div class="col-md-4">
          <a href="Saisissez-le-tribunal-des-Affaires-de-securite-sociale-15489.php">
          <h2 class="footer-title">Contentieux RSI / URSSAF</h2></a>

        </div>

     </div>  

     <div class="container">
     <div class="col-md-4">
          <a href="index.php">
          <h2 class="footer-title">Toutelajustice.com</h2></a>
          <ul>
            <li><a href="Conditions-generales-de-vente-51489.php">CGV</a></li>
            <li><a href="Reglez-votre-litige-en-5-minutes-45785.php">Litiges-du-quotidien</a></li>
            <li><a href="Saisissez-le-JAF-20145.php">Affaires familiales</a></li>
            <li><a href="Saisissez-le-tribunal-des-Affaires-de-securite-sociale-15489.php">Contentieux RSI / URSSAF</a></li>
            <li><a href="Contestez-legalement-vos-PV-d-exces-de-vitesse-78154.php">Permis de conduire</a></li>
            <li><a href="Saisissez-le-conseil-des-Prud-hommes-789445.php">Prud'hommes</a></li>
          </ul>
        </div> 
        <div class="col-md-4">
          <a href="Contestez-legalement-vos-PV-d-exces-de-vitesse-78154.php">
          <h2 class="footer-title">Permis de conduire</h2></a>
        </div>

        <div class="col-md-4">
          <a href="Saisissez-le-conseil-des-Prud-hommes-789445.php">
          <h2 class="footer-title">Prud' hommes</h2></a>
           
        </div>
         
       </div>  
  </div>
<div class="footer-top">
    <div class="container">
      <div class="row">
      </div>
      <p class="footer-copyright">©  Toutelajustice.com 2015. Tous droits réservés.</p>
    </div>
  </div>
</footer>
</html>
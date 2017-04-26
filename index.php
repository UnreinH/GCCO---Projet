<?php require_once "head.php"; ?>
<?php require_once "header.php"; ?>



<div class="tab-content">
<div id= "accueil" class="tab-pane fade in active">
            <h1 class="cover-heading">Accueil</h1>
            <p class="lead"> Ce livrable électronique présente le résultat de l'équipe Girls Only. L'objectif est de réaliser une capitalisation et modélisation des connaissances . Ici nous retravaillons la forme de ces informations pour une meilleure lisibilité. Pourquoi "Le changement d'une roue sur un terrain plat" ? Un préjugé est encore ancré dans nos têtes : une femme ne sait pas changé une roue de voiture. Nous avons donc espoir qu'avec ce travail les compétences des femmes et de toutes personnes ignorantes de la roue de secours, se développeront. 
            </p>
    <br>
    <hr>
    <br>
            <h1 class="cover-heading">Démarche</h1>
            <p class="lead"> Afin de comprendre toutes les subtiliter de la chose voici la démarche conseillée : commencez par vous enquérir des différents concepts. Puis suivez les étapes décrites. Afin de comprendre le pourquoi du comment vous pouvez consulter les phénomènes.
            </p>
              <a data-toggle="tab" href="#concepts" class="btn btn-lg btn-default">Concepts</a>
              <a data-toggle="tab" href="#AT" class="btn btn-lg btn-default">A&T</a>
              <a data-toggle="tab" href="#phenomenes" class="btn btn-lg btn-default">Phénomènes</a>
            </p>
        
</div>    
    
<div id="concepts" class="tab-pane fade">
    <div class="inner cover">
            <h1 class="cover-heading">Concepts c'est partie</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>

          </div>
</div>

<div id="AT" class="tab-pane">
    <div class="inner cover">
            <h1 class="cover-heading">Activités et Tâches</h1>
            <p class="lead">Cette description vous détaille chaque étapes du bon déroulement du changement de roue. Ainsi on identifie trois phases principales : la préparation, l'opération en elle-même, et l'épilogue. Vous pouvez les concerter ci-dessous.</p>
            <br>
            <hr>
            <br>
     </div>

    <div class="col-sm-4">
      <h2 class="text-center"><strong>Préparation</strong></h2><br>
      <a href="#preparation" data-toggle="collapse">
        <img src="images/preparation.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
      </a>
    </div>
    <div id="preparation" class="collapse">
      <div class="containers">
        <div class="col-md-4">
          <h2>Sécuriser la zone</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>S'équiper</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
      </div>
      </div>
    
    
        <div class="col-sm-4">
      <h2 class="text-center"><strong>Opération</strong></h2><br>
      <a href="#operation" data-toggle="collapse">
        <img src="images/changer.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
      </a>
      <div id="operation" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    
    <div class="col-sm-4">
      <h2 class="text-center"><strong>Epilogue</strong></h2><br>
      <a href="#epilogue" data-toggle="collapse">
        <img src="images/fin.jpg" class="img-circle person" alt="Random Name" width="200" height="200">
      </a>
      <div id="epilogue" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>

</div>

<div id= "phenomenes" class="tab-pane fade">
       <div class="inner cover">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>

          </div>
</div>

<div id="contacts" class="tab-pane">
    <div class="inner cover">
            <h1 class="cover-heading">Présentation de nous</h1>
            <p class="lead">L'une après l'autre :)</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
    </div>
</div>


</div>
  <script>
$(document).ready(function(){
    $(".masthead-nav a").click(function(){
        $(this).tab('show');
    });
});
</script>
        <?php require_once "footer.php"; ?>

<?php require_once "head.php"; ?>
<?php require_once "header.php"; ?>


<div class="tab-content">
<div id= "accueil" class="tab-pane fade in active">
    <div class="inner cover">
            <h1 class="cover-heading">Accueil</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>
</div>    
    
<div id="AT" class="tab-pane">
    <div class="inner cover">
            <h1 class="cover-heading">Activité c'est partie</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>
</div>
    
<div id="concepts" class="tab-pane fade">
    <div class="inner cover">
            <h1 class="cover-heading">Concepts c'est partie</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>
</div>

<div id= "phenomenes" class="tab-pane fade">
       <div class="inner cover">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
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

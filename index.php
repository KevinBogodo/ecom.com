<?php
  session_start();
 require 'inc/header.php'
 ?>
<main role="main">
  <div id="mycarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li style="z-index:102" data-target="#mycarousel" data-slide-to="0"
        class="active"></li>
        <li style="z-index:102" data-target="#mycarousel" data-slide-to="1"></li>
        <li style="z-index:102" data-target="#mycarousel" data-slide-to="2"></li>
    </ol>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img class=" d-block w-100" src="img/01.jpg" alt="First Slide">
      <div class="container">
        <div class="carousel-caption">
            <h1>First Slide</h1>
            <p>kzfzfj ijfoiejfz,eopfzeoip ezoipfjz</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/03.jpg" alt="Second Slide">
      <div class="container">
        <div class="carousel-caption text-left">
            <h1>Second Slide</h1>
            <p>kzfzfj ijfoiejfz,eopfzeoip ezoipfjz</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/05.jpg" alt="Third Slide">
      <div class="container">
        <div class="carousel-caption text-right">
            <h1>Third Slide</h1>
            <p>kzfzfj ijfoiejfz,eopfzeoip ezoipfjz</p>
        </div>
      </div>
    </div>
 </div>
<a style="z-index:101;" class="carousel-control-prev" href="#mycarousel"
 role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hiden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a style="z-index:101;" class="carousel-control-next" href="#mycarousel"
 role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hiden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<div class="container marketing">
  <h2 id="produit1" style="padding-top:65px;">produit1</h2>
  <hr>
  <div class="row" id="produitID"></div>
  <h2 id="produit2" style="padding-top:65px;">produit2</h2>
  <hr>
  <div class="row" id="produit2ID"></div>
  <h2 id="produit3" style="padding-top:65px;">produit3</h2>
  <hr>
  <div class="row" id="produit3ID"></div>
  <hr class="featurette-divider">
</div>

  <!-- MODAL -->



</div>


</main>







<?php require 'inc/footer.php'?>

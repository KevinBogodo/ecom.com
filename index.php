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
      <img class="e d-block w-100" src="img/03.jpg" alt="Second Slide">
      <div class="container">
        <div class="carousel-caption text-left">
            <h1>Second Slide</h1>
            <p>kzfzfj ijfoiejfz,eopfzeoip ezoipfjz</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="e d-block w-100" src="img/05.jpg" alt="Third Slide">
      <div class="container">
        <div class="carousel-caption text-right">
            <h1>Third Slide</h1>
            <p>kzfzfj ijfoiejfz,eopfzeoip ezoipfjz</p>
        </div>
      </div>
    </div>

</div>

  </div>

</main>







<?php require 'inc/footer.php'?>

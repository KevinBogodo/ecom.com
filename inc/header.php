
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>ecom.com</title>
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top text-white" style="background:#1976d2">
  <a class="navbar-brand" href="index.php">ecom.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto menu">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Actualité</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Direct</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Boutique</a>
      </li>

    </ul>

    <form class="form-inline my-3 my-lg-0">
      <?php if(isset($_SESSION['auth'])): ?>
        <!-- ajouter le nom ou le crédit de l'utilisateur <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
        <a class="text-white nav-link" href="#">
          <i class="text-waring fas fa-shopping-cart"> </i>cart
          <i style="" id="cart_n"></i>
        </a>
        | (<?= $_SESSION['auth']->credit; ?> XAF) |
        <a style="cursor:pointer" class="text-white nav-link" data-toggle="modal" href="account.php">
          <i class="text-waring far fa-user-circle"></i>
        </a>|
        <a  href="logout.php" class="text-white nav-link">
            <i class="text-waring fas fa-sign-out-alt"></i>
        </a>
      <?php else: ?>
          <a class="text-white nav-link" href="register.php">S'inscrire</a>
          <a class="text-white nav-link" href="login.php">Se connecter</a>
      <?php endif; ?>
    </form>
  </div>
</nav>
<!-- /.container -->
<div class="container wraper">

  <?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
      <div class="alert alert-<?= $type; ?>">
        <?= $message; ?>
      </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
 <?php endif; ?>

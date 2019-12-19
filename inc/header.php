
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>header</title>
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Actualité</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Direct</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Boutique</a>
      </li>

    </ul>
    <ul class="form-inline my-3 my-lg-0">
      <?php if(isset($_SESSION['auth'])): ?>
        <!-- ajouter le nom ou le crédit de l'utilisateur <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
        <?= $_SESSION['auth']->credit; ?> XAF
        <a  href="logout.php" class="btn btn-secondary my-2 my-sm-0">Deconnexion</a>
      <?php else: ?>
          <a class="nav-link" href="register.php">S'inscrire</a>
          <a class="nav-link" href="login.php">Se connecter</a>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<!-- /.container -->
<div class="container">

  <?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
      <div class="alert alert-<?= $type; ?>">
        <?= $message; ?>
      </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
 <?php endif; ?>

<?php
if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
  require_once 'inc/db.php';
  require_once 'inc/functions.php';
  $req = $pdo->prepare("SELECT * FROM users WHERE username = :username OR email = :username");

// vérifie que l'utilisateur a confirmé via le liens  $req = $pdo->prepare("SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL");

  $req->execute(['username' => $_POST['username']]);
  $user = $req->fetch();
  //vérification du mot de passe après le achage

   if(password_verify($_POST['password'],$user->password)){
     session_start();
     $_SESSION['auth'] = $user;
     $_SESSION['flash']['success'] = 'vous ete connecté';
     header('location: account.php');
     exit();
     // il faut rajouter la fonction de vérification de confirmation email confirmed_at
   }else {
     $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
   }


}
 ?>
<?php require 'inc/header.php'; ?>

  <h1>Se connecter</h1>

  <form class="" action="" method="POST">

    <div class="form-group">
      <label for="">Login ou email</label>
      <input type="text" name="username" class="form-control"  />
    </div>

    <div class="form-group">
      <label for="">Mot de passe </label>
      <input type="password" name="password" class="form-control"  />
    </div>

    <button type="submit" class="btn btn-primary">Connexion</button>
    <label><a href="forget.php"> | (mot de passe oublier)</a></label>
  </form>

<?php require 'inc/footer.php'; ?>

<?php

if (isset($_GET['id']) && isset($_GET['token'])) {
      require 'inc/db.php';
      require 'inc/functions.php';
      $req = $pdo->prepare('SELECT * FROM users WHERE id = ? AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 45 MINUTE)');
      $req->execute([$_GET['id'],$GET['token']]);
      $user = $req->fetch();

      if ($users) {
          debug($users);
      }else {
        $_SESSION['flash']['danger'] = "ce liens n'est pas valide";
        header('location: login.php');
        exit();
      }


}else {
  header('location: login.php');
  exit();
}

 ?>
<?php require 'inc/header.php'; ?>

  <h1>Réinitialiser mot de passe</h1>

      <form action="" method="post">
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="changer de mot de passe"/>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" name="password_confirm" placeholder="confirmation du mot de passe"/>
        </div>
        <button class="btn btn-primary">Réinitialisation du mot passe</button>

      </form>

<?php require 'inc/footer.php'; ?>

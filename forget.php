<?php
if (!empty($_POST) && !empty($_POST['email'])) {
  require_once 'inc/db.php';
  require_once 'inc/functions.php';
  $req = $pdo->prepare("SELECT * FROM users WHERE email = ?");

// vérifie que l'utilisateur a confirmé via le liens  $req = $pdo->prepare("SELECT * FROM users WHERE email = :email AND confirmed_at IS NOT NULL");

  $req->execute([$_POST['email']]);
  $user = $req->fetch();

   if($user){
     session_start();
     $reset_token = str_random(60);
     $pdo->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
     $_SESSION['flash']['success'] = 'un lien vous à été envoyer pour réinitialisé le mot de passe';
      mail($_POST['email'], 'Réinitialisation du mot de passe de votre Compte',"Affin de valider cliquer sur ce liens\n\nhttp://localhost/ecommerce.com/reset.php.php?id={$user_id}&token=$reset_token");
     header('location: login.php');
     exit();
     // il faut rajouter la fonction de vérification de confirmation email confirmed_at
   }else {
     $_SESSION['flash']['danger'] = 'Aucun Compte trouvé';
   }


}
 ?>
<?php require 'inc/header.php'; ?>

  <h1>Mot de passe oublié</h1>

  <form class="" action="" method="POST">

    <div class="form-group">
      <label for="">email</label>
      <input type="email" name="email" class="form-control"  />
    </div>


    <button type="submit" class="btn btn-primary">Connexion</button>
      </form>

<?php require 'inc/footer.php'; ?>

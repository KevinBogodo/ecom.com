<?php require_once "inc/functions.php";
      session_start();

if (!empty($_POST)){


// creation d'une variable error qui est un tableau qui ce remplira avec les erreurs
$errors= array();
require_once 'inc/db.php';

        if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
          $errors['username'] = "pseudo invalide";
        }else {
          $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
          $req->execute([$_POST['username']]);
          $user = $req->fetch();
            if ($user) {
              $errors['username'] = 'ce Pseudo est déjà utilisé';
            }
        }
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
          $errors['email'] = "email non valide";
        }else {
          $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
          $req->execute([$_POST['email']]);
          $user = $req->fetch();
            if ($user) {
              $errors['email'] = 'email déjà utilisé par un autre compte';
            }
        }

        if (empty($_POST['password']) ||$_POST['password'] != $_POST['password_confirm']) {
          $errors['password'] = "vous devez rentrer un mot de passe valide";
        }

        if (empty($errors)) {

          $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?, confirmation_token= ?" );
          //cryptage du MDP avant le stockage
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
          $token = str_random(60);
          $req->execute([$_POST['username'], $password, $_POST['email'], $token ]);
          $user_id = $pdo->lastInsertId();
          mail($_POST['email'], 'Confirmation de votre Compte',"Affin de valider votre Compte cliquer sur ce liens\n\nhttp://localhost/ecommerce.com/confirmation.php?id=$user_id&token=$token");
            $_SESSION['flash']['success'] = 'un email de confirmation vous à été envoyer';
            header('location: login.php');
            exit;
        }

}
 ?>

<?php require "inc/header.php"; /// affichage ?>
<h1>S'inscrire</h1>

  <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
      <p>Vous n'avez pas rempli le formulaire correctement</p>
        <ul>
          <?php foreach($errors as $error): ?>
            <li><?=$error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
  <?php endif; ?>

<form class="" action="" method="POST">

  <div class="form-group">
    <label for="">Pseudo</label>
    <input type="text" name="username" class="form-control"  />
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control"  />
  </div>

  <div class="form-group">
    <label for="">Create Password</label>
    <input type="password" name="password" class="form-control"  />
  </div>
  <div class="form-group">
    <label for="">Confirm Password</label>
    <input type="password" name="password_confirm" class="form-control"  />
  </div>

  <button type="submit" class="btn btn-primary">M'inscrire</button>

</form>

<?php require "inc/footer.php"; ?>

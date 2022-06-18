<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /php-login');
}
/*require 'database.php';*/

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: /php-login");
  } else {
    $message = 'Sorry, those credentials do not match';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<style>
  body {
    background-image: url("https://images.alphacoders.com/519/thumb-1920-519509.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }

  h1 {
    font-family: 'Courgette', cursive;
    color: #0098cb;
    text-shadow: 4px 4px white;
    font-size: 60px;
  }

  @media only screen and (min-device-width: 400px) {
    body {
      background-image: url('https://images.alphacoders.com/519/thumb-1920-519509.jpg');
    }
  }
</style>

<body>
  <?php require '../partials/header.php' ?>

  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>
  <br><br><br><br><br><br><br>
  <h1>Iniciar Sesión</h1>

  <form action="login.php" method="POST">
    <input name="email" type="text" placeholder="Ingrese su email">
    <input name="password" type="password" placeholder="Ingrese su contraseña">
    <input type="submit" value="Ingresar">
  </form>
</body>

</html>
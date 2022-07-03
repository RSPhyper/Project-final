<?php
    // session_start();
    require 'function.php';

    if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM addmin WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // $_SESSION['auth'];
            header("Location:Admin.php");
            exit;
        }
    }
    $error = true;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="text-center">
    <br><br><br><br><br><br>
<main class="form-signin w-50 m-auto">

    <?php if (isset($error)) : ?>
        <div class="wrongpass"><i class="fas fa-times-circle"></i> <p>SILAHKAN COBA LAGI!!</p></div>
        <script>openForm()</script>
     <?php endif; ?>

  <form action="" method="POST">
  <img class="d-block mx-auto mb-4" src="img/distro.png" alt="" width="430" height="200">
    <h1 class="h3 mb-3 fw-normal">Admin</h1>

    <div class="form-floating">
    <input class="input-text" type="text" name="username" placeholder="username" id="username" required>
    </div>
    <br>    
    <div class="form-floating">
    <input class="input-text" type="password" name="password" placeholder="password" id="password" required>
    </div>

    <div class="checkbox mb-3">
        <br>
      <label>
        <input type="checkbox" value="remember-me"> Remember me
        <br>
        <button class="submit-button"><a href="registrasiadmin.php">registrasi</a></button>
      </label>
    </div>
    <button class="w-50 btn btn-lg btn-primary" type="submit" name="login">Log in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
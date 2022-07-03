<?php
require 'function.php';

if (isset($_POST["register"])) {
    if (registrasiadmin($_POST) > 0) {
        echo " 
        <script>
            alert('Data Berhasil ditambahkan');
            
        </script> ";
    } else {
        echo mysqli_error($conn);
    }
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
  <form action="" method="POST">
  <img class="d-block mx-auto mb-4" src="img/distro.png" alt="" width="430" height="200">
    <h1 class="h3 mb-3 fw-normal">registrasi</h1>

    <div class="form-floating">
        <input type="text" name="username" id="username" placeholder="username" required></br></br>
    </div>
    <div class="form-floating">
        <input type="password" name="password" id="password" placeholder="password" required></br></br>
    </div>
    <div class="form-floating">
        <input type="password" name="password2" id="password2" placeholder="konfirmasi" required></br></br>
    </div>
<br>
    <button class="w-50 btn btn-lg btn-primary" type="submit" name="register">registrasi</button><br><br>
    <a href="logadmin.php"><button type="button" class="btn btn-success">Kembali Ke login admin</button></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
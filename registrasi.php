<?php
require 'function.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo " 
        <script>
            alert('Data Berhasil ditambahkan');
            
        </script> ";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <link rel="stylesheet" href="asset/css/regis.css">
    <script src="asset/jss/popup.js"></script>
</head>
<body>
    <form action="" method="post">
        <table>
        <div>
        <h1>REGISTRASI</h1>
        <h2><img src="img/distro.png" alt="" height="100px" width="200px"></h2>
                <input type="text" name="username" id="username" placeholder="username" required></br></br>

                <label class="show-pass" >
                    <input type="checkbox" onclick="myFunction('password')">  <i class="far fa-eye"></i>
                </label>
                <input type="password" name="password" id="password" placeholder="password" required></br></br>

                <label class="show-pass2" >
                    <input type="checkbox" onclick="myFunction('password2')">  <i class="far fa-eye"></i>
                </label>
                <input type="password" name="password2" id="password2" placeholder="konfirmasi" required></br></br>

                <button type="submit" name="register">Register</button>
                <p>sudah punya akun?<a href="login.php"> sign in</a></p>
        </div>
        </table>
    </form>
    <script src="https://kit.fontawesome.com/7bd30e020c.js" crossorigin="anonymous"></script>
</body>
</html>
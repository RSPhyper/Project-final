<?php

    require 'function.php';

    if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM loginuser WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location:index.php");
            exit;
        }
    }
    $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="asset/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/log.css">
    <link rel="stylesheet" href="asset/css/nav.css">
    <link rel="stylesheet" href="asset/css/area.css">
    <link rel="stylesheet" href="asset/css/stylefot.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/distro.png">
    <title>Distro IT</title>
    <script src="asset/js/popup.js"></script>
    
  

</head>
<body>
    

    <div class="nav">
        <div class="nama-brand">
            <h1>
                <img src="img/distro.png" alt=""  width="200px">
            </h1>
        </div>
        <div class="brand">
            <h1>
            <a>Log in</a>
            </h1>
        </div>
        <div class="but-sign-in">
            <button class="but-login" onclick="openForm()" >Login</button>
        </div>
    </div>
    <div class="body">
        <div class="kata">
            <h1>Selamat Datang di Distro IT</h1>
            <br>Klik Login untuk lanjut ke halaman utama</p>
        </div>
        <div class="logarea" id="pop-up-form">
            <button class="logclose" onclick="closeForm()" >
                &times
            </button>
                <h1 class="logjudul">
                    LOGIN </br></br><i class="fas fa-user"></i>
                </h1>
                 <?php if (isset($error)) : ?>
                    <div class="wrongpass"><i class="fas fa-times-circle"></i> <p>Yang anda ketikkan SALAH!!</p></div>
                    <script>openForm()</script>
                 <?php endif; ?>

            <form action="" method="POST">
                <label class="show-pass" >
                            <input type="checkbox" onclick="myFunction('password')">  <i class="far fa-eye"></i>
                </label>

                   <table class="form" >

                       <tr>
                           <td>
                            <input class="input-text" type="text" name="username" placeholder="username" id="username" required>
                           </td>
                       </tr>

                       <tr>
                           <td>
                           <input class="input-text" type="password" name="password" placeholder="password" id="password" required>
                           </td>
                       </tr>

                       <tr>
                           <td>
                                <p class="cookis">Baru di DistroIT?, silahkan registrasi</p></br>
                           </td>
                       </tr>
                            
                       <tr>
                           <td>
                           <button class="submit-button" type="submit" name="login">Login <i class="fas fa-sign-in-alt"></i> </button></br></br><!--br untuk enter-->
                           </td>
                       </tr>

                       <tr>
                           <td>
                           <!-- <button class="submit-button" type="submit" name="registrasi">registrasi</button> -->
                           <button class="submit-button"><a href="registrasi.php">registrasi</a></button>
                           </td>
                       </tr>
                  
                      
                   </table>

                </form>
        </div>

    </div>
    <div class="footer">
        <div class="contack">
            <h1>Contact</h1>
     
            <ul>
                <li><a href="https://www.instagram.com/" target="ig"><div class="ig"><i class="fab fa-instagram"></i></div>  DistroIT </a></li>
                <li><a href="https://mobile.facebook.com/" target="fb"><div class="fb"><i class="fab fa-facebook-f"> </i></div> DistroIT </a></li>
            </ul>
        </div>
        <div class="copyright">
            <h5><i class="far fa-copyright"></i>フェニックスの祝福</h5>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/7bd30e020c.js" crossorigin="anonymous"></script> 
    <!-- script yg di pakai untuk mengambil icon di font awesome -->
   
</body>
</html>
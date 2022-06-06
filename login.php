<?php

    require 'functions.php';

    if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

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
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/logarea.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="JPG/orang.png">
    <title>Go bloG</title>
    <script src="JS/all.js"></script>
    
  

</head>
<body>
    

    <div class="nav">
        <div class="nama-brand">
            <h1><img src="JPG/logo.png" alt=""  width="200px"><a href=""></a></h1>
        </div>
        <div class="but-sign-in">
            <button class="guest-account"><a href="guest.php">Guest</a></button>
            <button class="but-login" onclick="openForm()" >Login</button>
        </div>
    </div>
    <div class="body">
        <div class="kata">
            <h1>Go bloG</h1>
            <p>Go blog membantu anda terhubung dan berbagi kebahagiaan dengan orang-orang dalam kehidupan Anda <br>
            <br>Klik Guest untuk lanjut ke halaman utama</p>
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
                                <p class="cookis">jika belum mempunyai akun Go bloG,</br> silahkan registrasi</p></br>
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
            <h1>MyContact</h1>
     
            <ul>
                <li><a href="https://www.instagram.com/restuphoenam/" target="ig"><div class="ig"><i class="fab fa-instagram"></i></div>  Restu.phoenam017 </a></li>
                <li><a href="https://mobile.facebook.com/Restu.phoenam017/" target="fb"><div class="fb"><i class="fab fa-facebook-f"> </i></div> Restu.phoenam017 </a></li>
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
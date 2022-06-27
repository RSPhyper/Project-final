<?php
// koneksi database agar bisa di akses
$conn =  mysqli_connect("localhost", "root", "", "project-final");

// query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// tambah data
function tambah($data)
{
    global $conn;
    $caption = htmlspecialchars($data["caption"]);
  

    $query = "INSERT INTO artikel
                VALUES
                 (NULL, '$caption')";

    mysqli_query($conn, $query);
    // memngcek apakah data berhasil dimodifikasi atau tidak
    return mysqli_affected_rows($conn);
}

// menghapus data
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM artikel WHERE id=$id");
    mysqli_query($conn, "DELETE FROM loginuser WHERE id=$id");
    return mysqli_affected_rows($conn);
}

// mengupdate data
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $caption = htmlspecialchars($_POST["caption"]);

    $query = "UPDATE artikel SET
    caption = '$caption'
    WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $konfirmasiPassword = mysqli_real_escape_string($conn, $data["password2"]);

    // mengcek terlebih dahulu username yang dibuat sudah terdaftar atau belum

    $result = mysqli_query($conn, "SELECT username from loginuser where username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo " 
        <script>
            alert('Username sudah terdaftar, silahkan login');
        </script> ";
        return false;
    }

    if ($password != $konfirmasiPassword) {
        echo " 
        <script>
            alert('Password tidak sesuai');
        </script> ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password);

    // masukan data ke databases
    $query = "INSERT INTO loginuser
                 VALUES (NULL, '$username','$password')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

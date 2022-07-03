<?php
    include "function.php"; //untuk menghubungan database
// harus sesuai yang ada didatabase agar tidak terjadi error
    $id = $_GET['br_id'];
    $nama = $_POST['br_nm'];
    $item = $_POST['br_item'];
    $harga = $_POST['br_hrg'];
    $stok = $_POST['br_stok'];
    $satuan = $_POST['br_satuan'];
    $keterangan = $_POST['ket'];
    $status = $_POST['br_sts'];

// upload gambar
    $tambah = $_POST['tambah'];
    $gambar = $_FILES['br_gbr']['name'];
    $sorce = $_FILES['br_gbr']['tmp_name'];
    $folder = 'img/barang/';
    move_uploaded_file($sorce, $folder.$gambar);

// end upload 

    // $foto1 = %$_FILES['foto']['tmp_name'];

    // // tentukan lokasi file yang akan dipindahkan
    // $foto3 = 'gambar/';
    // // pindahkan file
    // $foto4 = move_uploaded_file($foto1, $foto3, $foto);

    if ($tambah){

        $sql = mysqli_query($conn, "INSERT INTO barang
        VALUES('',
        '$nama',
        '$item',
        '$harga',
        '$stok',
        '$satuan',
        '$gambar',
        '$keterangan'
        ,'$status')");
    if ($sql){ ?>
        <script>
            alert('tambah data sukses');
            window.location.href = "Admin.php"
        </script>

        <?php
        } else {
            echo "tambah data gagal";
        }
    }
    // // untuk cek error di php/else yang muncul
    // var_dump($nama variabel)
?>
<?php
require 'function.php';

if(isset($_POST["submit"]) ){
    if(tambah($_POST) > 0){
        echo "<script>
            alert ('Data berhasil ditambahkan');
            document.location.href='index.php';
        </script>";
    }
    else{
        echo "<script>
            alert ('Data gagal ditambahkan');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- harus sesuai nama di database atau fill -->
    <form action="prosestambah.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>nama barang</td>
                <td><input type="text" name="br_nm"></td>
            </tr>
            <tr>
                <td>per item</td>
                <td><input type="text" name="br_item"></td>
            </tr>
            <tr>
                <td>harga barang</td>
                <td><input type="text" name="br_hrg"></td>
            </tr>
            <tr>
                <td>stok barang</td>
                <td><input type="text" name="br_stok"></td>
            </tr>
            <tr>
                <td>satuan barang</td>
                <td><input type="text" name="br_satuan"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>
                    <input type="file" name="br_gbr" id="">
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="ket"></td>
            </tr>
            <tr>
                <td>status</td>
                <td><input type="text" name="br_sts"></td>
            </tr>
            <tr>
                <td><input type="submit" name="tambah" id="Tambah Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>
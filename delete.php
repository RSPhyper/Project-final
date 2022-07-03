<?php
include "function.php";

$id = $_GET['br_id'];
$sql = mysqli_query($conn, "DELETE FROM barang WHERE br_id ='$id'");
if($sql) { ?>
    <script>
    alert('Hapus data sukses');
    window.location.href= "Admin.php";
    </script>
    <?php
}else{
    echo "Hapus data gagal";
}
?>
<!-- <?php
    include 'function.php';
    ?> -->
    
    <!-- tips
        alt atas bawah untuk pindahkan baris sintaks atas ke bawah
        td*5(tag yg lain) untuk sekaligus buat td 5 baris
        shift+alt bawah untuk mengcopy sintaks kebawah
        ctrl+d untuk mengblock tag yang sama sekaligus mengganti tag nya bersamaan-->
    
        <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        
    <!-- navbar -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Admin</button>
              <a href="tambahbarang.php"><button type="button" class="btn btn-primary">Create</button></a>
            </div>
          </div>
        </div>
      </header>
    <!-- end navbar -->
    
        <br><br><br>
    
    <!-- content -->
    
        <div class="container">
            <h1 class="text-center">Kelompok 7 </h1>
            <h2 class="text-center">Daftar Barang</h2>
            <br>
            <table class="table table-white table-hover table-bordered border border-danger ">
                <tr class="table table-dark">
                    <td>No</td>
                    <td>Nama Barang</td>
                    <td>Per item</td>
                    <td>Harga Barang</td>
                    <td>Stok Barang</td>
                    <td>satuan Barang</td>
                    <td>gambar Barang</td>
                    <td>Keterangan</td>
                    <td>Status</td>
                    <td>pilih</td>
                </tr>
    
                <?php
            // kenapa$koneksi karena untuk menghubungan sql dari koneksi.php
            $sql = mysqli_query($conn, "SELECT * FROM barang");
            if (mysqli_num_rows($sql)):
                $no = 1;
                // kenapa sql di jadikan $data karena sql terlalu banyak menampung data, dan dijadikan sebagai pemanggil dari ke mysql
                foreach ($sql as $data):
            ?>
    
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['br_nm'];?></td>
                    <td><?= $data['br_item'];?></td>
                    <td><?= $data['br_hrg'];?></td>
                    <td><?= $data['br_stok'];?></td>
                    <td><?= $data['br_satuan'];?></td>
                    <td>
                      <img src="img/barang/<?= $data['br_gbr'];?>" alt="" class="img-fluid" width="100px" height="100px">
                    </td>
                    <td><?= $data['ket'];?></td>
                    <td><?= $data['br_sts'];?></td>
                    <td><a href="delete.php?br_id=<?= $data['br_id']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
    
                <?php
            $no++;
                endforeach;
                endif;
            ?>
    
            </table>
    
            <br>
    
            <a href="index.php"><button type="button" class="btn btn-primary">Kembali Ke Halaman Utama</button></a>
        </div>
    
    <!-- end content -->
    
    <!-- footer -->
    
        <div class="b-example-divider"></div>
    
    <div class="container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
          <p class="text-muted">&copy; 2022</p>
        </div>
    
        <div class="col mb-3">
    
        </div>
    
        <div class="col mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
      </footer>
    </div>
    
    <!-- end footer -->
    
    </div>
    </body>
    </html>
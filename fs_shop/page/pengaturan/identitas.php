<!DOCTYPE html> 
<html lang="en">
  <?php
    include '../../util/koneksi.php';
    $lihat = $koneksi->query("SELECT * FROM tampilan");
		while($fetchData = $lihat->fetch_assoc()){
  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$fetchData['judul_web']?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

  <body id="page-top" style="font-family:<?=$fetchData['font']?>;">

    <!-- Navbar -->
    <!-- 
    Navbar Must Responsive Mobile With 3 Lines Dropdown
    Navbar Uses Nested Navbar
    Navbar Must Have Dynamic Background
    -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:<?=$fetchData['warna']?>;'">
      <a class="navbar-brand" href="#"><?=$fetchData['judul_web']?></a>
    </nav>
    
    <div id="wrapper">

    <!-- Sidebar -->
    <!-- Sidebar If Match Can Be Build With Category Item -->

    <ul class="sidebar navbar-nav" style="background:<?=$fetchData['color']?> !important;"> 
        <li class="nav-item active">
          <a class="nav-link" href="panel.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dasbor</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pengaturan</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="identitas.php">Identitas</a>
            <a class="dropdown-item" href="utilitas.php">Utilitas</a>
            <a class="dropdown-item" href="user_grup.php">User</a>
            <a class="dropdown-item" href="shift.php">Shift</a>
            <a class="dropdown-item" href="tampilan.php">Tampilan</a>
            <a class="dropdown-item" href="tentang.php">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Master</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="user/list.php">Data Supplier</a>
            <a class="dropdown-item" href="user/list.php">Data Supplier</a>
            <a class="dropdown-item" href="user/list.php">Data Supplier</a>
            <a class="dropdown-item" href="user/list.php">Data Lokasi</a>
            <a class="dropdown-item" href="user/list.php">Data Barang</a>
            <a class="dropdown-item" href="user/list.php">Data Pelanggan</a>
            <hr>
            <a class="dropdown-item" href="user/list.php">Import Data Supplier</a>
            <a class="dropdown-item" href="user/list.php">Import Data Barang</a>
            <a class="dropdown-item" href="user/list.php">Import Data Pelanggan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Maintenance</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="managing/pemesanan.php">Update Harga Barang</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Stok Opname Barang</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Transaksi</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="managing/pemesanan.php">Pembelian Barang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Retur Pembelian Barang</a>
              <hr>
              <a class="dropdown-item" href="managing/pemesanan.php">Penjualan Barang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Retur Penjualan Barang</a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Utilitas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="managing/pemesanan.php">Pembayaran Hutang</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Pembayaran Barang Konsinyasi</a>
            <hr>
            <a class="dropdown-item" href="managing/pemesanan.php">Pembayaran Piutang</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Keuangan</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="managing/pemesanan.php">Data Akun</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Transaksi Keuangan</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan Keuangan Rekap</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan Keuangan Detail</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Laporan Data Master</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan Stok Barang</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan Stok Opname Barang</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan History Harga Barang</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan Barang Expired</a>
            <a class="dropdown-item" href="managing/pemesanan.php">Laporan Barang Hilang</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Laporan Transaksi Master</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Pembelian Barang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Penjualan Barang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Retur Pembelian Barang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Retur Penjualan Barang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Laba(Rugi)</a>
              <hr>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Pembayaran Hutang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Barang Konsinyasi</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Pembayaran Konsinyasi</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Pembayaran Piutang</a>
              <a class="dropdown-item" href="managing/pemesanan.php">Laporan Ganti Shift</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-fw fa-door-open"></i>
              <span>Keluar</span> 
            </a>
          </li>
      </ul>

      <div id="content-wrapper">
      <?php
        include '../../util/koneksi.php';
        $view = $koneksi->query("SELECT * FROM identitas");
			  while($fetchData = $view->fetch_assoc()){
      ?>
      <!-- Main Dashboard -->
      <!--
        Main Dashboard Can Fill With Background Etc
        The Background Must Dynamic 
        Apllying Background Only For Main Dashboard , On Other page is not neccesary
      -->
        <div class="container-fluid">
          <div class="container form-spacing">
            <h2>Identitas</h2>
            <p>Menu Ini Digunakan Untuk Mengatur Identitas Toko / Perusahaan</p>
            <hr>
              <form class="form" method="post" enctype="multipart/form-data">
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="nama_toko">Nama Toko</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="nama_toko" id="nama_toko" class="form-control" value="<?=$fetchData['nama_toko']?>">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="nama_pemilik">Nama Pemilik</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" value="<?=$fetchData['nama_pemilik']?>">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="nama_penanggung">Nama Penanggung Jawab</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="nama_penanggung" id="nama_penanggung" class="form-control" value="<?=$fetchData['nama_tanggung']?>">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="alamat">Alamat</label>
                  </div>
                  <div class="col-sm-9">
                    <textarea name="alamat" id="alamat" class="form-control" ><?=$fetchData['alamat']?></textarea>
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="kota">Kota</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="kota" id="kota" class="form-control" value="<?=$fetchData['kota']?>">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="nama_toko">Kontak</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="kontak" id="kontak" class="form-control" value="<?=$fetchData['kontak']?>">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="email">E-mail</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="type" name="email" id="email" class="form-control" value="<?=$fetchData['email']?>">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="website">Website</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" name="website" id="website" class="form-control" value="<?=$fetchData['website']?>">   
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-3">
                    <label for="logo">Logo</label>
                  </div>
                  <div class="col-sm-3">
                    <input type="file" name="logo" id="logo" value="">
                  </div>
                  <div class="col-sm-6">
                    <img src="../../assets/img/<?=$fetchData['logo']?>" width="100px" height="100px">
                  </div>
                </div>
                <div class="row form-spacing">
                  <div class="col-sm-9 offset-sm-3">
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-danger">
                  </div>
                </div>  
              </form>
          <?php
            }
          ?>
          </div>
        </div>
    </div>
  </body>
  <?php
    }
?>
<?php


if(isset($_POST['nama_toko'])){
$nama_toko=$_POST['nama_toko'];
$nama_pemilik=$_POST['nama_pemilik'];
$nama_penanggung=$_POST['nama_penanggung'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$kontak=$_POST['kontak'];
$email=$_POST['email'];
$website=$_POST['website'];
$gambar=$_FILES['logo']['name'];
$tmp=$_FILES['logo']['tmp_name'];

$gambar_baru = date('dmYHis').$gambar;

$path = "../../assets/img/".$gambar_baru;

    if(move_uploaded_file($tmp,$path)){
    $query = "UPDATE identitas SET nama_toko='".$nama_toko."', nama_pemilik='".$nama_pemilik."' , nama_tanggung='".$nama_penanggung."' , alamat='".$alamat."' , kota='".$kota."' , kontak='".$kontak."' , email='".$email."' , website='".$website."' , logo='".$gambar_baru."'";
    $sql = mysqli_query($koneksi,$query);  
    }else{
        echo "Gambar Gagal Di Upload";
    }

}



?>

<!DOCTYPE html> 
<html lang="en">
  <?php
    include '../../util/koneksi.php';
    $view = $koneksi->query("SELECT * FROM tampilan");
		while($fetchData = $view->fetch_assoc()){
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
          <a class="nav-link" href="../../index.php">
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
      <!-- Main Dashboard -->
      <!--
        Main Dashboard Can Fill With Background Etc
        The Background Must Dynamic 
        Apllying Background Only For Main Dashboard , On Other page is not neccesary
      -->
        <div class="container-fluid">
          
          <div class="container">
            <form method="post" enctype="multipart/form-data">
            <div class="row form-spacing">
              <div class="col-sm-6">
                <fieldset>
                <legend>Setting Judul Dan Background</legend>
                  <div class="row form-spacing">
                    <div class="col-sm-5">
                      <label for="judul">Judul Web</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="text" name="judul_web" id="judul_web" class="form-control" value="<?=$fetchData['judul_web']?>">
                    </div>
                  </div>
                  <div class="row form-spacing">
                    <div class="col-sm-5">
                      <label for="background">Ubah Latar Belakang</label>
                    </div>
                    <div class="col-sm-7">
                      <input type="file" name="background" id="background" value="<?=$fetchData['background']?>">
                    </div>
                  </div>
                  <div class="row form-spacing">
                    <div class="col-sm-7 offset-sm-5">
                      <img src="../../assets/img/bg/<?=$fetchData['background']?>" width="100px" height="100px">
                    </div>
                  </div>
              </fieldset>
              </div>
              <div class="col-sm-6">
                <fieldset>
                  <legend>Setting Tema</legend>
                  <div class="row form-spacing">
                    <div class="col-sm-4">
                      <p>Warna Atas</p>
                    </div>
                    <div class="col-sm-8">
                      <input type="color" name="warna" id="warna" class="form-control" value="<?=$fetchData['warna']?>">
                    </div>
                  </div>
                  <div class="row form-spacing">
                    <div class="col-sm-4">
                      <p>Warna Samping</p>
                    </div>
                    <div class="col-sm-8">
                      <input type="color" name="color" id="color" class="form-control" value="<?=$fetchData['color']?>">
                    </div>
                  </div>
                  <div class="row form-spacing">
                    <div class="col-sm-4">
                      <p>Font</p>
                    </div>
                    <div class="col-sm-8">
                      <select name="font" id="font" class="form-control">
                        <option value="calibri">Calibri</option>
                        <option value="arial">Arial</option>
                        <option value="times new roman">Times New Roman</option>
                      </select>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <button class="btn btn-primary form-spacing" style="margin-left: 15px;">Simpan</button>
              </div>
            </div>
            </form>
          </div>
      </div>
    </div>
  </body>
  <?php
    }
  ?>
</html>
<?php
if(isset($_POST['judul_web'])){
  $judul_web=$_POST['judul_web'];
  $warna=$_POST['warna'];
  $color=$_POST['color'];
  $font=$_POST['font'];
  $background=$_FILES['background']['name'];
  $tmp=$_FILES['background']['tmp_name'];

  $background_baru = date('dmYHis').$background;

  $path = "../../assets/img/bg/".$background_baru;

    if(move_uploaded_file($tmp,$path)){
    }
    $query = "UPDATE tampilan SET judul_web='".$judul_web."' , background='".$background_baru."' , warna='".$warna."' , color='".$color."' ,font='".$font."'";
    $sql = mysqli_query($koneksi,$query);
    
}
?>
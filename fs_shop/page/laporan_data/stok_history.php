<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gow Ticket - Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

  <body id="page-top">

    <!-- Navbar -->
    <!-- 
    Navbar Must Responsive Mobile With 3 Lines Dropdown
    Navbar Uses Nested Navbar
    Navbar Must Have Dynamic Background
    -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">FS SHOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
        </ul>
    </nav>
    
    <div id="wrapper">

    <!-- Sidebar -->
    <!-- Sidebar If Match Can Be Build With Category Item -->

      <ul class="sidebar navbar-nav">
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
            <a class="dropdown-item" href="event/insert.php">Identitas</a>
            <a class="dropdown-item" href="event/list.php">Utilitas</a>
            <a class="dropdown-item" href="event/list.php">User</a>
            <a class="dropdown-item" href="event/list.php">Shift</a>
            <a class="dropdown-item" href="event/list.php">Tampilan</a>
            <a class="dropdown-item" href="event/list.php">Tentang</a>
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
        <div class="container-fluid form-spacing">
          <div class="container">
            <h2>Laporan Histori Harga Barang</h2>
            <p>Menu Ini Untuk Merekap Histori Harga Barang</p>
            <hr>
            <fieldset>
              <legend>Data Barang</legend>
              <div class="row form-spacing">
                <div class="col-sm-1">
                  <p>Cari</p>
                </div>
                <div class="col-sm-11">
                  <input type="search" name="" id="" class="form-control">
                </div>
              </div>
            </fieldset>
            <div class="row">
              <div class="col">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Tanggal Ubah</th>
                      <th scope="col">Harga Jual</th>
                      <th scope="col">Satuan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1575757</th>
                      <td>Minyak Babi</td>
                      <td>26-12-2018</td>
                      <td>10000</td>
                      <td>Kg</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="text-center">
              <p>1 Data Ditampilkan</p>
            </div>
            <div class="col-sm-1 offset-sm-11">
              <button class="btn btn-primary">Cetak</button>
            </div>
        </div>
    </div>
  </body>

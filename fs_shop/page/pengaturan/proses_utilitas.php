<?php
include '../../util/koneksi.php';

if(isset($_POST['footer_faktur'])){
  $footer_faktur=$_POST['footer_faktur'];

  $query = "UPDATE tampilan SET footer_faktur='".$footer_faktur."' ";
  $sql = mysqli_query($koneksi,$query);
}
header('location:utilitas.php');

?>
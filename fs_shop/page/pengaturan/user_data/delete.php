<?php
include '../../../util/koneksi.php';

$id=$_GET['id'];
$sql="DELETE FROM user WHERE id_user='".$id."'";
$query=mysqli_query($koneksi,$sql);

if($query){
    header('location:../user_data.php');
}else{
    echo "Gagal Hapus";
}


?>
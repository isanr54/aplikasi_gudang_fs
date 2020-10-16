<?php
    include '../../../util/koneksi.php';

    if(isset($_POST['submit'])){
        $id=$_GET['id'];
        $level=$_POST['level'];

        $query="UPDATE user SET level='".$level."' WHERE id_user='".$id."'";
        $sql = mysqli_query($koneksi,$query);
    
    if($sql){
        header('location:../user_grup.php');
    }else{
     echo "Update Gagal !";
    }
}else{
    echo "Anda Tidak Memiliki Akses";
}
?>
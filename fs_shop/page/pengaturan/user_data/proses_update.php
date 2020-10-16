<?php
    include '../../../util/koneksi.php';

    if(isset($_POST['nama_lengkap'])){
        $id=$_GET['id'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $keterangan=$_POST['keterangan'];
        $nama_user=$_POST['nama_user'];
        $password=$_POST['password'];

        $query="UPDATE user SET nama_user='".$nama_user."', nama_lengkap='".$nama_lengkap."'  , password='".$password."' , keterangan='".$keterangan."' WHERE id_user='".$id."'";
        $sql = mysqli_query($koneksi,$query);
    
    if($sql){
        header('location:../user_data.php');
    }else{
        echo "Update Gagal !";
    }
}else{
    echo "Anda Tidak Memiliki Akses";
}
?>
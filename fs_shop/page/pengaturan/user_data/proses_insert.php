<?php
    include '../../../util/koneksi.php';

    if(isset($_POST['submit'])){
        $id_user=$_POST['id_user'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $keterangan=$_POST['keterangan'];
        $nama_user=$_POST['nama_user'];
        $password=$_POST['password'];
        $level=$_POST['level'];

        $sql="INSERT INTO user VALUES('".$id_user."','".$nama_lengkap."','".$nama_user."','".$password."','".$keterangan."','".$level."')";
        $query = mysqli_query($koneksi,$sql);
    }
    header('location:../user_data.php');
?>
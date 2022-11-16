<?php
include("koneksi.php");
if(isset($_POST['tambah'])) {
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $keluhan=$_POST['keluhan'];

    $sql = "INSERT INTO tb_rsh (nama,jenis,keluhan) VALUES ('$nama','$jenis','$keluhan')";
    $query=mysqli_query($koneksi,$sql); 
    }
?>
<a href="tampil.php">tampilan data
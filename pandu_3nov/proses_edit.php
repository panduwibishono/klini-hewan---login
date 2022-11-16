<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $kode=$_POST['id'];
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $keluhan=$_POST['keluhan'];

$sql="UPDATE tb_rsh SET nama='$nama', jenis='$jenis', keluhan='$keluhan' WHERE id=$kode";
$query=mysqli_query($koneksi,$sql);

if($query){
          header('Location:tampil.php');
}else{
          die ("gagal mengedit");
}
}
?>
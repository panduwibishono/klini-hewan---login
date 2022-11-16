<?php
include ("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM tb_rsh WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
          header("Location:tampil.php");         
} else {
          echo "gagal menghapus";
}
?>
<?php
include("koneksi.php");
if(!isset($_GET['id'])){
          header("Location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT*FROM tb_rsh WHERE id=$kode";
$query=mysqli_query($koneksi,$sql);
$data =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
          die ("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
        <h1>EDIT DATA</h1>
        <form action="proses_edit.php" method="POST">
        <form>
                              <fieldset>
        <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
        <p>

        <p>
        <label for="nama"> nama pemilik:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']?>"/>
        </p>

        <p>
        <label for="jenis"> jenis hewan</label>
        <select name = "jenis">
        <option value="kucing">kucing</option>
        <option value="anjing"> anjing </option>
        <option value="ular"> ular</option>
        </select>


        </p>
        <label for="keluhan"> keluhan </label>
        <input type="text" name="keluhan" value="<?php echo $data['keluhan']?>"/>
</p>
<p>
<input type="submit" value="tambah" name="tambah"/>
</p>

</fieldset> 
</form>

</body>
</html>
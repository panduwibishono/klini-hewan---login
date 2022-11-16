<?php
include("koneksi.php");
?>

<html>
<body>
<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
?>
    <h3> selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.

    
    <h1> DATA HEWAN </h1>

    <table border="1">
    <tr>
        <th>no</th>
        <th>nama pemilik</th>
        <th>jenis hewan</th>
        <th>keluhan</th>
    </tr>

    <h4><a href="index.php">back</a></h4>
    <h4><a href="tambah.php">tambah</a></h4>
    <?php
    include("koneksi.php");
    $sql="SELECT * FROM tb_rsh";
    $query=mysqli_query($koneksi, $sql);

    while($rsh=mysqli_fetch_array($query)){
        echo "<tr>";
echo"<td>".$rsh['id']."</td>";
echo"<td>".$rsh['nama']."</td>";
echo"<td>".$rsh['jenis']."</td>";
echo"<td>".$rsh['keluhan']."</td>";
echo "<td>";
echo "<a href='edit.php?id=".$rsh['id']."'>Edit</a> |";
echo "<a href='hapus.php?id=".$rsh['id']."'>Hapus</a>";
echo "</td>";
echo"</tr>";

    }

    ?>
    <a href="logout.php">logout
    </table>
</body>
</html>
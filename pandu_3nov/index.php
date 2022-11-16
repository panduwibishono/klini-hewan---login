<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
    <h2>FORM LOGIN </h2></br>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo"anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo"anda harus login untuk mengakses halaman admin";
    }
}
?>

    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>Username
                <td>:
                <td><input type="text" name="username" placeholder="masukkan username"> 
            
            <tr>
                <td>password
                <td>:
                <td><input type="password" name="password" placeholder="masukkan password">
            
            <tr>
                <td>
                <td>
                <td><input type="submit" value="LOGIN">
        </table>
    </form>
                
</body>
</html>
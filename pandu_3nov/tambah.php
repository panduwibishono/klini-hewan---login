<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah</title>
</head>
<body>
    <form action = "proses-tambah.php" method="POST">
        <form>
    <fieldset>
        <p>
        <label for="nama"> nama pemilik:</label>
        <input type="text" name="nama"/>
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
        <input type="text" name="keluhan">
</p>
<p>
<input type="submit" value="tambah" name="tambah"/>
</p>
<h4><a href="tampil.php">back</a></h4>
</fieldset>
</form>
</body>
</html>
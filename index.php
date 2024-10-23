<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS P5"</title>
</head>

<body>
    <center>
        <h1>FORMULIR</h1>
        <h3>Pendaftaran Online</h3>
        <h5><i>Jl. Alternatif <br></i></h5>
        <hr color="blue">
    </center>
    <form action="" method="POST">
        <pre>
Nama Lengkap : <input type="text" name="nama" size="35"
maxlength="30"><br>
TTL : <input type="text" name="tempatlahir" size="18"
maxlength="20"> <select name="tanggallahir" size="1">
<?php
for ($i = 1; $i <= 31; $i++) {
    echo "<option value='$i'>$i</option>";
}
?>
</select> <select name="bulanlahir" size="1">
<option value="Januari">Januari</option>
<option value="Februari">Februari</option>
<option value="Maret">Maret</option>
<option value="April">April</option>
<option value="Mei">Mei</option>
<option value="Juni">Juni</option>
<option value="Juli">Juli</option>
<option value="Agustus">Agustus</option>
<option value="September">September</option>
<option value="Oktober">Oktober</option>
<option value="November">November</option>
<option value="Desember">Desember</option>
</select> <input type="text" name="tahunlahir" size="5" maxlength="4"
value="2009"><br>
Jenis Kelamin : <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
<input type="radio" name="jk" value="Perempuan">Perempuan
<br>
Alamat : <textarea name="alamat" rows="3" cols="35"
wrap="on"></textarea> <br>
No. Tlp : <input type="text" name="telp" size="15"
maxlength="15"><br>
</pre>
        <input type="submit" value="KIRIM">
        <input type="reset" value="BERSIH">
    </form>
    <hr color="blue">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $bulanlahir = $_POST['bulanlahir'];
        $tahunlahir = $_POST['tahunlahir'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        echo "<div class='center'>";
        echo "<h2>---- BUKTI PENDAFTARAN----</h2>";
        echo "Tanggal Cetak: " . date("D- d/M/Y") . "<br>";
        echo "Nama Lengkap: $nama <br>";
        echo "Tempat, Tanggal Lahir: $tempatlahir, $tanggallahir $bulanlahir
$tahunlahir <br>";
        echo "Jenis Kelamin: $jk <br>";
        echo "Alamat: $alamat <br>";
        echo "No. Tlp: $telp <br>";
        echo "</div>";
    }
    ?>
    <hr color="blue">
    <marquee direction="right">
        <i>--- Pendaftaran Formulir---</i>
    </marquee>
</body>

</html>
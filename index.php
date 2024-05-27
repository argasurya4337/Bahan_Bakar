<?php 
include "process.php" ;
$proses = new Beli();
$proses->setHarga(15420, 16130 , 18310 , 16510 );
if(isset($_POST['kirim']) ) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];
    echo "<br>";

    $proses->cetakPembelian();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body> 
    <center>
        <form action="" method = "post">
            <label for="liter">Masukan Jumlah Liter :</label>
            <input type="number" name = "liter" required> 
            <label for = "jenis">Pilih Jenis Bensin : </label>
            <select name="jenis" id="haha" required>
            <option value="SSuper">S-Super</option>
            <option value="SVPower">SV-Power</option>
            <option value="SVPowerDiesel">SV-Power Diesel</option>
            <option value="SVPowerNitro"> SV-Power-Nitro</option>
            </select>
            <button name = "kirim">Hitung total</button>
        </form>
    </center>
</body>
</html>

<?php
    $gajiPokok = 2000000;
    $bonus = 500000;
    $tunjangan = 0.05;
    $pajak = 0.1;
    $Hasiltunjangan = $gajiPokok * $tunjangan;
    $HasilPajak = $gajiPokok * $pajak;
    $HasilGaji = ($gajiPokok + $bonus + $Hasiltunjangan) - ($HasilPajak); 
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
    <div>
        <span>==============</span>
        <p>Nip: 100111</p>
        <p>Nama Pegawai: bilal al ghiffari</p>
    </div>
    <div>
        <span>==============</span>
        <p>Gaji Pokok: <?php echo "Rp. ". $gajiPokok ?></p>
        <p>Bonus: <?php echo "Rp. ". $bonus ?></p>
        <p>Tujuan: <?php echo "Rp. ". $Hasiltunjangan ?></p>
        <p>Pajak: <?php echo "Rp. ". $HasilPajak ?></p>
    </div>
    <div>
        <span>==============</span>
        <p>Gaji yang harus dibayar: <?php echo "Rp. ". $HasilGaji ?></p>
    </div>
</body>
</html>
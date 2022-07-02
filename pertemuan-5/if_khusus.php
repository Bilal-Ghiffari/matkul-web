<?php 
 $nama = "bilal al ghiffari";
 $nim = "120103009";
 $prodi = "teknik informatika ";
    echo "nama : $nama. <br /> nim : $nim . <br /> prodi : $prodi";

$tahun =  date ("Y");
$kabisat = ($tahun%4 === 0) ? "KABISAT" : "BUKAN KABISAT";
echo "<br /> <br />Tahun <b>$tahun</b> $kabisat";

?>
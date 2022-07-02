<?php

 $nama = "bilal al ghiffari";
 $nim = "120103009";
 $prodi = "teknik informatika ";
    echo "nama : $nama. <br /> nim : $nim . <br /> prodi : $prodi <br /> <br />";

/* contoh 1 */
$i = 1;
while ($i <= 10){
    echo $i++;
}
echo "<br><br>";

/* contoh 2 */
$i = 1;
while ($i <= 10){
    echo "$i";
    $i++;
}
echo "<br><br>";

/* contoh 3 */
$i = 1;
while ($i <= 6) {
    echo "<h$i> Heding $i</h$i>";
    $i++;
}
?>
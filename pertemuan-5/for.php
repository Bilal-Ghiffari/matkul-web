<?php

 $nama = "bilal al ghiffari";
 $nim = "120103009";
 $prodi = "teknik informatika ";
    echo "nama : $nama. <br /> nim : $nim . <br /> prodi : $prodi <br /> <br />";

/* contoh 1 */
for ($i= 1; $i <= 10 ; $i++) { 
    echo "$i ";
}
echo "<br><br>";

/* contoh 2 */
for ($i= 1; ; $i++) { 
    if($i > 10){
        break;
    }
    echo "$i ";
}
echo "<br><br>";

/* contoh 3 */
$i = 1;
for(; ;) {
    if($i > 10){
        break;
    }
    echo "$i ";
    $i++;
} 
echo "<br><br>";

/* contoh 4 */
for ($i= 1; $i <= 10; print "$i ". $i++);

?>


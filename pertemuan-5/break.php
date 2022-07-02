<?php
 $nama = "bilal al ghiffari";
 $nim = "120103009";
 $prodi = "teknik informatika ";
    echo "nama : $nama. <br /> nim : $nim . <br /> prodi : $prodi <br /> <br />";

for ($i= 1; $i < 10 ; $i++) { 
    if($i == 5)
        continue;
    if($i == 8)
        break;
    echo "$i ";
}

?>
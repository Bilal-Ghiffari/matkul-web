<?php 
    $nim = "120103009";
    $nama = "bilal al ghiffari";
    $umur = 23;
    $nilai = 82.25;
    $status = TRUE;

    echo "NIM : " . $nim . "<br />";
    echo "Name : $nama <br/>";
    print "Umur : " . $umur; print "<br />";
    printf("Nilai : %.3f<br />", $nilai);
    if($status){
        echo "Status : Aktif";
    } else {
        echo "Status : Tidak Aktif";
    }  
?>
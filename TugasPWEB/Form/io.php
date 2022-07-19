<?php
    
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $pkj = $_POST['pkj'];  
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kelamin = $_POST['kelamin'];
    
    $fp = fopen("data.txt", "a+");
    fputs($fp, "$nama|$ttl|$pkj|$alamat|$nohp|$kelamin\n");
    fclose($fp);
?>
<?php
    include 'connection.php';
    $id_spesialisasi = $_POST['id_spesialisasi'];    
    $nama_spesialisasi   = $_POST['nama_spesialisasi'];
    $aktif   = $_POST['aktif'];
    
    $query = mysqli_query($connection, "insert into spesialisasi values('$id_spesialisasi','$nama_spesialisasi','$aktif')") or die(mysqli_error($connection));

header("location:tampil_distributor.php");

 ?>
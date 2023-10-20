<?php
    include 'connection.php';
 	$id_pengguna = $_POST['id_pengguna'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];

    $query = mysqli_query($connection, "insert into pengguna values('$id_pengguna','$username','$password','$nama','$alamat',
    	'$no_telp','$email','$tgl_lahir','$tempat_lahir')") or die(mysqli_error($connection));

header("location:tampil_obat.php");

 ?>
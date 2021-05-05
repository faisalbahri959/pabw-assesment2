<?php
// konfigurasi database
$server = 'pabw-4303-assesment2.mysql.database.azure.com';
$user = 'FaisalBahri@pabw-4303-assesment2';
$password = 'Mytana230175';
$nama_database = 'pabw';

$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>

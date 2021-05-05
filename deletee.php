<?php 
    require_once("koneksi.php");
    session_start();
    $stmt = $db->prepare("DELETE FROM ip WHERE semester = ?");
    $stmt->bind_param("i", $_GET['semester']);
    $stmt->execute();
    $stmt->close();
    echo "<script>alert('data berhasil di hapus !!!');window.location='tabel_crud.php'</script>";
?>
<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tabel Data Diri User</title>
</head>

<body>
    <div class='container-fluid'>
        <div class="card text-right" style="margin-top:10px">
            <div class="card-header">
                <a class='btn btn-danger' onclick="alert('Apakah Anda Yakin Ingin Keluar ? ')" href="keluar.php"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z" />
                        <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z" />
                    </svg></a>
            </div>
        </div>
        <p>
            <a class='btn btn-primary' href='form.php' style="margin-top:10px">Tambah Data</a>
    <p>
        <div class="container-fluid">
            <table class="table table-bordered table-dark">
                <thead class="grey-dark">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Semester</th>
                        <th scope="col">IP</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php                     
                    include "koneksi.php"; 
                    $data = mysqli_query($nama_database,"SELECT *FROM nilai");
                         $no = 1;
                         while($row = mysqli_fetch_array($data)){
                             $id = $row['id'];                          
                    ?>
                    <tr>
                        <td class="align-middle"><?php echo $no++; ?></td>
                        <td class="align-middle"><?php echo $row['semester']; ?></td>
                        <td class="align-middle"><?php echo $row['ip']; ?></td>
                        <td class="align-middle"><a class="btn btn-danger disabled" onclick="alert('Apakah Anda Yakin Ingin Hapus ? ')"
                                href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            <a class="btn btn-primary" onclick="alert('Apakah Anda Yakin Ingin Edit ? ')"
                                href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
                    </tr>
                    <?php
                }
            ?>
                </tbody>
            </table>
</body>

</html>
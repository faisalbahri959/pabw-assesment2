<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form Data Diri</title>
</head>

<body>
<?php
 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
 
 //include atau memasukkan file koneksi ke database
 include('koneksi.php');
 
 //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
 $id = $_GET['id'];
 
 //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
 $show = mysqli_query($db,"SELECT * FROM data_diri WHERE id='$id'");
 
 //cek apakah data dari hasil query ada atau tidak
 if(mysqli_num_rows($show) == 0){
  
  //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
  echo '<script>window.history.back()</script>';
  
 }else{
 
  //jika data ditemukan, maka membuat variabel $data
  $data = mysqli_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
 
 }
 ?>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Form Data Diri</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" action="update.php" method="post"enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- membuat inputan hidden dan nilainya adalah id -->
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_need">List Pekerjaan *</label>
                                                <select id="form_need" name="pt" class="form-control">
                                                    <option value="" selected disabled>--Pilih --</option>
                                                    <option value="pt_suparma" <?php if($data['pt'] == 'pt_suparma'){ echo 'selected'; } ?> >PT.Suparma
                                                    <option value="pt_biro" <?php if($data['pt'] == 'pt_biro'){ echo 'selected'; } ?> >PT.Biro
                                                    <option value="pt_kamsa" <?php if($data['pt'] == 'pt_kamsa'){ echo 'selected'; } ?> >PT.Kamsa
                                                    <option value="pt_sejahtera" <?php if($data['pt'] == 'pt_sejahtera'){ echo 'selected'; } ?> >PT.Sejahtera
                                                    <option value="pt_abadi" <?php if($data['pt'] == 'pt_abadi'){ echo 'selected'; } ?> >PT.Abadi
                                                    <option value="pt_rekayasa" <?php if($data['pt'] == 'pt_rekayasa'){ echo 'selected'; } ?> >PT.Rekayasa
                                                    <option value="pt_potret" <?php if($data['pt'] == 'pt_potret'){ echo 'selected'; } ?> >PT.Potret                                                    <option value="PT.Suparma" <? echo ($pt=='PT.Suparma')?"selected":""; ?>>PT.Suparma
                                                    <option value="pt_animal" <?php if($data['pt'] == 'pt_animal'){ echo 'selected'; } ?> >PT.Animal
                                                    <option value="pt_istana" <?php if($data['pt'] == 'pt_istana'){ echo 'selected'; } ?> >PT.Istana
                                                    <option value="pt_bersari" <?php if($data['pt'] == 'pt_bersari'){ echo 'selected'; } ?> >PT.Bersari
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">Nama Depan *</label> <input
                                                    id="form_name" type="text" name="nama_depan" class="form-control" value="<?php echo $data['nama_depan']; ?>"
                                                    placeholder="Masukan nama depan *"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Nama Belakang *</label>
                                                <input id="form_lastname" type="text" name="nama_belakang" value="<?php echo $data['nama_belakang']; ?>"
                                                    class="form-control" placeholder="Masukan nama belakang *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Email *</label> <input
                                                    id="form_email" type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control"
                                                    placeholder="Masukkan Email *"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_hp">Nomor telepon *</label> <input
                                                    id="form_lastname" type="number" name="nomor" value="<?php echo $data['nomor']; ?>" class="form-control"
                                                    placeholder="Masukan nomor telepon *"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Tanggal Lahir *</label>
                                                <input id="form_email" type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" class="form-control"
                                                    placeholder="Masukkan Tanggal Lahir *"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Jenis Kelamin *</label>
                                                <select id="form_need" name="jk" class="form-control">
                                                    <option value="" selected disabled>--Pilih --</option>
                                                    <option value="P" <?php if($data['jk'] == 'P'){ echo 'selected'; } ?> >Perempuan</option>
                                                    <option value="L" <?php if($data['jk'] == 'L'){ echo 'selected'; } ?> >Laki-Laki</option>
                                                    <option value="Lainnya" <?php if($data['jk'] == 'Lainnya'){ echo 'selected'; } ?> >Other</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Alamat *</label>
                                                <textarea id="form_message" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control" 
                                                    placeholder="Tulis alamat disini." rows="4"></textarea> </div>
                                        <div class="form-group"> <label for="cv">Upload CV *</label><br>
                                        <img class="form-group" name="x" src="cv/<?= $data['cv']; ?>" width="100px">
                                                <input id="cv" type="file" name="cv" class="form-control"> </div>                                        
                                        </div>
                                        <div class="col-md-12"> <input type="submit"
                                                class="btn btn-success btn-send pt-2 btn-block " name="update" value="Submit"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
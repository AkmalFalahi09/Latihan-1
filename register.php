<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <form action="proses_register.php" method="post">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">NIK</label>
                    <input name="nik" type="text" id="form3Example4" class="form-control form-control-lg" placeholder="masukkan nik" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Nama Pegawai</label>
                    <input name="nama_pegawai" type="text" id="form3Example4" class="form-control form-control-lg" placeholder="masukkan nama pegawai" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Alamat</label>
                    <input name="alamat" type="text" id="form3Example4" class="form-control form-control-lg" placeholder="masukkan alamat anda" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Jenis Kelamin</label>
                    <select name="gender" class="form-control form-control-lg">
                        <option></option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">No Telepon</label>
                    <input name="notelp" type="text" id="form3Example4" class="form-control form-control-lg" placeholder="masukkan no telepon anda" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Jabatan</label>
                    <select name="id_jabatan" class="form-control form-control-lg">
                        <option></option>
                        <?php 
                            include "koneksi.php";
                            $qry_jabatan=mysqli_query($conn,"select * from jabatan");
                            while($dt_jabatan=mysqli_fetch_array($qry_jabatan)){
                            echo '<option value="'.$dt_jabatan['id_jabatan'].'">'.$dt_jabatan['nama_jabatan'].'</option>';    
                            }
                        ?>
                    </select>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="masukkan password" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                <input type="submit" name="simpan" value="Register" class="btn btn-primary btn-lg">
            </div>   
            </div>  
        </form>
    </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
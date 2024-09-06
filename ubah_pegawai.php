<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
            include "koneksi.php";
            $qry_get_pegawai=mysqli_query($conn,"select * from pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
            $dt_pegawai=mysqli_fetch_array($qry_get_pegawai);
        ?>
    <h3>Ubah Pegawai</h3>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <form action="proses_ubah_pegawai.php" method="post">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <input type="hidden" name="id_pegawai" value= "<?=$dt_pegawai['id_pegawai']?>">
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">NIK</label>
                    <input name="nik" value=   "<?=$dt_pegawai['nik']?>" type="text" id="form3Example4" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Nama Pegawai</label>
                    <input name="nama_pegawai" value=   "<?=$dt_pegawai['nama_pegawai']?>" type="text" id="form3Example4" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Alamat</label>
                    <input name="alamat" value=   "<?=$dt_pegawai['alamat']?>" type="text" id="form3Example4" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Jenis Kelamin</label>
                    <?php 
                        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                    ?>
                        <select name="gender" class="form-control">
                        <option></option>
                    <?php foreach ($arr_gender as $key_gender => $val_gender):
                        if($key_gender==$dt_pegawai['gender']){
                            $select="selected";
                        }
                        else {
                            $select="";
                        }
                    ?>
                    <option value="<?=$key_gender?>" <?=$select?>><?=$val_gender?></option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">No Telepon</label>
                    <input name="notelp" value=   "<?=$dt_pegawai['notelp']?>" type="text" id="form3Example4" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Jabatan</label>
                    <select name="id_jabatan" class="form-control">
                    <option></option>
                    <?php 
                        include "koneksi.php";
                        $qry_jabatan=mysqli_query($conn,"select * from jabatan");
                        while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                            if($data_jabatan['id_jabatan']==$dt_pegawai['id_jabatan']){
                                $select="selected";
                            }
                            else {
                                $select="";
                            }
                            echo '<option value="'.$data_jabatan['id_jabatan'].'" '.$select.'>'.$data_jabatan['nama_jabatan'].'</option>';   
                        }
                    ?>
                    </select>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input name="password" value=   "<?=$dt_pegawai['password']?>" type="password" id="form3Example4" class="form-control form-control-lg" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg">
                </div>   
            </div>  
        </form>
    </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
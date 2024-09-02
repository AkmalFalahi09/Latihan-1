<?php
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
    <h3>Tampil Data Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA PEGAWAI</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>NO TELP</th>
            <th>JABATAN</th>
            <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_pegawai=mysqli_query($conn,"select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan");
            $no=0;
            while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
            $no++;?>
            <tr>              
            <td><?=$no?></td><td><?=$data_pegawai['nik']?></td> <td><?=$data_pegawai['nama_pegawai']?></td> <td><?=$data_pegawai['alamat']?></td><td><?=$data_pegawai['gender']?></td> <td><?=$data_pegawai['notelp']?></td> <td><?=$data_pegawai['nama_jabatan']?></td>
            <td><a href="ubah_siswa.php?id_pegawai=<?=$data_pegawai['id_pegawai']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_siswa=<?=$data_siswa['id_pegawai']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    </div>
        <br>
        <div>
            <a href="register.php" class="btn btn-success">Tambah</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
</body>
</html>
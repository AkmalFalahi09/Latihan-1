<?php
if($_POST){
    $nama_pegawai=$_POST['nama_pegawai'];
    $nik=$_POST['nik'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $notelp=$_POST['notelp'];
    $jabatan=$_POST['id_jabatan'];
    $password=$_POST['password'];
    if(empty($nama_pegawai)){
        echo "<script>alert('Nama Pegawai tidak boleh kosong');location.href='register.php';</script>";
    } 
    else if(empty($nik)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='register.php';</script>";
    } 
    else if(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='register.php';</script>";
    } 
    else if(empty($gender)){
        echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='register.php';</script>";
    } 
    else if(empty($notelp)){
        echo "<script>alert('No. Telepon tidak boleh kosong');location.href='register.php';</script>";
    } 
    else if(empty($jabatan)){
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='register.php';</script>";
    } 
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pegawai ( nama_pegawai, nik, alamat, gender, notelp, id_jabatan, password) value ('".$nama_pegawai."','".$nik."','".$alamat."','".$gender."','".$notelp."','".$jabatan."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='register.php';</script>";
        }
    }
}
?>
<?php
if($_POST){
    $id_pegawai=$_POST['id_pegawai'];
    $nik=$_POST['nik'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $notelp=$_POST['notelp'];
    $id_jabatan=$_POST['id_jabatan'];
    $password=$_POST['password'];
    if(empty($nik)){
        echo "<script>alert('nik tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    }
    else if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    }
    else if(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    }
    else if(empty($gender)){
        echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } 
    else if(empty($notelp)){
        echo "<script>alert('No. Telepon tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } 
    else if(empty($id_jabatan)){
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    } 
    else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update pegawai set nik='".$nik."',nama_pegawai='".$nama_pegawai."', alamat='".$alamat."', gender='".$gender."', notelp='".$notelp."', id_jabatan='".$id_jabatan."' where id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_siswa=".$id_pegawai."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update pegawai set nik='".$nik."',nama_pegawai='".$nama_pegawai."', alamat='".$alamat."', gender='".$gender."', notelp='".$notelp."', id_jabatan='".$id_jabatan."' where id_pegawai = '".$id_pegawai."', password='".md5($password)."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        }
        
    } 
}
?>

<?php
include '../config/koneksi.php';
session_start();



if (isset($_POST['hapus_pengaduan'])){
   $id_pengaduan =$_POST['id_pengaduan'];
   $query =mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
   $data =mysqli_fetch_array($query);
   if (is_file('../assets/img/'.$data['foto'])){
    unlink('../assets/img/'.$data['foto']);
   }
    mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
    header('location:index.php');
}
else if(isset($_POST['edit_pengaduan'])){
    $id_pengaduan =$_POST['id_pengaduan'];
    $judul_laporan =$_POST['judul_laporan'];
    $isi_laporan =$_POST['isi_laporan'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $lokasi = '../assets/img/';
    $nama_foto = rand(0,999).'-'.$foto;

    move_uploaded_file($tmp, $lokasi.$nama_foto);
    mysqli_query($koneksi, "UPDATE pengaduan set judul_laporan = '$judul_laporan', isi_laporan = '$isi_laporan', foto = '$nama_foto' WHERE id_pengaduan='$id_pengaduan'");
    mysqli_error($koneksi);

    echo "<script> alert('Data Berhasil diedit!'); </script>";
    header('location:index.php');
}
?>
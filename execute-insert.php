<?php
include "config/dbconfig.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
  
// Ganti nama gambar dengan meenambahkan tanggal dan jam upload ke nama gambar yang asli.
$newgambar = date('dmYHis').$gambar;

// Tentukan tempat menyimpan gambar, pastikan anda sudah membuat folder images didalam folder root.
$path = "images/".$newgambar;

// Cek apakah gambar berhasil diupload atau tidak
if(move_uploaded_file($tmp, $path)){ 
  // Proses simpan nama gambar saja ke Database
  $query = "INSERT INTO siswa VALUES('', '".$nis."', '".$nama."', '".$jenis_kelamin."', '".$telp."', '".$alamat."', '".$newgambar."')";
  $sql = mysqli_query($connect, $query); //Eksekusi $query

  if($sql){ // Cek apakah proses simpan nama gambar berhasil atau tidak
    // Jika Berhasil, Kembali kehalaman depan
    header("location: index.php");
  }else{
    // Jika Gagal, Beritahukan pesan gagal :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='upload_img.php'>Kembali</a>";
  }
}else{
  // Jika gambar gagal diupload, Beritahukan pesan gagal :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='upload_img.php'>Kembali</a>";
}

?>

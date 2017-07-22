<?php
include "config/dbconfig.php";

$nis = $_GET['nis'];

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
    

  $query = "UPDATE siswa SET nama='".$nama."', jk='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."' WHERE nis='".$nis."'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
    header("location: index.php"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='update-user.php'>Kembali Ke Form</a>";
  }

?>
<?php
include "config/dbconfig.php";

$nis = $_GET['nis'];

$query2 = "DELETE FROM siswa WHERE nis='".$nis."'";
$sql2 = mysqli_query($connect, $query2);

if($sql2){ 

  header("location: index.php"); 
}else{

  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
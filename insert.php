<?php 
include "header.php";
?>

<div class="container">
<div class="container-body">
<?php 
include"top-bar.php";
?>
  
<?php include"left-sidebar.php";?>

<div class="container">

<div class="content">

  <h1>Tambah Data Siswa</h1>
  <form method="post" action="execute-insert.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIS</td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>gambar</td>
    <td><input type="file" name="gambar"></td>
  </tr>
  </table>
  
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
  </div>
  </div>


</div>

<?php 
include "footer.php";
?>
</div>



</body>
</html>

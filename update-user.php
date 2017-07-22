  <?php 
  include "header.php";
  include "top-bar.php";
  include "left-sidebar.php";
  ?>
  <div class="container">
<div class="container-body">

<div style="padding-left: 20px;">

  <h1>Ubah Data Siswa</h1>
  
  <?php
  include "config/dbconfig.php";
  
  $nis = $_GET['nis'];
  
  $query = "SELECT * FROM siswa WHERE nis='".$nis."'";
  $sql = mysqli_query($connect, $query);  
  $data = mysqli_fetch_array($sql);
  ?>
  
  <form method="post" action="execute-updateuser.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <?php
    if($data['jk'] == "Laki-laki"){
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
    }else{
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
    }
    ?>
    </td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>

  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>

</div>
</div>


</div>
  <?php
  include "footer.php";
  ?>
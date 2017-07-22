<article>
 
  <div class="container">
  <div class="judul">Daftar Data Siswa Baru</div>
  <a href="insert.php">Tambahkan Data Siswa Baru</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>No. HP</th>
    <th>Alamat</th>
    <th>Gambar</th>
    <th colspan="2">Kontrol</th>
  </tr>
  <?php include "config/dbconfig.php"; ?>
 <?php
  $query = "SELECT * FROM siswa";
  $sql = mysqli_query($connect, $query);
  

  while($data = mysqli_fetch_array ($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jk']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><img src='images/".$data['gambar']."' width='100' height='100'></td>";
    echo "<td><a href='update-user.php?nis=".$data['nis']."'>Ubah</a></td>";
    echo "<td><a href='delete-user.php?nis=".$data['nis']."'>Hapus</a></td>";
    echo "</tr>";
  }

  ?>
  </table>
</div>
</article>
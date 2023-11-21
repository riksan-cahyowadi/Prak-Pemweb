<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>DATA MAHASISWA</h1>

  <h3>Menambahkan Data Mahasiswa</h3>
  <form action="tambahdata.php" method="post">
    <label for="nim">NIM:</label>
    <input type="text" name="nim" required>
    <br><br>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <br><br>
    <label for="prodi">Prodi:</label>
    <input type="text" name="prodi" required>
    <br><br>
    <input type="submit" value="Tambahkan">
  </form>

  <h3>Menghapus Data Mahasiswa</h3>
  <form action="hapusdata.php" method="get">
    <label for="nim_del">NIM:</label>
    <input type="text" name="nim_del" required>
    <input type="submit" value="hapus">
  </form>

  <h3>Edit Data Mahasiswa</h3>
  <form method="post" action="editdata.php">
    <label for="nim_lama">NIM lama:</label>
    <input type="text" name="nim_lama" required>
    <br><br>
    <label for="nim_baru">NIM baru:</label>
    <input type="text" name="nim_baru" required>
    <br><br>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <br><br>
    <label for="prodi">Prodi:</label>
    <input type="text" name="prodi" required>
    <br><br>
    <input type="submit" value="Update Data">
  </form>

  <h3>Pencarian Data</h3>
<form method="post" action="caridata.php">
  <label for="prodi">Pilih Program Studi:</label><br>
  <select name="prodi" id="prodi" class="styled-select">
    <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
    <option value="Teknik Mesin">Teknik Mesin</option>
    <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
    <option value="Teknik Geologi">Teknik Geologi</option>
    <option value="Teknik Elektro">Teknik Elektro</option>
    <option value="Teknik Kimia">Teknik Kimia</option>
    <option value="Teknik Industri">Teknik Industri</option>
    <option value="Farmasi">Farmasi</option>
    <option value="Teknik Material">Teknik Material</option>
    <option value="Teknik Sipil">Teknik Sipil</option>
    <option value="SAP">SAP</option>
    <option value="Biologi">Biologi</option>
  </select>
  <br><br>
  <input type="submit" value="Search">
</form>


  <?php
  include("koneksi.php");
  $sql = "SELECT * FROM mahasiswa";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo
    "<p>Daftar Tabel Mahasiswa</p>
    <table border='1'>
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Prodi</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["nim"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["prodi"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "Tidak ada data dalam tabel.";
  }
  ?>
</body>
</html>

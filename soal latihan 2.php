<!DOCTYPE html>
<html>
<head>
  <title>Penghitung Nilai Akhir dan Grade</title>
</head>
<body>
  <h1>Penghitung Nilai Akhir dan Grade</h1>
  <form method="post" action="">
    Nama: <input type="text" name="nama" required><br><br>
    NIM: <input type="text" name="nim" required><br><br>
    Mata Kuliah: Pemrograman Web 2<br><br> Jumlah Kehadiran: <input type="number" name="kehadiran" min="0" max="18" required><br><br>
    Nilai Tugas: <input type="number" name="tugas" min="0" max="100" required><br><br>
    Nilai UTS: <input type="number" name="uts" min="0" max="100" required><br><br>
    Nilai UAS: <input type="number" name="uas" min="0" max="100" required><br><br>
    <input type="submit" value="Hitung Nilai Akhir dan Grade">
  </form>

  <?php
  if (isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['kehadiran']) && isset($_POST['tugas']) && isset($_POST['uts']) && isset($_POST['uas'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kehadiran = intval($_POST['kehadiran']);
    $tugas = floatval($_POST['tugas']);
    $uts = floatval($_POST['uts']);
    $uas = floatval($_POST['uas']);

    // Calculate Nilai Kehadiran
    $nilaiKehadiran = ($kehadiran / 18) * 100;  // Adjust max kehadiran if needed

    // Calculate Nilai Akhir
    $nilaiAkhir = ($nilaiKehadiran * 0.1) + ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.4);

    // Determine Grade
    $grade = "";
    if ($nilaiAkhir >= 80) {
      $grade = "A";
    } elseif ($nilaiAkhir >= 70) {
      $grade = "B";
    } elseif ($nilaiAkhir >= 60) {
      $grade = "C";
    } elseif ($nilaiAkhir >= 50) {
      $grade = "D";
    } else {
      $grade = "E";
    }

    // Determine Keterangan
    $keterangan = ($nilaiAkhir >= 65) ? "Lulus" : "Tidak Lulus";

    echo "<h2>NILAIAKADEMIK: Pemrograman Web 2</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Jumlah Kehadiran: $kehadiran</p>";
    echo "<p>Nilai Kehadiran: " . number_format($nilaiKehadiran, 2) . "%</p>";  // Format with 2 decimal places
    echo "<p>Nilai Tugas: $tugas</p>";
    echo "<p>Nilai UTS: $uts</p>";
    echo "<p>Nilai UAS: $uas</p>";
    echo "<p>Nilai Akhir: " . number_format($nilaiAkhir, 2) . "%</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Keterangan: $keterangan</p>";
  }
  ?>
</body>
</html>
<?php

// Mendapatkan pilihan materi
$pilihan = isset($_POST['pilihan']) ? $_POST['pilihan'] : null;

// Inisialisasi variabel $hasil
$hasil = '';

// Proses pemilihan materi
if ($pilihan == 1 && isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
    nilaiAkhir($nilai);
} elseif ($pilihan == 2 && isset($_POST['operasi'], $_POST['angka1'], $_POST['angka2'])) {
    $operasi = $_POST['operasi'];
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    kalkulator($operasi, $angka1, $angka2);
} elseif ($pilihan == 3) {
    bilanganGenap3();
} elseif ($pilihan == 4) {
    $matriks1 = array(
        array(1, 2),
        array(3, 4),
    );
    $matriks2 = array(
        array(5, 6),
        array(7, 8),
    );
    perkalianMatriks($matriks1, $matriks2);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Learning</title>
</head>

<body>
  <form method="post">
    <?php tampilMenu(); ?>
    <input type="text" name="pilihan" placeholder="Masukkan pilihan materi">
    <?php if ($pilihan == 1) : ?>
      <input type="text" name="nilai" placeholder="Masukkan nilai">
    <?php elseif ($pilihan == 2) : ?>
      <input type="text" name="operasi" placeholder="Masukkan operasi (+, -, *, /)">
      <input type="text" name="angka1" placeholder="Masukkan angka pertama">
      <input type="text" name="angka2" placeholder="Masukkan angka kedua">
    <?php endif; ?>
    <button type="submit">Submit</button>
  </form>

  <?php
  // Menampilkan hasil jika ada
  if (!empty($hasil)) {
      echo "<p>Hasil: $hasil</p>";
  }
  ?>

<?php
// Deklarasi fungsi untuk menampilkan menu

function tampilMenu() {
    echo "<ul>";
    echo "<h3>Materi Pemrograman PHP</h3>";
    echo "<br>[1] Penggunaan IF</br>";
    echo "<br>[2] Penggunaan SWITCH..CASE</br>";
    echo "<br>[3] Penggunaan Looping</br>";
    echo "<br>[4] Penggunaan Array</br>";
    echo "<br>Pilih Materi yang ingin dipelajari: [1|2|3|4]</br>";
    echo "</ul>";
  }

// Deklarasi fungsi untuk menentukan nilai akhir dan grade
function nilaiAkhir($nilai) {
  global $hasil; // Variabel hasil yang ditampilkan
  if ($nilai >= 80) {
    $grade = "A";
  } elseif ($nilai >= 70) {
    $grade = "B";
  } elseif ($nilai >= 60) {
    $grade = "C";
  } else {
    $grade = "D";
  }

  $hasil = "Nilai akhir : $nilai, Grade : $grade";
}

// Deklarasi fungsi untuk kalkulator
function kalkulator($operasi, $angka1, $angka2) {
    global $hasil; // Variabel hasil yang ditampilkan
    
    switch ($operasi) {
      case '+':
        $hasil = $angka1 + $angka2;
        break;
      case '-':
        $hasil = $angka1 - $angka2;
        break;
      case '*':
        $hasil = $angka1 * $angka2;
        break;
      case '/':
        $hasil = $angka1 / $angka2;
        break;
    }
  
    $hasil = "Hasil $angka1 $operasi $angka2 = $hasil";
  }
  
  // Deklarasi fungsi untuk menampilkan bilangan genap habis dibagi 3
  function bilanganGenap3() {
    global $hasil; // Variabel hasil yang ditampilkan
    
    $hasil = "";
    $jumlah = 0;
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0 && $i % 3 == 0) {
        $hasil .= "$i ";
        $jumlah++;
      }
    }
    $hasil .= "<br>Jumlah bilangan genap habis dibagi 3: $jumlah";
  }
  
  // Deklarasi fungsi untuk perkalian matriks
  function perkalianMatriks($matriks1, $matriks2) {
    global $hasil; // Variabel hasil yang ditampilkan
    
    $hasil = "";
    $baris1 = count($matriks1);
    $kolom1 = count($matriks1[0]);
    $baris2 = count($matriks2);
    $kolom2 = count($matriks2[0]);
  
    if ($kolom1 != $baris2) {
      $hasil = "Matriks tidak dapat dikalikan!";
      return;
    }
  
    $hasilMatriks = array();
    for ($i = 0; $i < $baris1; $i++) {
      $hasilMatriks[$i] = array();
      for ($j = 0; $j < $kolom2; $j++) {
        $hasilMatriks[$i][$j] = 0;
        for ($k = 0; $k < $kolom1; $k++) {
          $hasilMatriks[$i][$j] += $matriks1[$i][$k] * $matriks2[$k][$j];
        }
      }
    }
  
    $hasil .= "Hasil perkalian matriks:<br>";
    for ($i = 0; $i < $baris1; $i++) {
      for ($j = 0; $j < $kolom2; $j++) {
        $hasil .= $hasilMatriks[$i][$j] . " ";
      }
      $hasil .= "<br>";
    }
  }
  ?>
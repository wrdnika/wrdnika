<!DOCTYPE html>
<html>
<head>
  <title>Penggunaan IF</title>
</head>
<body>
  <form method="post" action="">
    Jumlah Pembelian:
    <input type="text" name="input1"><br><br>
    <input type="submit" value="Tentukan Diskon">
  </form>

  <?php
  if (isset($_POST['input1'])) {
    $totalbeli = intval($_POST['input1']);
    $pot = 0;
    if ($totalbeli >= 200000) {
      $pot = 0.1;
    } elseif ($totalbeli >= 100000) {
      $pot = 0.05;
    } else {
      $pot = 0.01;
    }

    $pot = $pot * $totalbeli;
    printf("Jumlah Pembelian=%d<br>", $totalbeli);
    printf("Diskon =%.2f<br>", $pot);
    printf("Pembayaran=%d<br>", $totalbeli - $pot);
  }
  ?>
</body>
</html>
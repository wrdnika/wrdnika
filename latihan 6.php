<html>
<head>
    <title>Penggunaan Switch-Case</title>
</head>
<body>
    Hari ini:
    <?php
    $namahari = date("l");
    switch($namahari) {
        case "Sunday":
            echo "Minggu";
            print "Waktu untuk istirahat";
            break;
        case "Monday":
            echo "Senin<br>";
            print "Meeting awal minggu jam 08.00";
            break;
        case "Tuesday":
            echo "Selasa<br>";
            print "Pembukaan Workshop Diklat";
            break;
        case "Wednesday":
            echo "Rabu<br>";
            print "Seminar Launchig Window Vista di JHCC";
            break;
        case "Thursday":
            echo "Kamis<br>";
            print "Pertemuan dengan Mahasiswa";
            break;
        case "Friday":
            echo "Jum’at<br>";
            print "Jogging bersama";
            break;
        default:
            echo "Sabtu<br>";
            print "Survey harga ke Dusit, Mangga Dua";
    }
    ?>
    <br>
    Contoh penggunaan Switch-Case:
    <u>Menu Pilihan</u><br>
    [1] Trapesium<br>
    [2] Persegi Panjang<br>
    [3] Bujur Sangkar<br><br>
    <form method='post'>
        Pilihan<input type='text' name='pilih' size=2>
        <input type='submit' value='kirim'><br>
    </form>
    <?php
    $pil = $_POST['pilih'];
    switch($pil) {
        case 1:
            $atas = 12; $bawah = 17; $tinggi = 7;
            $luas = ($atas + $bawah) / 2 * $tinggi;
            echo "<br>Mencari Luas Trapesium<br>";
            echo "Garis atas = $atas cm<br>";
            echo "Garis bawah = $bawah cm<br>";
            echo "Tinggi = $tinggi cm<br>";
            echo "Luas Trapesium = $luas cm<sup>2</sup><br>";
            break;
        case 2:
            $panjang1 = 25; $lebar1 = 14;
            $luas1 = $panjang1 * $lebar1;
            echo "<br>Mencari Luas Persegi Panjang<br>";
            echo "Panjang = $panjang1 cm<br>";
            echo "Lebar = $lebar1 cm<br>";
            echo "Luas Bujur Sangkar = $luas1 cm<sup>2</sup><br>";
            break;
        case 3:
            $sisi = 12;
            $luas = $sisi * $sisi;
            echo "<br>Mencari Luas Bujur Sangkar<br>";
            echo "Sisi = $sisi cm<br>";
            echo "Luas Bujur Sangkar = $luas cm<sup>2</sup><br>";
            break;
        default:
            echo "<br><blink>Pilihan anda salah, silakan coba lagi</blink>";
            break;
    }
    ?>
</body>
</html>
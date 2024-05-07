<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Klasemen Piala Asia U-23 Qatar Group B</title>
</head>
<body>
    <h2>Input Data Klasemen Piala Asia U-23 Qatar Group B</h2>
    <form action="uts.php" method="post">
        <label for="negara">Nama Negara:</label>
        <select name="negara" id="negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br><br>
        <label for="pertandingan">Jumlah Pertandingan (P):</label>
        <input type="number" name="pertandingan" id="pertandingan" required><br><br>
        <label for="menang">Jumlah Menang (M):</label>
        <input type="number" name="menang" id="menang" required><br><br>
        <label for="seri">Jumlah Seri (S):</label>
        <input type="number" name="seri" id="seri" required><br><br>
        <label for="kalah">Jumlah Kalah (K):</label>
        <input type="number" name="kalah" id="kalah" required><br><br>
        <label for="poin">Jumlah Poin:</label>
        <input type="number" name="poin" id="poin" required><br><br>
        <label for="operator">Nama Operator:</label>
        <input type="text" name="operator" id="operator" required><br><br>
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" name="nim" id="nim" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Klasemen Piala Asia U-23 Qatar Group A</title>
</head>
<body>
    <h1>Input Data Klasemen Piala Asia U-23 Qatar Group A</h1>
    <form action="save.php" method="post">
        <label for="country">Nama Negara:</label>
        <select id="country" name="country[]" required multiple>
            <option value="Qatar U-23">Qatar U-23</option>
            <option value="Indonesia U-23">Indonesia U-23</option>
            <option value="Australia U-23">Australia U-23</option>
            <option value="Yordania U-23">Yordania U-23</option>
        </select><br><br>
        <label for="matches">Jumlah Pertandingan (P):</label>
        <input type="number" id="matches" name="matches[]" required><br><br>
        <label for="wins">Jumlah Menang (M):</label>
        <input type="number" id="wins" name="wins[]" required><br><br>
        <label for="draws">Jumlah Seri (S):</label>
        <input type="number" id="draws" name="draws[]" required><br><br>
        <label for="losses">Jumlah Kalah (K):</label>
        <input type="number" id="losses" name="losses[]" required><br><br>
        <label for="points">Jumlah Poin:</label>
        <input type="number" id="points" name="points[]" required><br><br>
        <label for="operator">Nama Operator:</label>
        <input type="text" id="operator" name="operator" required><br><br>
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
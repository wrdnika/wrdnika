<html>
    <head>
        <title>Contoh Penggunaan IF</title>
    </head>
        <body>
            <h3>Menentukan bilangan ganjil/genap</h3>
            <form method="post" action="">
                Masukan Nilai:
                <input type="text" name="input1"><br><br>
                <input type="submit" value="Proses">
            </form>
            <?php
            if(isset($_POST['input1'])) {
                $nilai = intval($_POST['input1']);
                if($nilai % 2 == 0)
                    printf("$nilai merupakan bilangan genap");
                else
                    printf("$nilai merupakan bilangan ganjil");
            }
            ?>
        </body>
</html>
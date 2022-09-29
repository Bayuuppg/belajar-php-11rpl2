<h1>Tambah Data</h1>
<form action ="input-datadiri-tambah.php" method="POST">
            <label for="nis"> Nomor Induk Siswa :</label><br>
            <input type="number" name="nis" placeholder="Ex.121002101" /> <br>

            <label for="nama"> Nama lengkap :</label><br>
            <input type="text" name="nama" placeholder="EX.Kingjuan" > <br>
            
            <label for="tanggal_lahir">Tanggal Lahir :</label><br>
            <input type="date" name="tanggal_lahir" /> <br>

            <label for="nilai"> Nilai:</label><br>
             <input type="number" name="nilai" placeholder="Ex. 80.56" /> <br><br>

                <input type="submit" name="simpan" value="simpan data" />
                <a href="input-datadiri.php"> Kembali </a>
</form>

<?php

    
    if ($_SESSION["login"] != TRUE) {
        header('location:Login.php');
}
    if ($_SESSION["role"] != "admin") {
        echo "
        <script>
                alert('Akses tidak diberikan, Kamu Bukan Admin');
                window.location='input-datadiri.php';
        </script>
     ";
 }

    if (isset($_POST["simpan"]) ) {
         $nis = $_POST["nis"];
         $nama = $_POST["nama"];
         $tanggal_lahir = $_POST ["tanggal_lahir"];
         $nilai = $_POST["nilai"];

         echo $nis . "<br>";
         echo $nama . "<br>";
         echo $tanggal_lahir . "<br>";
         echo $nilai . "<br>";

         // CREATE - Menambahkan DATA ke Database
         $query = "
            INSERT INTO datadiri VALUES
            ('$nis', '$nama', '$tanggal_lahir', '$nilai');
        ";

        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
                    <script>
                            alert('Data Berhasil ditambahkan');
                            window.location='input-datadiri.php';
                    <script>
            
            ";
        }
    }
?>
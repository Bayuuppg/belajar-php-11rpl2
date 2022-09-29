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


    if (isset($_GET["nis"])){
        $nis = $_GET["nis"];
         $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis';";
       include('./input-config.php');
       $query = mysqli_query($mysqli, $check_nis);
       $row = mysqli_fetch_array($query); 
    }
?>
<h1>Edit Data</h1>
<form action ="input-datadiri-edit.php" method="POST">
            <label for="nis"> Nomor Induk Siswa :</label><br>
            <input value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex.121002101" readonly/> <br>

            <label for="nama"> Nama lengkap :</label><br>
            <input value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama" placeholder="EX.Kingjuan" > <br>
            
            <label for="tanggal_lahir">Tanggal Lahir :</label><br>
            <input value="<?php echo $row["tanggal_lahir"]; ?>" type="date" name="tanggal_lahir" /> <br>

            <label for="nilai"> Nilai:</label><br>
             <input value="<?php echo $row["nilai"]; ?>" type="number" name="nilai" placeholder="Ex. 80.56" /> <br><br>

                <input type="submit" name="Edit" value="Edit Data" />
                <input type="Reset" name="reset" value="reset" />
                <a href="input-datadiri.php"> Kembali </a>
</form>

<?php

if (isset($_POST["edit"]) ) {
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST ["tanggal_lahir"];
    $nilai = $_POST["nilai"];

    // EDIT - Memperbarui Data
    $query = "
            UPDATE datadiri SET namalengkap = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            nilai = '$nilai'
            WHERE nis = '$nis';
        ";
        include ('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if ($update){
            echo "
                    <script>
                            alert('Data Berhasil ditambahkan');
                            window.location='input-datadiri.php';
                    <script>
            
            ";
        }else{
            echo "
                <script>
                alert('Data gagal');
                window.location='input-datadiri-edit.php?nis=$nis';
                </script>
            ";
        }
    }
?>
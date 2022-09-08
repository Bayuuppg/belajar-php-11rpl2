<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex, Satrio" /><br>
    <input type="text" name="Kelas" placeholder="Ex, 11 RPl 2" /><br>
    <input type="number" name="NIS" placeholder="Ex, 120101" /><br>


    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ) {
        echo "<hr>";

        $nama = $_POST["namalengkap"];
        $Kelas = $_POST["Kelas"];
        $NIS = $_POST["NIS"];

        echo "Nama Lengkap : $nama <br>";
        echo "Kelasnya : $Kelas <br>";
        echo "NIS : $NIS <br>";
    }
?>
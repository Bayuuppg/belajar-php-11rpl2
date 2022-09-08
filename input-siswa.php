    <form action ="input-siswa.php" method="POST">
            <label for="nis"> Nomor Induk Siswa :</label>
            <input type="number" name="nis" placeholder="Ex.121002101" /> <br>

            <label for="nama"> Nama lengkap :</label>
            <input type="text" name="nama" placeholder="EX.Kingjuan" > <br>

            <label for="jk">Jenis Kelamin :</label>
            <input type="radio" name="jk" value = "L" /> Laki-Laki
            <input type="radio" name="jk" value = "P" /> Perempuan <br>

            <label for="kelas">Kelas :</label>
            <input type="text" name="kelas" placeholder="EX. 11 RPL 2" /> <br>
            
            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="date" name="tanggal_lahir" /> <br>

            <label for="alamat">Alamat :</label> <br>
            <textarea name="alamat" placeholder="EX. 31. Arief Rahman"></textarea> <br>
            
            <label for="Eskul"> ekstrakurikuler :</label> <br>
            <select name="eskul">
                <option>Pramuka</option>
                <option>Paskibra</option>
                <option>BTQ</option>
                <option>Futsal</option>
                <option>Basketball</option>
                <option>Marchingband</option>
            </select><br>

            <label for="nilai"> Nilai:</label>
             <input type="number" name="nilai" placeholder="Ex. 80.56" /> <br>

                <input type="submit" name="simpan" value="simpan data" />
                <input type="Reset" name="reset" value="reset" />
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";

        //deklrasi Variabel
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggal_lahir = date('l, d f y' , strtotime($_POST["tanggal_lahir"])  );
        $alamat = $_POST["alamat"];
        $eskul = $_POST["eskul"];
        $nilai = $_POST["nilai"];


        if ($nilai >= 78) {
            $status = "Lulus";
        }else { 
            $status = "Belum Lulus";
        }

        //Tampil Data Variabel
        echo "
        Hasil Inputan Sebagai Berikut: <br>
        Nomor Induk Siswa : $nis <br>
        Nama Lengkap : $namalengkap <br>
        Jenis Kelamin : $jeniskelamin <br>
        kelas : $kelas <br>
        Tanggal Lahir : $tanggal_lahir <br>
        Alamat : $alamat <br>
        Ekstrakulikuler : $eskul <br>
        Nilai : $nilai <br>
        Status Kelulusan : $status

         ";
    }


            
<form action ="input-siswa.php" method="POST">
            <label for="nis"> Nomor Induk Siswa :</label>
            <input type="number" name="nis" placeholder="Ex.121002101" /> <br>

            <label for="nama"> Nama lengkap :</label>
            <input type="text" name="nama" placeholder="EX.Kingjuan" > <br>
            
            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="date" name="tanggal_lahir" /> <br>

            <label for="nilai"> Nilai:</label>
             <input type="number" name="nilai" placeholder="Ex. 80.56" /> <br>

                <input type="submit" name="simpan" value="simpan data" />
                <input type="Reset" name="reset" value="reset" />
</form>

<?php
        echo "<hr>";    
        include('./input-config.php');

        $no = 1;
        $tabledata = "";
        $data = mysqli_query($mysqli," SELECT * FROM datadiri " );
        while($row = mysqli_fetch_array($data)){
            $tabledata .= "
                    <tr>
                        <td>".$row["nis"]."</td>
                        <td>".$row["namalengkap"]."</td>
                        <td>".$row["tanggal_lahir"]."</td>
                        <td>".$row["nilai"]."</td>
                    </tr>
                ";
                $no++;
            }


        echo "
            <table cellpadding=5 border=1 cellspacing=0>
                    <tr>
                        <th>NIS</th>
                        <th>Nama lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>NIlai</th>
                    </tr>
                    $tabledata
                </table>
        
        "
?>

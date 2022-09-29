<?php
        
        include('./input-config.php');
        if ($_SESSION["login"] != TRUE) {
            header('location:Login.php');
        }

         echo "<hr>"; 
         echo "Selamat Datang, " . $_SESSION["username"] . "<br>";
         echo "Anda Sebagai, " . $_SESSION["role"];
         echo " - ";
         echo "<a href='logout.php'>Logout</a>";
         echo " - ";
         echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";

         // READ - Menampilkan data dari database
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
                        <td>
                                <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                                &nbsp;-&nbsp;
                                <a href='input-datadiri-hapus.php?nis=".$row["nis"]."'
                                onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>


                        </td>       
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
                        <th>Aksi</th>
                    </tr>
                    $tabledata
                </table>
        
        ";
?>

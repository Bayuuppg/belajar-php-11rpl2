<?php

     // percabangan (IF ELSE)
     $nilai = 90;
     echo "Nilai kamu = $nilai <br>";
     echo "maka status kamu = ";

     if ($nilai > 75) {
     echo "lulus Beneran";
     } else if ($nilai == 75) {
        echo "LULUS KKM";
     } else {
        echo "tidak lulus";
     }

     echo "<hr>";

     $nilai_web = 80;
     $nilai_pbo = 82;
     echo "Nilai Web kamu = $nilai_web <br>";
     echo "Nilai Pbo Kamu = $nilai_pbo <br>";
     echo "Hasil Kelulusan Kamu =";
     if ($nilai_web >= 80 AND $nilai_pbo >= 80 ) {
        echo "Lulus Nilai Produktif 2 mapel ";
     }else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
        echo "Lulus Nilai produktif Salah Satu Mapel";
     }else{
        echo "Tidak Lulus Nilai produktif";
     }

     echo "<hr>";

     //perulangan (While, Do While, For)
     $i = 1;
     while ($i < 5){
           echo "Hello World! Ke - $i <br>";
           $i++; // Assigment +1
     }

     echo "<hr>";

     $no = 1;
     do {
         echo "Halo Dunia ! <br>";
         $no++;
     }while ($no < 5);

     echo "<hr>";

     $nomor = 1;
     for ($nomor; $nomor < 5; $nomor++) {
        echo "Ohayo Sekai Waaa ! <br>";
     }

     echo "<hr>";

     // Pratikum IF Didalam FOR
     echo "CASE 1 = Menentukan Angka Ganjil & Genap <br>";
     $angka = 1;
     for ($angka; $angka <= 10; $angka++){
        if ($angka % 2 == 0) {
            echo "$angka = Bilangan Genap <br>";
        } else {
            echo "$angka = Bilangan Ganjil <br>";    
        }
     } 
     echo "<hr>";

     // Praktik For didalam For
     echo "Case 2 = Angka Berulang <br>";
     $x = 1 ;
     for ($x; $x <= 9; $x++){
        for ($y = $x; $y <= 9; $y++){
        echo $x;
        }
        echo "<br>";
     }
?>
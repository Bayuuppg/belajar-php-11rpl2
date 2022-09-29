<?php
    session_start();
    $mysqli = new mysqli("localhost","root","","siswa_rpl2");
    if ($mysqli -> connect_errno){
        echo "failed to connect to MySQLi" , $mysqli -> connect_error;
        exist();
    }
?>
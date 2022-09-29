<?php
         include('./input-config.php');

         session_destroy();

         echo "
         <script>
                 alert('Logout Berhasil');
                 window.location='Login.php';
         </script>
         ";
?>
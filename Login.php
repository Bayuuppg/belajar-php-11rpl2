<h1>Login Form</h1>
<form action="Login.php" method="POST">
    <label>Username</label><br>
    <input type="text" name="username" placeholder= "Ex. farrel" required />
    <br>
    <label>Password</label><br> 
    <input type="password" name="password" placeholder= "Ex. ---" required />
    <br>
    <input type="submit" name="login" value="Masuk" />
</form>

<?php
        
        include('./input-config.php');

        if ( isset($_POST["login"]) ){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $query = "SELECT * FROM akun
            WHERE username = '$username' AND password = MD5('$password'); ";
            $data = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($data) > 0){
                $row = mysqli_fetch_array($data);

                $_SESSION["login"] = TRUE;
                $_SESSION["akun_id"] = $row["akun_id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["nama_akun"] = $row["nama_akun"];
                $_SESSION["role"] = $row["role"];



                echo "
                <script>
                        alert('Login Berhasil');
                        window.location='input-datadiri.php';
                </script>
                ";
            }else{
                echo "
                <script>
                        alert('Lo siapa Ngentot?');
                        window.location='Login.php';
                </script>
                 ";
                
            }
        }
?>





































































































<?php
    include_once 'config.php';

    if(isset($_POST['email'])) {
        $password   = $_POST['password'];
        $confirm    = $_POST['confirm'];
        if($password == $confirm) {
            $nama       = $_POST['nama'];         
            $email      = $_POST['email'];         
            $username   = $_POST['username'];   
            
            // CRUD
            $sql    = "INSERT INTO tb_user(id, nama, email, username, passkey, iduser) VALUES ('', '$nama', '$email', '$username', '".md5($password)."', '".md5($nama)."')";
            $conn   = mysqli_connect($host, $user, $pass, $db, $port) or die("Koneksi gagal!");
            $result = mysqli_query($conn, $sql);

            if($result) {
                echo "<script>
                    alert('Registerasi berhasil!')
                </script>";   
            } else {
                echo "<script>
                    alert('Registrasi gagal!')
                </script>";   
            }

        } else {
            echo "<script>
                    alert('Password tidak sesuai!')
                </script>";   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | User</title>
</head>
<body>

    <form action="register.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td> : <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td> : <input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td> : <input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td> : <input type="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="confirm">Password Confirm</label></td>
                <td> : <input type="password" name="confirm"></td>
            </tr>
            <tr>
                <td>
                    <br>
                    <button type="submit" name="register">Register</button>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>
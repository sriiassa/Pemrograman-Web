<?php
    session_start();
    include_once "config.php";
    
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $conn   = mysqli_connect($host, $user, $pass, $db, $port) or die("Koneksi gagal!");
        $sql    = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
        $cek    = mysqli_num_rows($sql);
    
        if($cek > 0) {
            header("Location: dashboard.php");
        } else {
            echo "<script>
                        alert('Username atau Password salah!')
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
    <title>Login</title>
</head>
<body>

    <form action="login.php" method="POST">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td> : <input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td> : <input type="password" name="password"></td>
            </tr>
            <tr>
                <td>
                    <br>
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>
<?php
    include_once "config.php";
    
    $psn = "";
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn   = mysqli_connect($host, $user, $pass, $db, $port) or die("Koneksi gagal!");
        $sql    = "SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tb_user tu WHERE username='".$username."'";
        $result = mysqli_query($conn, $sql);
        $cek    = mysqli_num_rows($result);
        $h      = mysqli_fetch_assoc($result);

        if(md5($password) == $h['passkey']) {
            $_SESSION['login'] = $h['iduser'];
            header("location: dashboard.php");
        } else {
            $psn = "Akses ditolak!";
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

    <div><?= $psn; ?></div>
    <form action="login.php" method="POST" autocomplete="off">
        <h3>Form Login</h3>
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
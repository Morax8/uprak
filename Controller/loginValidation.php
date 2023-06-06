<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../Config/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM `user` WHERE username='$username' AND password='$password'");
$check = mysqli_num_rows($data);

if ($check <= 0) {
    header("location:../index.php?pesan=pw/unameSalah");
    exit;
}

$data = mysqli_fetch_assoc($data);
echo "Debugging here";
var_dump($data['level']);

if ($data['level'] !== 'admin' && $data['level'] !== 'user') {
    header("location:../index.php?pesan=ini");
    exit;
}

if ($data['level'] == 'admin') {
    $_SESSION['username'] = $username;
    $_SESSION['level'] = 'admin';
    header("location:../Page/admin.php");
    exit;
}

if ($data['level'] == 'user') {
    $_SESSION['username'] = $username;
    $_SESSION['level'] = 'user';
    header("location:../Page/user.php");
    exit;
}
?>





// require 'Config/connect.php';
// error_reporting(0);
// session_start();

// if (isset($_SESSION['username'])) {
// header("Location: ./Controller/LoginSucces.php");
// }

// if (isset($_POST['submit'])) {
// $username = $_POST['username'];
// $password = ($_POST['password']);

// $sql = "SELECT * FROM `user` WHERE username='$username' AND password='$password'";
// $result = mysqli_query($conn, $sql);

// if ($result->num_rows > 0) {
// $row = mysqli_fetch_assoc($result);
// $_SESSION['username'] = $row['username'];
// $_SESSION['password'] = $row['psssword'];
// header("Location: ./Controller/LoginSucces.php");
// } else {
// echo "<script>
    alert('Username atau password Anda salah. Silahkan coba lagi!')
</script>";
// }
// }
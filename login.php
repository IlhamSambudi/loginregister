<?php
include 'config.php';

$username = ($_POST['username']);
$password = (md5($_POST['password']));

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$sql = mysqli_query($koneksi, $query);
if ($sql->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location:user.php");
} else {
    echo "<h1> Email atau Password salah</h1?";
    echo "<div class='form'>
    <br/> 
    <a href='index.php'>try again</a>
    </div>";
}

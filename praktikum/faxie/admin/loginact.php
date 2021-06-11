<?php
include "../koneksi.php";

$username = $_POST['username'];
$password     = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM hy_admin where username='$username' and password='$password'") OR die(mysqli_error($con));
$row=mysqli_fetch_array($login);
$jumlah = mysqli_num_rows($login);
if ($jumlah == 1)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:home.php');
}
else
{
  header('location:index.php');

}
?>
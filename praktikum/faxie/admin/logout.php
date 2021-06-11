<?php
session_start();
include_once 'koneksi.php';
	session_destroy();
	unset($_SESSION['username']);
	header("Location: index.php");
?>
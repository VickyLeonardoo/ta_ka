<?php 
session_start();
include 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$data= mysqli_query($conn,"SELECT * from user where username='$user' and password='$pass'");
if(mysqli_num_rows($data)>0){
    $row=mysqli_fetch_array($data);
		$_SESSION['username'] = $user;

        header("location:admin.php");
} else {
	echo 'Data Anda Tidak Valid <br> <a href="index.php">Kembali</a>';
}
?>
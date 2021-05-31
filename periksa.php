<?php
	session_start();
	include'config.php';
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$_SESSION['nim']=$email;
		$sqluser=mysqli_query($conn,"SELECT * from praktikan where nim='$email' and kata_sandi='$password'");
		if (($email!="")&&($password!="")&&isset($password)&&isset($email)&&(strlen($password)>=5)&&(strlen($password)<=35)){
			if(mysqli_num_rows($sqluser)>0){
				$_SESSION['nim']=$email;
				header("location:aldi.php");
			}
			else{
				$_SESSION['status']="";
				header("location:login.php?pesan=gagal");
			}
		}else{
			header("location:login.php");
		}

	}
?>
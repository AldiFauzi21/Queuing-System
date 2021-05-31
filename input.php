<?php
	session_start();
	include 'config.php';
	require 'functions.php';
	if(isset($_POST['fullname'])
		&&isset($_POST['prov'])
		&&isset($_POST['kota'])
		&&isset($_POST['pass'])
		&&isset($_POST['pass2'])
		&&(strlen($_POST['pass'])>=5)
		&&(strlen($_POST['pass'])<=35)
	){
		$nama=$_POST['fullname'];
		// $name = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
		// $_SESSION['nama']=$_POST['fullname'];
		$nim=$_POST['prov'];
		// $prov = filter_input(INPUT_POST, 'prov', FILTER_SANITIZE_STRING);
		// $_SESSION['prov']=$_POST['prov'];
		$kelompok=$_POST['kota'];
		// $kota = filter_input(INPUT_POST, 'kota', FILTER_SANITIZE_STRING);
		// $_SESSION['kota']=$_POST['kota'];
		$password=$_POST['pass'];
		$password2=$_POST['pass2'];
		// $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
		// $password2 = password_hash($_POST["pass2"], PASSWORD_DEFAULT);
		//$_SESSION['test']=$alamat;
		$sql = "INSERT INTO praktikan (nim, nama, kelompok, kata_sandi) VALUES ('$nim', '$nama', '$kelompok', '$password');";
		if (($nama!="")
			&&($nim!="")
			&&($kelompok!="")
			&&($password!="")
			// &&(strlen($password)>=5)&&(strlen($password)<=35)
			// &&(strlen($kota)>3)&&(strlen($prov)>3)
			&&($password==$password2)
			// &&(strlen($phone)>9)&&(strlen($phone)<16)
		) {
			if(mysqli_num_rows($sql)>0){
				header("location:Daftar.php?pesan=gagal");
			}
			else{
				if ($conn->query($sql) === TRUE) {
					if(upload($nim)>0){
			          header("location:login.php");
			        } else {
			          $query = "DELETE FROM praktikan WHERE nim='$nim'";
			          mysqli_query ($conn, $query);
			          header("location:Daftar.php");
			        }
				} else {
				    echo "Error$ " . $sql . "<br>" . $conn->error;
				}
			}
		}else{
			header("location:Daftar.php");
		}
	}else{
	header("location:Daftar.php");
}
?>
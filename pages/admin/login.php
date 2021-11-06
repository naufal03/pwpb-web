<?php

	include "koneksi.php";
	
	// mengambil nilai dari yang di input di form login
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
	$get_user = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($konek,$get_user);
	
	$data = mysqli_fetch_array($result);
	if($data){
		// email yang dimasukan ada di db
		// check password
		if($password == $data['password']){
			Header("Location: admininput.html");
		}else{
			Header("Location: adminlogin.html");
		}
	}else{
		Header("Location: adminlogin.html");
	}

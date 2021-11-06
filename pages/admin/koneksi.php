<?php
	// open koneksi ke database
	define("db_host", "localhost");
	define("db_user", "root");
	define("db_pass", "");
<<<<<<< HEAD
	define("db_name", "pwpb_db");
=======
	define("db_name", "db_pwpb");
>>>>>>> 24d69c2dee533132e047b274f3996fe6c5b7d315
	
	$konek = mysqli_connect(db_host, db_user, db_pass, db_name);
	if (!$konek){
		die("Error!");
	}
	
	// ===
?>
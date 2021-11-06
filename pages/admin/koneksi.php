<?php
	// open koneksi ke database
	define("db_host", "localhost");
	define("db_user", "root");
	define("db_pass", "");
	define("db_name", "pwpb_db");
	
	$konek = mysqli_connect(db_host, db_user, db_pass, db_name);
	if (!$konek){
		die("Error!");
	}
	
	// ===
?>
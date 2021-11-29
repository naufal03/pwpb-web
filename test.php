<?php
include_once ('koneksi.php');
if ($mysqli) {
	echo "database connect";
}else {
	echo "database tidak connet";
}

?>
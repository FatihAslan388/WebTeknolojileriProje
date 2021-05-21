<?php 
session_start();
if (!iiset($_SESSION["oturum"]) {
	header("locations:giris.php");
}
echo "Hoşgeldiniz".$_SESSION["kullanici"];
 ?>
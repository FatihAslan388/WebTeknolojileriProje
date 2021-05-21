<meta charset="utf-8">
<form action="" method="post">
<table>
	<tr>
		<td>Kullanıcı Adı: </td>
		<td><input type="text" name="kad"></td>
	</tr>
	<tr>
		<td>Şifre: </td>
		<td><input type="password" name="sifre"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Giriş Yap"></td>
	</tr>
</table>	

</form>
<?php 
if ($_POST) {
	
	session_start();
	$kad = $_POST["kad"];
	$sifre = $_POST["sifre"];
	if ($kad=="admin" and $sifre=="1234") {
		$_SESSION["oturum"]=true;
		$_SESSION["kullanici"]= $kad;
		echo "Başarıyla Giriş Yaptınız";
		header("Refresh:2; url=index.php");
	}else{
		echo "Kullanıcı adınız veya şifreniz yanlış";
	}
}

 ?>
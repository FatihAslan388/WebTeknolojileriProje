<?php 

$girisdogru = false;
$bossifre=false;
$boskullaniciadi=false;
$gecersizmail=false;
$last=false;
if(empty($_POST)==false)
{
    $Kadi=$_POST["Kadi"];
    $sifre=$_POST["sifre"];

    if($Kadi=="")
    {
        $boskullaniciadi=true;
    }
    else if($sifre=="")
    {
        $bossifre=true;
    }
    else if($Kadi=="b1812100001@sakarya.edu.tr" && $sifre=="b1812100001")
    {
        $girisdogru = true;
    }

    
}

?>
<html>
	<head>
	   <title>Login | Web Tasarım </title>
	   <meta http-equiv="Content-Type" content="text/html";charset=utf-8 />
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   
	   <meta name="description" />
	   <meta name="keywords" />
	   
	   <link href="css/style.css" rel="stylesheet" type="text/css">
	   <link rel="shortcut icon" href="img/icon.png">
	</head>
	<body>
		<div id="header">
			<a href="index.html" title="Anasayfa">
				<img src="img/logo.jpg" alt="logo" class="websitesilogo"/>
			</a>
			<ul class="menu">
				<li>
					<a href="index.html"	title="Anasayfa">Anasayfa</a>
				</li>
				
				<li>
					<a href="ozgecmis.html"	title="Özgeçmiş">Özgeçmiş</a>
				</li>
				
				<li>
					<a href="sehrim.html"	title="Şehrim">Şehrim</a>
				</li>
				
				<li>
					<a href="mirarimiz.html"	title="Mirasımız">Mirasımız</a>
				</li>
				<li>
					<a href="ilgialanlarim.html"	title="İlgi Alanlarım">İlgi Alanlarım</a>
				</li>	
				<li>
					<a href="iletisim.html"	title="İletişim">İletişim</a>
				</li>
				<li>
					<a href="login.php"	title="Login">Login</a>
				</li>				
			</ul>
		</div>
		<div id="content">
			<h1>Login</h1>
			<div class="sayfabanner">
				<img src="img/anasayfa.jpg" />
			</div>
			<div class="yazialani">
				<p>Login kısmı</p>
			</div>
			<center>
				<form action="" method="POST">
					Kullanici Adi : <input type="text" name="Kadi">
					Sifre : <input type="password" name="sifre">
					<input type="submit" name="buton" value="Giris"><b></b>
					<?php 
					if ($girisdogru == true)
					{
						echo "Hosgeldiniz b1812100001"; 
						$girisdogru = false;
					}
					if ($bossifre==true)
					{
						echo "Sifre girmediniz!"; 
						$bossifre=false;
					}
					if ($boskullaniciadi == true)
					{
						echo "Kullanici adi girmediniz!"; 
						$boskullaniciadi=false;
					}
	
	
					?>
				</form>
			</center>
		</div>
		<div id="footer">
		
		</div>
	</body>

</html>
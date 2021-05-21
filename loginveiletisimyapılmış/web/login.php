<?php 
$users=array("b1812100001@sakarya.edu.tr","g201210400@sakarya.edu.tr","b1812100002@sakarya.edu.tr","b1812100003@sakarya.edu.tr","b1812100004@sakarya.edu.tr");
$passwords=array("b1812100001","g201210400","b1812100002","b1812100003","b1812100004");
$girisdogru = false;
$bossifre=false;
$boskullaniciadi=false;
$girisyanlis = false;
$girisyapankullanici;
if(empty($_POST)==false)
{
    $Kadi=$_POST["kullanici"];
    $sifre=$_POST["sifre"];

    if($Kadi=="")
    {
        $boskullaniciadi=true;

    }
    else if($sifre=="")
    {
        $bossifre=true;
    }
    if($sifre!="" and $Kadi!="")
    {
    	for ($i=0; $i <count($users) ; $i++) 
    	{ 
    		if($Kadi==$users[$i] and $sifre==$passwords[$i])
	    {
	       	$girisdogru = true;
	       	$girisyapankullanici=$passwords[$i];
	    }
	    	    else
	    {
	    	$girisyanlis=true;
	    }
	    	
	    }

	    
	}

    

    
}

?>
<html>
	<head>
	   <title>Login | Web Tasarım </title>
	   <meta http-equiv="Content-Type" content="text/html";charset=utf-8 />
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta charset="utf-8">
	   <meta name="description" />
	   <meta name="keywords" />
	   <script src="php/login.php"> </script>
	   
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
					<a href="login.html"	title="Login">Login</a>
				</li>				
			</ul>
		</div>
		<div id="content">
			<h1>Login</h1>
			<div class="sayfabanner">
				
			</div>

			<center>
				<form action="" method="POST">
					Kullanici Adi : <input type="email" name="kullanici">
					Sifre : <input type="password" name="sifre">
					<input type="submit" name="buton" value="Giris">
					<?php 
	                if ($girisdogru == true)
	                {
	                	?><h1 style="font-size: 20px;">Hoşgeldiniz <?php echo $girisyapankullanici; ?> </h1><?php 
	                    $girisdogru = false;
	                }
	                if ($bossifre==true)
	                {
	                	?><h1 style="font-size: 20px;">Şifre girmediniz!</h1><?php
	                    
	                    $bossifre=false;
	                }
	                if ($boskullaniciadi == true)
	                {
	                	?><h1 style="font-size: 20px;">Kullanici adi girmediniz!</h1><?php
	                    $boskullaniciadi=false;
	                }
	               	if ($girisyanlis==true)
	                {
	                	?><h1 style="font-size: 20px;">Kullanici adi veya Şifre yanlış!</h1><?php
	                    $girisyanlis=false;
	                }



	                ?>
				</form>
			</center>
		</div>
		<div id="footer">
		
		</div>
	</body>

</html>

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
        <title>giris</title>
        <style>

        </style>
    </head>
    <body>
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
    </body>
</html>
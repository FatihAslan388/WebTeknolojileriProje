<?php 

$girisdogru = false;
if(empty($_POST)==false)
{
    $Kadi=$_POST["Kadi"];
    $sifre=$_POST["sifre"];

    if($Kadi=="")
    {
        echo "Kullanici adi girmediniz !";
    }
    else if($sifre=="")
    {
        echo "Sifre girmediniz !";
    }
    else if($Kadi=="b1812100001@sakarya.edu.tr" && $sifre=="b1812100001")
    {
        echo "Hosgeldiniz b1812100001";
        $girisdogru = true;
    }
}

?>
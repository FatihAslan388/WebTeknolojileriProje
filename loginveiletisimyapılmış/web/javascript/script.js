function  Denetle(frm){
    var isim = frm.firstname.value;
    var soyisim = frm.lastname.value;
    var gend = frm.gender.value;
    var yas = frm.yas.value;
    var tel = frm.tel.value;
    var mail = frm.email.value;
    if(isim == null || isim =="" ){
        alert("isimınızı boş bırakmayınız..");
        return false;
    }
    else if(soyisim== null || soyisim==""){
        alert("Soyisimınızı boş bırakmayınız..");
        return false;
    }
    else if(gend == null || gend==""){
        alert("Cinsiyeti boş bırakmayınız..");
        return false;
    }
    else if(yas==null || yas==0){
        alert("Yaşınızı boş bırakmayınız..");
        return false;
    }
    else if(tel==null||tel==""){
        alert("Telefon Numaranızı boş bırakmayınız..");
        return false;
    }
    else if(mail == null|| mail==""){
        alert("E-mailinizi boş bırakmayınız..");
        return false;
    }
    else{
        return true;
    }
}
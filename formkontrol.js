function (formKontrol)) {  
    var adsoyad = document.forms["form1"]["adi"].value;
var adsoyad = document.forms["form1"]["soyadi"].value;
var adsoyad = document.forms["form1"]["email"].value;
var amac1 =document.getElementById("amac1").checked;
var amac2 =document.getElementById("amac2").checked;
var amac3 =document.getElementById("amac3").checked;
var emailFormat =/\S+@ogr.sakarya.edu.tr+/ ;

var genelKontrol =  adi == "" || soyadi =="" ||  email =="";

if(genelKontrol)
{
    alert("Tüm Alanları Doldurunuz...");
    return false;
}
else{
    if(!emailFormat.test(email))
    {
        alert ("Sadece ogr.sakarya.edu.tr alan adlı hesaplarla giriş yapabilirsiniz...")
        return false;
    }
    else {
        return true;
    }
}
}


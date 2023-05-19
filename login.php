<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $kullanici=$_POST['kullanici'];
        $sifre=$_POST['sifre'];
        $email=$_POST['e-mail'];


       if(  $kullanici == 'B221210040' && $sifre == '123456' )
       {
            echo "Hoşgeldiniz... ";
            echo "Kullanıcı Adı... B221210040";
            echo "Şifre... 123456";
            header ("Refresh:4 ; Location:index.html");
            exit();

    } 

    else

    {
        echo  " HATALI GİRİŞ , LOGİN SAYFASINA YÖNLENDİRİLİYORSUNUZ...!";
        header("Refresh:4 ; Location: login.html");
        exit();
    }

}

else 
{
 
  echo " BOŞ BIRAKMAYINIZ..!";
 
}
?>
  

  
</body>
</html>
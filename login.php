<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>HOŞGELDİNİZ!</h3>
    <h4>ADINIZ:
    <?php
    if(isset($_POST["kullanici"])=='B221210040' && $_POST["kullanici"]=='B221210040' )
    {
        echo $_POST["kullanici"];
    }else{
        echo "Ad Hatalı Veya Girilmedi!";
    }
    ?></h4>

    <h4>ŞİFRENİZ:
    <?php
    if(isset($_POST["sifre"])=='123456' && $_POST["sifre"]=='123456')
    {
        echo $_POST["sifre"];
    }else{
        echo "Şifre Girilmedi!";
    }
    ?></h4>


    ANA SAYFAYA YÖNLENDİRİLİYORSUNUZ...

</body>
</html>
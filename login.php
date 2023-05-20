<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2af059;" > 
    <div class="container" >
      <a class="navbar-brand" href="giris.html">Mert BAYIR </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-2">
          <li class="nav-item">
            <a class="nav-link" href="hakkımda.html">Hakkımda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ozgecmis.html">Özgeçmişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sehrim.html">Şehrim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ilgialanlari.html">İlgi Alanlarım</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.html"> İletişim </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
  

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
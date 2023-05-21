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
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1ad194;" > 
    <div class="container">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $kullaniciAdi = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

   
    if ($kullaniciAdi == "B221210040" && $sifre == "123456") 
    { 
        echo("Hoşgeldiniz... <br>");
        echo("Kullanıcı Adı : B221210040 <br>");
        echo("Şifre : 123456 <br>");
        header("refresh:3 ; url= giris.html");
        exit();
    } else {
        echo "Kullanıcı adı veya şifre hatalı. Login sayfasına yönlendiriliyorsunuz ... ";
        header("refresh:3 ; url= login.html");
    }
}
?>
  

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
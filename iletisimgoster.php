<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0061fd;" > 
        <div class="container">
          <a class="navbar-brand"  href="anasayfa.html">Mert BAYIR </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Hakkımda</a>
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
            $adi = $_POST["adi"];
            $soyadi= $_POST["soyadi"];
            $email = $_POST["email"];
            $ilgiler = $_POST["ilgiler"];
            $okul = $_POST["okul"];
            $universiteler = $_POST["universiteler"];
            $meslek = $_POST["meslek"];
            $mesaj = $_POST["mesaj"];


            echo "<p><strong>Ad:</strong> " . $adi . "</p>";
            echo "<p><strong>Soy Ad:</strong> " . $soyadi . "</p>";
            echo "<p><strong>E-posta:</strong> " . $email . "</p>";
            echo "<p><strong>FAVORİ DERSLER:</strong></p>";
            echo "<ul>";
            foreach ($ilgiler as $ilgi) {
                echo "<li>" . $ilgi . "</li>";
            }
            echo "</ul>";
            echo "<p><strong>Üniversiteniz :</strong> " . $universiteler. "</p>";
            echo "<p><strong>Öğrenim Durumunuz :</strong> " . $okul. "</p>";
            echo "<p><strong>İşiniz :</strong> " . $meslek. "</p>";
            echo "<p><strong>MESAJINIZ:</strong> " . $mesaj . "</p>";
        }
    ?>
 
    
   
        <form action="iletisim.html">
         <input type="submit" name="back" value="İLTEİŞİM SAYFASINA DÖN.." >
        </form>
   



    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
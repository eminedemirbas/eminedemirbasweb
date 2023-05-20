<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLETİŞİM</title>
    <link rel="stylesheet" href="app.css"/>
    <link rel="stylesheet" href="Styling Giriş.css"/>
    
    <style>
       
    </style>
</head>
<body>
<nav>
        <div class="logo">
            <p>HOŞGELDİNİZ</p>
        </div>
        <ul>
            <li><a href="hak1.html">Hakkımda</a></li>
            <li><a href="canimödevim.php">Özgeçmiş</a></li>
            <li><a href="hakkımda.html">Hobilerim</a></li>
            <li><a href="iletişim.php">İletişim</a></li>
            <li><a href="şehrim.php">Şehrim</a></li>
            <li><a href="miras.html">Değerlerimiz</a></li>
            <li><a href="panel.php">Panel</a></li>
            <li><a href="index.php">Çıkış Yap</a></li>
        </ul>
    </nav>

    <div class="container">
        <h3>İletişim Formu</h3>
        <form action="iletişim.php" method="POST">
        <div class="form-control">
            <input type="text" name="isim" required />
            <label for="#">Kullanıcı Adı</label>
        </div>
        <div class="form-control">
            <input type="email" name="mail" required />
            <label for="#">Email</label>
        </div>
        <div class="form-control">
            <input type="text" name="tel" required />
            <label for="#">Telefon</label>
        </div>
        <div class="form-control">
            <input type="text"name="konu"  required />
            <label for="#">Konu</label>
        </div>
       
        <div class="form-control">
            <textarea name="mesaj" cols="30" rows="5" required></textarea>
            <label for="#">Mesaj</label>
        </div>
        <div class="form-control">
            <input type="submit" value="Gönder"  />
        </div>
    </form>
    </div>
</body>
</html>


<?php 

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];



    $ekle="INSERT INTO iletisim (adsoyad, email, telefon, konu, mesaj) VALUES ('".$adsoyad."','".$email."','".$telefon."','".$konu."','".$mesaj."')";

if($baglan->query($ekle)===TRUE)
{
    echo "<script>alert('Mesajınız başarı ile gönderilmiştir.')</script>";
}
else{
    echo "<script>alert('Mesajınız gönderilirken bir hata oluştur.')</script>";

}


}

?>
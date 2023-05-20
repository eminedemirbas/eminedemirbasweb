<!DOCTYPE html>
<html>
<head>
<style>


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blueviolet;
  color: white;
}
</style>
<link rel="stylesheet" href="Styling Giriş.css">
</head>
<body style=" background: url(img/arkaplan2.jpg);">

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



<h1>VERİLER</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Email</th>
    <th>Telefon</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  <?php


  include("baglanti.php");
  $sec="Select * From iletisim";
  $sonuc=$baglan->query($sec);

  if($sonuc->num_rows>0)
  {
    while($cek=$sonuc->fetch_assoc())
    {
      echo "
      <tr>
      <td>".$cek['adsoyad']."</td>
      <td>".$cek['email']."</td>
      <td>".$cek['telefon']."</td>
      <td>".$cek['konu']."</td>
      <td>".$cek['mesaj']."</td>
     </tr> ";
    }
  
  }
  else{
    echo "veri bulunamadı";
  }






?>



 
  
</table>

</body>
</html>




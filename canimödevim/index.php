<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="Styling Giriş.css">
    <title>GİRİŞ</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}





.form {
    position: relative;
    width:100%;
    max-width: 380px;
    padding: 80px 40px 40px;
    background:rgba(0,0,0,7);
    border-radius:10px;
    color:#ffff;
    box-shadow:0 15px 25px rgba(0,0,0,5);

}

.form::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50% ;
    height: 100%;
    background: rgba(255,255,255,.0.08);
    transform: skewX(-26deg);
    transform-origin:bottom left;
    border-radius:10px;
    pointer-events:none;
}

.form img{
    position:absolute;
    top: -50px;
    left: calc(50% - 50px);
    width:100px;
    background: rgba(255,255,255,.0.8);
}

.form h2{
    text-align: center;
    letter-spacing: 1px;
    margin-bottom: 2rem;
    color:#c074e4;
}

.form .input-group {
    position: relative;
}

.form .input-group input{
    width: 100%;
    padding: 10px 0 ;
    font-size: 1rem;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background-color: transparent;
    color: inherit;
}

.form .input-group label{
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 1rem;
    pointer-events: none;
    transition: .3s ease-out;
}

.form .input-group input:focus+label,
.form .input-group input:valid+label{
    transform: translateY(-18px);
    color: #c074e4;
    font-size: .8rem;

}

.submit-btn{
    display:block;
    margin-left: auto;
    border:none;
    outline:none;
    background: #c074e4;
    font-size: 1rem;
    text-transform:uppercase;
    letter-spacing: 1px;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

#forgot-pw{
    position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    top:0;
    left:0;
    right:0;
    height:0;
    z-index:1;
    background: #fff;
    opacity:0;
    transition:0.6s;
}

#forgot-pw:target{
    height:100%;
    opacity:1;
}

.close{
    position:absolute;
    right: 1.5rem;
    top:0.5rem;
    font-size: 2rem;
    text-decoration:none;
    color:inherit;
}
    </style>
</head>
<body style="background: url(https://wallpapercave.com/wp/wp4676576.jpg);
    background-size: cover;
    font-family: sans-serif;">
    
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




    <div class="login-wrapper" style="height:100vh;
    width:100vw;
    display: flex;
    justify-content: center;
    align-items: center;">
        <form method="POST" action="" class="form">
            <img src="https://www.animationmagazine.net/images/articles/mr_moon_150.gif" alt="" style="border-radius: 50%;">
            <h2>Giriş Yap</h2>
            <div class="input-group">
                <input type="email" name="username" id="username" required>
                <label for="username">Kullanıcı Maili</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required>
                <label for="password">Şifre</label>
            </div>
            <input type="submit" value="Giriş" class="submit-btn">
            
        </form>
       


    </div>

</body>
</html>

<?php
session_start();

if(isset($_POST["username"], $_POST["password"]))
{
    if($_POST["username"]=="g221210062@sakarya.edu.tr" && $_POST["password"]=="g221210062")
    {
        $_SESSION["user"]=$_POST["username"];
       
        echo "<script>alert('Hoşgeldiniz g221210062') 
         window.location.href='hak1.html';
        </script>";
    }
    else
    {
        echo "<script>alert('Kullanıcı adı veya şifre yanlış')</script>";
    }
}

?>
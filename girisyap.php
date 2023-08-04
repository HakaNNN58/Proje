<?php 
    include 'ayar.php'; //veritabanı bağlantısı
    include 'fonksiyon.php'; //türkçe karakter fonksiyonu
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/ihu-logo.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body class="bg-dark">
<?php include 'banner.php'?>

    <div class="row mt-5">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 mt-5 pt-3">
        <form action="" class="border border-2 pb-4 mt-5 pt-5 border-info" method="post">
            <h2 class="text-light text-center mb-3 pb-3">Giriş Yap</h2>
        <div class="input-group mb-3">
            <span class="input-group-text ms-5 ps-auto" id="basic-addon1">@</span>
            <input type="text" class="form-control bg-transparent" style="max-width: 500px" name="kullAd" placeholder="Kullanıcı Adı" aria-label="Kullanıcı adı" aria-describedby="basic-addon1">
        </div>
        <!--<div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>-->
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text  ms-5 ps-auto">...</span>
            <input type="password" class="form-control bg-transparent" style="max-width: 500px" name="kullSifre" placeholder="Şifre" aria-label="Şifre">
        </div>
        <input type="submit" class="ms-5" value="Giriş Yap">
        
            
                
            </form>
        </div>
        <div class="col-md-3">
        </div>
        
        <p class="text-light text-center">Hesabın yok mu?</p> <a href="kayitol.php"><button>Kayıt Ol</button></a>
    </div>
<?php include 'footer.php'?>
</body>
</html>
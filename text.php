<?php
    include 'ayar.php'; //veritabanı bağlantısı
    include 'fonksiyon.php'; //türkçe karakter fonksiyonu
?>

<?php

$link = @$_GET["link"]; // ?link= burayı çek

$data = $db -> prepare("SELECT * FROM yazilar WHERE text_link=? ");
$data -> execute([
    $link
]);
$_data = $data -> fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/ihu-logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_data["text_baslik"]; ?></title>
</head>
<body class="bg-dark">
<?php include 'banner.php'?>
    <div class="container mt-4 mb-3 pt-5 pe-5 ps-5"><!--header-->
    </div><!--header-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-light mt-4 mb-2">
                
                <p class="text-info text-center"> <img src="<?php echo $_data["text_resim"]; ?>" class="card-img-top" alt="..." style="max-width:300px">  </p>
                                    
                <a class="text-info text-center" href="" style="text-decoration: none"><h3><strong><?php echo $_data["text_baslik"]; ?></strong></h3></a>
                
                <strong>Açıklama: </strong>
                <br>
                <p><?php echo $_data["text_aciklama"]; ?></p>
                <br>
                <br>
                <strong>Tarih:</strong><?php echo $_data["text_tarih"]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
<?php include 'footer.php'?>
</body>
</html>
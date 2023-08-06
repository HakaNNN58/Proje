<?php
    include 'ayar.php'; //veritabanı bağlantısı
    include 'fonksiyon.php'; //türkçe karakter fonksiyonu
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
    <title>Anasayfa</title>
</head>
<!---->
<body class="bg-dark">
<?php include 'banner.php'?>
    <div class="container mt-5 mb-3 pt-5 pe-5 ps-5"><!--header-->
        <div class="row">
            <div class="col-lg-6">
                <a href="admin.php" class="logo"><strong>Admin Paneli</strong></a>
            </div>
            <div class="col-lg-6 ps-lg-5" style="float:right;">
            </div>
        </div>
    </div><!--header-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-light mt-4 mb-2">
                <a class="text-info" href="addtext.php" style="text-decoration: none"><h3><strong>Yazılan Yazılar</strong></h3></a>
                <br>
            </div>
        </div>
        <div class="row">

        <?php

            $veri = $db -> prepare("SELECT * FROM yazilar ORDER BY text_id DESC");
            $veri -> execute();
            $islem = $veri -> fetchALL(PDO::FETCH_ASSOC);

            foreach($islem as $row){
                if(strlen($row["text_aciklama"])<150){
                    $aciklama_kisa= $row["text_aciklama"];
                }
                else{
                    $aciklama_kisa= substr($row["text_aciklama"],0,150)."...";  //karakter kısaltma
                }
                
            echo '<div class="col-lg-4">
                    <div class="card bg-info" style="margin-top: 10px; ">
                                        <img src="'.$row["text_resim"].'"#" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">'.$row["text_baslik"].'</h5>
                            <p class="card-text">'.$aciklama_kisa.'</p>
                            <a href="text.php?link='.$row["text_link"].'" class="btn btn-primary" target="_blank">Devamını Oku</a>
                        </div>
                    </div>
                </div>';
                        }
        ?>
        </div>
    </div>
<?php include 'footer.php'?>
</body>
</html>
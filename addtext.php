<?php include 'ayar.php'; //veritabanı bağlantısı
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
    <title>Yazı Yaz</title>
</head>
<body class="bg-dark">
<?php include 'banner.php'?>
    <div class="container mt-5 mb-3 pt-5 pe-5 ps-5"><!--header-->
        <div class="row">
            <div class="col-lg-6">
                <a href="" class="logo"><strong>Yazı Ekle</strong></a>
            </div>
            <div class="col-lg-6 ps-lg-5" style="float:right;">
                <a href="index.php" class="menu">Siteyi Görüntüle</a>
                <a href="admin.php" class="menu">Yazılar</a>
                <a href="addtext.php" class="menu">Yazı Ekle</a>
            </div>
        </div>
    </div><!--header-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-light mt-4 mb-2">
                
                <form action="" method="post">
                    <strong>Başlık:</strong>
                    <input type="text" name="baslik" id="" class="form-control bg-info w-100">
                    <strong>Açıklama/Yazı</strong>
                    <textarea class="bg-info w-100" name="aciklama" id="" cols="30" rows="10" class="form-control" style="align-items-center"></textarea>
                    <strong>Resim Linki</strong>
                    <input type="text" name="resim" id="" class="form-control bg-info w-100">
                    <br>
                    <input type="submit" value="Yayınla" class="btn btn-secondary">
                </form>
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

<?php                  
    if($_POST){
        $baslik = htmlspecialchars($_POST["baslik"]);       //Veri Ekleme İşlemi
        $aciklama = htmlspecialchars($_POST["aciklama"]);
        $link = permalink($baslik);
        $resim = htmlspecialchars($_POST["resim"]);
        
    }
        //Boşluk Var mı?
        if(empty($baslik)|| empty($aciklama) || empty($resim))
        { //Varsa
            echo '<p class="alert alert-warning">Lütfen Boş Bırakmayınız.</p>';
        }
        else
        { //Yoksa
                    
        //Veri Ekleme
        $addData = $db -> prepare("INSERT INTO yazilar SET text_baslik=?, text_aciklama=?, text_link=?, text_resim=?");
        $addData -> execute([
        $baslik,
        $aciklama,
        $link,
        $resim
        ]);
        //$_data = $data -> fetch(PDO::FETCH_ASSOC);

        if ($addData) {
        //Veri eklendiyse
        echo '<p class="alert alert-success">Başarıyla eklendi</p>';
        header('Location: index.php');

        }
        else {
        //Veri eklenmediyse
        echo '<p class="alert alert-danger">Yazı ekleme başarısız.</p>';
        header("REFRESH:2; URL=addtext.php");
        }
    }   
?>    
<?php include 'ayar.php';?> <!--veritabanı bağlantısı-->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/ihu-logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body class="bg-dark">
<?php include 'banner.php'?>
    <div class="container mt-5 mb-3 pt-5 pe-5 ps-5"><!--header-->
        <div class="row">
            <div class="col-lg-6">
                <a href="" class="logo"><strong>Admin Paneli</strong></a>
            </div>
            <div class="col-lg-6 ps-lg-5" style="float:right;">
                <a href="" class="menu">.</a>
                <a href="admin.php" class="menu">Yenile</a>
                <a href="addtext.php" class="menu">Yazı Ekle</a>
            </div>
        </div>
    </div><!--header-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-light mt-4 mb-2">
               <table class="table bg-info table-striped">
                <tr>
                    <td>
                        <strong class="text-dark">Başlık</strong>
                    </td>
                    <td>
                        <strong class="text-dark">Tarih</strong>
                    </td>
                    <td>
                        <strong class="text-dark">İşlem</strong>
                    </td>
                </tr>
                <?php

                    $veri = $db -> prepare("SELECT * FROM yazilar ORDER BY text_id DESC");          //Veri Listeleme İşlemi
                    $veri -> execute();
                    $islem = $veri -> fetchALL(PDO::FETCH_ASSOC);
                                                                                   
                    foreach($islem as $row){
                    echo '<tr>
                        <td>
                            <a href="text.php?link='.$row["text_link"].'" class="text-dark" target"_blank">'.$row["text_baslik"].'
                        </td>
                        <td>
                            '.$row["text_tarih"].'
                        </td>
                        <td>
                            '."<button type=\"button\" name=\"düzenle\"> Düzenle </button>".'
                            '."<button type=\"button\" name=\"sil\"> Sil </button>".'
                        </td>
                        </tr>';

                    }
                ?>
                
                
                    
               </table>
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
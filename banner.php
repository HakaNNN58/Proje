<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar rounded-pill navbar-expand-lg bg-body-tertiary fixed-top bg-info p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/ihu-logo.png" alt="ihulogo" style="max-width: 35px"></a>
    <p class="pt-3">İHU Blog</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Açılır menü
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">tuş1</a></li>
            <li><a class="dropdown-item" href="#">tuş2</a></li>
            <li><a class="dropdown-item" href="#">tuş3</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-md-2">
      <a href="girisyap.php"><button class="pe-3 ps-3 pt-2 pb-2 rounded-pill bg-secondary text-white"> Giriş Yap </button></a></div>
  </div>
</nav>
</body>
</html>

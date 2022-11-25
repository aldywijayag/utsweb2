<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS - Aldy Wijaya Gustian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Nav Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="margin-left: 50px;">
        <img src="img/alliance.png" alt="Logo" width="25">
        Aldy Wijaya Gustian (19552011351)
      </a>

      <!-- Collapse Navbar-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 50px;">
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="index.php?page=product">Product</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="index.php?page=article">Article</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="index.php?page=contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
      case 'home':
        include "halaman/home.php";
        break;
      case 'product':
        include "halaman/product.php";
        break;
      case 'article':
        include "halaman/article.php";
        break;
      case 'contact':
        include "halaman/contact.php";
        break;
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  } else {
    include "halaman/home.php";
  }

  ?>
</body>

</html>
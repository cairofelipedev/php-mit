<?php
require_once '../admin/dbconfig.php';
include "../admin/insert_form.php";
$post = $_GET['title'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIT Internet</title>
  <meta content="MIT Internet que transforma!💙💚" name="description">
  <meta content="MIT, internet, fibra otica, banda larga, ultravelocidade" name="keywords">
  <meta name="description" content="MIT Internet que transforma!💙💚" />
  <meta property="og:title" content="MIT Internet" />
  <meta property="og:url" content="https://mit-internet.vercel.app" />
  <meta property="og:image" content="https://mit-internet.vercel.app/assets/img/logo-mit.png" />
  <!-- Favicons -->
  <link href="../assets/img/logo-mit.png" rel="icon">
  <link href="../assets/img/logo-mit.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php include "navbar.php"; ?>
  <main id="main">
    <?php
    $stmt = $DB_con->prepare("SELECT id, title, category, text_1, text_2, img FROM posts where title='$post'");
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
    ?>
        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                  <h1 class="title-single"><?php echo $title; ?></h1>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      <?php echo $category; ?>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section><!-- End Intro Single-->

        <!-- ======= Blog Single ======= -->
        <section class="news-single nav-arrow-b">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="news-img-box">
                  <img src="../admin/uploads/blog/<?php echo $row['img']; ?>" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="post-information">
                  <ul class="list-inline text-center color-a">
                    <li class="list-inline-item mr-2">
                      <strong>Autor: </strong>
                      <span class="color-text-a">Cairo Felipe</span>
                    </li>
                    <li class="list-inline-item mr-2">
                      <strong>Categoria: </strong>
                      <span class="color-text-a"> <?php echo $category; ?></span>
                    </li>
                    <li class="list-inline-item">
                      <strong>Date: </strong>
                      <span class="color-text-a">09/02/2022</span>
                    </li>
                  </ul>
                </div>
                <div class="post-content color-text-a">
                  <p class="post-intro">
                    <?php echo $text_1; ?>
                  </p>
                  <p>
                    <?php echo $text_2; ?>
                  </p>
                </div>
                <div class="post-footer">
                  <div class="post-share">
                    <span>Compartilhe: </span>
                    <ul class="list-inline socials">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Blog Single-->
    <?php
      }
    }
    ?>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include "../components/footer.php"; ?>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
</body>

</html>
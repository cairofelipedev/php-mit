<?php
require_once '../admin/dbconfig.php';
include "../admin/insert_form.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIT Internet - Lagoa do Piauí</title>
  <meta content="MIT Internet que transforma!💙💚" name="description">
  <meta content="MIT, internet, fibra otica, banda larga, ultravelocidade" name="keywords">
  <meta name="description" content="MIT Internet que transforma!💙💚" />
  <meta property="og:title" content="MIT Internet" />
  <meta property="og:url" content="https://mitinternet.com.br" />
  <meta property="og:image" content="https://mitinternet.com.br/assets/img/logo-mit.png" />
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
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KH99KST');</script>
<!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH99KST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php include "navbar.php"; ?>
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <?php
      $stmt = $DB_con->prepare('SELECT id, nome, img,link FROM banners where type="home" ORDER BY id DESC');
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
      ?>
          <div class="swiper-slide carousel-item-a intro-item">
            <a href="<?php echo $link; ?>">
              <img class="img-fluid d-none d-md-block" src="../admin/uploads/banners/<?php echo $row['img']; ?>">
              <img class="img-fluid d-block d-md-none" src="../admin/uploads/banners/<?php echo $row['img']; ?>">
            </a>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">
    <section class="section-property section-t4 p-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-box">
              <h2 class="title-a">Conexão completa com nossos serviços</h2>
            </div>
          </div>
        </div>
        <div class="row pt-4">
          <div class="col-md-3 pb-2">
            <div class="card-body-services pt-4 pb-2 shadow">
              <div class="container">
                <h5>INTERNET</h5>
                <p class="lead">Internet mais rápida da região</p>
                <div class="content-services d-flex justify-content-between">
                  <a href="casa-internet.php">
                    <p class="pt-4">Conheça os planos <i class="bi bi-arrow-right"></i></p>
                  </a>
                  <img class="img-fluid" src="../assets/img/icon-internet.png">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pb-2">
            <div class="card-body-services pt-4 pb-2 shadow">
              <div class="container">
                <h5>TV</h5>
                <p class="lead">Programação completa em Full HD.</p>
                <div class="content-services d-flex align-items-center justify-content-between">
                  <a href="combos-internet-tv.php">
                    <p>Conheça os planos <i class="bi bi-arrow-right"></i></p>
                  </a>
                  <img class="img-fluid" src="../assets/img/icon-tv.png">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pb-2">
            <div class="card-body-services pt-4 pb-2 shadow">
              <div class="container">
                <h5>TELEFONIA</h5>
                <p class="lead"> Serviços de telefonia fixa, ilimitado.</p>
                <div class="content-services d-flex align-items-center justify-content-between">
                  <a href="casa-fixo.php">
                    <p>Conheça os planos</p>
                  </a>
                  <img class="img-fluid" src="../assets/img/icon-telefonia.png">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pb-2">
            <div class="card-body-services pt-4 pb-2 shadow">
              <div class="container">
                <h5>COMBOS</h5>
                <p class="lead">Internet + streaming + tv + telefonia</p>
                <div class="content-services d-flex justify-content-between">
                  <a data-bs-toggle="collapse" href="#collapseCombos">
                    <p class="pt-4">Conheça os planos</p>
                  </a>
                  <img class="img-fluid" src="../assets/img/icon-combos.png">
                </div>
                <div class="collapse" id="collapseCombos">
                  <div class="card card-body">
                    <a style="color: #0079a4;font-weight: bold;" href="combos-internet-tv.php">
                      - Internet + TV
                    </a>
                    <a style="color: #0079a4;font-weight: bold;" href="casa-internet.php">
                      - Internet + Netflix ou Disney + ou Amazon
                    </a>
                    <a style="color: #0079a4;font-weight: bold;" href="combos-internet-telefonia.php">
                      - Internet + Telefonia
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section><!-- End Oferece Section -->
    <section id="home-igbi">
      <div class="container">
        <div class="row">
          <div class="col-md-12 pt-4">
            <?php
            $stmt = $DB_con->prepare('SELECT id, nome, img,link FROM banners where type="igbi" ORDER BY id DESC');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <a href="<?php echo $link; ?>">
                  <div class="d-md-flex align-items-center justify-content-center">
                    <img src="../admin/uploads/banners/<?php echo $row['img']; ?>" class="img-fluid">
                  </div>
                </a>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="row justify-content-center mt-2">
          <div class="col-md-2 col-5">
            <a href="https://igbipay.com.br">
              <button class="btn btn-igbi">Saiba mais</button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= FAQ Section ======= -->
    <section id="faq" class="section-property section-t4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap">
              <div class="title-box">
                <h2 class="title-a">Tire suas dúvidas</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <?php
          $stmt = $DB_con->prepare('SELECT id, question, answer FROM faqs ORDER BY id DESC');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading<?php echo $id; ?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $id; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $id; ?>">
                    <?php echo $question; ?>
                  </button>
                </h2>
                <div id="flush-collapse<?php echo $id; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $id; ?>" data-bs-parent="#accordionFlush<?php echo $id; ?>">
                  <div class="accordion-body">
                    <?php echo $answer; ?>
                  </div>
                </div>
              </div>
          <?php
            }
          } ?>
        </div>
      </div>
    </section><!-- End FAQ Section -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 pt-4">
            <div class="d-md-flex align-items-center justify-content-center">
              <?php
              $stmt = $DB_con->prepare('SELECT id, nome, img,link FROM banners where type="auto" ORDER BY id DESC');
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);
              ?>
                  <a href="<?php echo $link; ?>">
                    <img src="../admin/uploads/banners/<?php echo $row['img']; ?>" class="img-fluid">
                  </a>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 pt-4">
            <div class="d-md-flex align-items-center justify-content-center">
              <?php
              $stmt = $DB_con->prepare('SELECT id, nome, img,link FROM banners where type="new" ORDER BY id DESC');
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);
              ?>
                  <a href="<?php echo $link; ?>">
                    <img src="../admin/uploads/banners/<?php echo $row['img']; ?>" class="img-fluid">
                  </a>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="section-property section-t4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap">
              <div class="title-box">
                <h2 class="title-a">Autoatendimento para Clientes</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-2">
            <div class="card-body-c pt-2 pb-2 rounded">
              <div class="container">
                <p class="content-c">
                  <i class="bi bi-file-earmark-text-fill"></i>
                </p>
                <p class="text-black">2º Via de conta móvel</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-2">
            <div class="card-body-c pt-2 pb-2 rounded">
              <div class="container">
                <p class="content-c">
                  <i class="bi bi-cash-coin"></i>
                </p>
                <p class="text-black">Consulta de saldo</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-2">
            <div class="card-body-c pt-2 pb-2 rounded">
              <div class="container">
                <p class="content-c">
                  <i class="bi bi-phone-fill"></i>
                </p>
                <p class="text-black">App Mit</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-2">
            <div class="card-body-c pt-2 pb-2 rounded">
              <div class="container">
                <p class="content-c">
                  <i class="bi bi-credit-card-2-back-fill"></i>
                </p>
                <p class="text-black">Pague a conta com o cartão</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- ======= Latest News Section ======= -->
    <!-- <section class="section-news section-t4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap">
              <div class="title-box">
                <h2 class="title-a">Últimas do Blog</h2>
              </div>
              <div class="title-link">
                <a href="#">Todas as máterias
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">
            <?php
            // $stmt = $DB_con->prepare('SELECT id, title, img, category FROM posts ORDER BY id DESC');
            // $stmt->execute();
            // if ($stmt->rowCount() > 0) {
            //   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //     extract($row);
            ?>
                <div class="carousel-item-c swiper-slide">
                  <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                      <img src="../admin/uploads/blog/<?php // echo $row['img']; 
                                                      ?>" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                      <div class="card-header-b">
                        <div class="card-category-b">
                          <a href="post.php?title=<?php // echo $title; 
                                                  ?>" class="category-b"><?php //echo $category; 
                                                                          ?></a>
                        </div>
                        <div class="card-title-b">
                          <h2 class="title-2">
                            <a href="post.php?title=<?php // echo $title; 
                                                    ?>"><?php // echo $title; 
                                                        ?></a>
                          </h2>
                        </div>
                        <div class="card-date">
                          <span class="date-b">1 Nov. 2021</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
            //   }
            // }
            ?>
          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section> -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "../components/footer.php"; ?>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="../assets/js/login-register.js" type="text/javascript"></script>
</body>

</html>
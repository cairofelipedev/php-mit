<?php
require_once '../admin/dbconfig.php';
include "../admin/insert_form.php";
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

    <!-- ======= Services Section ======= -->
    <section id="plans" class="section-services pt-md-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-md-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Confira nossos planos</h2>
                <p>
                  Soluções para sua casa ou empresa com o melhor custo benefício e vantagens exclusivas.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          $stmt = $DB_con->prepare('SELECT id, speed FROM plans where city="teresina" and type="1" ORDER BY id DESC');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>
              <div class="col-md-4">
                <div class="card-box-c">
                  <h2 class="title-c pt-2"><?php echo $speed; ?> MEGA</h2>
                  <div class="row justify-content-center">
                    <div class="col-6 itens-card">
                      <i class="bi bi-wifi"></i> Conexão Estável
                    </div>
                    <div class="col-6 itens-card">
                      <i class="bi bi-bank2"></i> MIT Star
                    </div>
                    <div class="col-6 itens-card">
                      <i class="bi bi-cash-coin"></i> CashBack
                    </div>
                    <div class="col-6 itens-card">
                      <i class="bi bi-phone-fill"></i> App Minha MIT
                    </div>
                  </div>
                  <div class="d-grid gap-2 container">
                    <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                  </div>
                  <div class="card-body-c pt-2 pb-2">
                    <?php if ($speed == '600') { ?>
                      <div class="container">
                        <p class="content-c">
                          Dezzer ou Netflix
                        </p>
                        <p class="content-c2">Muita música ou Séries originais e exclusivas, filmes, novelas e programas.</p>
                        <div class="row pb-3 align-items-center">
                          <div class="col-2">
                            <img class="img-fluid" src="../assets/img/icon-11778.png">
                          </div>
                          <div class="col-1">
                            ou
                          </div>
                          <div class="col-2">
                            <img class="img-fluid" src="../assets/img/app-netflix-252x252.png">
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php if ($speed == '500') { ?>
                      <div class="container">
                        <p class="content-c">
                          Telefone Digital ou Amazon Prime
                        </p>
                        <p class="content-c2">Telefone digital ou Séries originais e exclusivas, filmes, novelas e programas.</p>
                        <div class="row pb-3 align-items-center">
                          <div class="col-2">
                            <i class="bi bi-phone-fill" style="font-size:30px;"></i>
                          </div>
                          <div class="col-1">
                            ou
                          </div>
                          <div class="col-2">
                            <img class="img-fluid" src="../assets/img/app-globo-play-252x252.png">
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php if ($speed == '400') { ?>
                      <div class="container">
                        <p class="content-c">
                          Assinatura Netflix ou GloboPlay
                        </p>
                        <p class="content-c2">Séries originais e exclusivas, filmes, novelas e programas.</p>
                        <div class="row pb-3 align-items-center">
                          <div class="col-2">
                            <img class="img-fluid" src="../assets/img/app-netflix-252x252.png">
                          </div>
                          <div class="col-1">
                            ou
                          </div>
                          <div class="col-2">
                            <img class="img-fluid" src="../assets/img/amazon.png">
                          </div>
                        </div>

                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section>
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
  <script src="../assets/js/login-register.js" type="text/javascript"></script>
</body>

</html>
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
  <style>
    .Div2,
    .Div3,
    .Div4,
    .Div5 {
      display: none;
    }
  </style>
</head>

<body>
  <?php include "navbar.php"; ?>
  <main id="main">
    <section id="about" class="about pt-4">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Combos de Tv, Internet e Telefone Fixo</h2>
          <p>
            Pacotes com vários canais de TV por assinatura + Internet banda larga com serviços digitais e Wi-fi grátis + telefone fixo.
          </p>
        </div>
        <div class="row g-4 g-lg-5 pt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-4">
                <div class="card-box-c">
                  <div class="container">
                    <h2 class="title-c pt-2">200 MEGA</h2>
                    <p class="pl-4 lead text-black">+ Digital HD</p>
                    <p class="pl-4 lead text-black">+ Telefone Fixo</p>
                  </div>
                  <div class="d-grid gap-2 container">
                    <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                  </div>
                  <div class="card-body-c pt-2 pb-2">
                    <div class="container">
                      <p class="content-c">
                        <i class="bi bi-wifi"></i> Internet 200 mega
                      </p>
                      <p class="content-c">
                        <i class="bi bi-tv-fill"></i> Digital HD
                      </p>
                      <p class="content-c">
                        <i class="bi bi-telephone-fill"></i> Fixo Ilimitado
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-box-c">
                  <div class="container">
                    <h2 class="title-c pt-2">300 MEGA</h2>
                    <p class="pl-4 lead text-black">+ Digital HD</p>
                    <p class="pl-4 lead text-black">+ Telefone Fixo</p>
                  </div>
                  <div class="d-grid gap-2 container">
                    <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                  </div>
                  <div class="card-body-c pt-2 pb-2">
                    <div class="container">
                      <p class="content-c">
                        <i class="bi bi-wifi"></i> Internet 200 mega
                      </p>
                      <p class="content-c">
                        <i class="bi bi-tv-fill"></i> Digital HD
                      </p>
                      <p class="content-c">
                        <i class="bi bi-telephone-fill"></i> Fixo Ilimitado
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-box-c">
                  <div class="container">
                    <h2 class="title-c pt-2">400 MEGA</h2>
                    <p class="pl-4 lead text-black">+ Digital HD</p>
                    <p class="pl-4 lead text-black">+ Telefone Fixo</p>
                  </div>
                  <div class="d-grid gap-2 container">
                    <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                  </div>
                  <div class="card-body-c pt-2 pb-2">
                    <div class="container">
                      <p class="content-c">
                        <i class="bi bi-wifi"></i> Internet 200 mega
                      </p>
                      <p class="content-c">
                        <i class="bi bi-tv-fill"></i> Digital HD
                      </p>
                      <p class="content-c">
                        <i class="bi bi-telephone-fill"></i> Fixo Ilimitado
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </div><!-- End Tab 1 Content -->
        </div>
      </div>
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
  <script>
    $(document).ready(function() {
      //Select para mostrar e esconder divs
      $('#SelectOptions').on('change', function() {
        var SelectValue = '.' + $(this).val();
        $('.DivPai .Div1').hide();
        $('.DivPai .Div2').hide();
        $('.DivPai .Div3').hide();
        $('.DivPai .Div4').hide();
        $('.DivPai .Div5').hide();
        $(SelectValue).toggle();
      });
    });
  </script>
</body>

</html>
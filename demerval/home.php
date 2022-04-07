<?php
require_once '../admin/dbconfig.php';
include "../admin/insert_form.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIT Internet - Demerval Lobão</title>
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
</head>

<body>
  <?php include "navbar.php"; ?>
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <?php
      $stmt = $DB_con->prepare('SELECT id, nome, img,link FROM banners ORDER BY id DESC');
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
                  <a href="combos-internet-streaming.php">
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
                <p class="lead">Internet + Streaming + tv + telefonia</p>
                <div class="content-services d-flex justify-content-between">
                  <a href="combos-internet-telefonia-tv.php">
                    <p class="pt-4">Conheça os planos</p>
                  </a>
                  <img class="img-fluid" src="../assets/img/icon-combos.png">
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
            <a href="../igbi.php">
              <div class="d-md-flex align-items-center justify-content-center">
                <center><img src="../assets/img/mit-igbi.jpeg" class="img-fluid"></center>
              </div>
            </a>
          </div>
        </div>
        <div class="row justify-content-center mt-2">
          <div class="col-md-2">
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
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Travamentos e lentidão na TV ou assistir videoaula no notebook.
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Utilize conexões via cabo ethernet, são mais recomendadas para usuários que desejem fazer atividades que
                requeiram uma grande taxa de transferência de dados, como videoaulas, jogar partidas online e utilizar
                serviços de filmes via streaming, como o Netflix e Amazon prime.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Por quer a internet está lenta em meu celular?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Uma das principais causas da internet lenta no celular é quando a memória cache está muito saturada.
                Isso acaba afetando todo sistema.
                É possível fazer uma limpeza de cache, seja de aplicativo por aplicativo, ou em todos ao mesmo tempo,
                usando um aplicativo específico que apaga toda cache (geralmente encontrados na PlayStore).
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Por quer a qualidade do sinal Wifi não é a mesma em toda a residência?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Muitos aparelhos causam interferência, como fornos de micro-ondas e telefones
                sem fio, e evitar obstáculos e barreiras físicas também são essenciais para melhorar a qualidade do
                sinal nos cômodos de sua residencial.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Como atualizar minhas faturas?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Desde o início de 2019, atualizar boleto vencido não é mais necessário. Nosso
                pagamento do boleto é aceito depois do vencimento, o próprio caixa ou internet banking atualiza o valor
                no momento do pagamento.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End FAQ Section -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 pt-4">
            <div class="d-md-flex align-items-center justify-content-center">
              <a href="https://mitfibra.com.br/central_assinante_web/login">
                <center><img src="../assets/img/autoatendimentomit.jpeg" class="img-fluid"></center>
              </a>
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
              <center><img src="../assets/img/mitpix.jpeg" class="img-fluid"></center>
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
                      <img src="../admin/uploads/blog/<?php // echo $row['img']; ?>" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                      <div class="card-header-b">
                        <div class="card-category-b">
                          <a href="post.php?title=<?php // echo $title; ?>" class="category-b"><?php //echo $category; ?></a>
                        </div>
                        <div class="card-title-b">
                          <h2 class="title-2">
                            <a href="post.php?title=<?php // echo $title; ?>"><?php // echo $title; ?></a>
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
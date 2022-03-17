<?php
require_once '../admin/dbconfig.php';
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
  <?php include "../components/navbar.php"; ?>
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
    <section class="section-property section-t4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap">
              <div class="title-box">
                <h2 class="title-a">O que mais a MIT oferece para você</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="oferece-carousel" class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="img-fluid" src="../assets/img/2.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="../assets/img/3.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="../assets/img/4.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="../assets/img/5.png">
            </div>
          </div>
          <div class="oferece-carousel-pagination carousel-pagination-oferece"></div>
        </div>
    </section><!-- End Oferece Section -->
    <section id="home-igbi">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="d-md-flex align-items-center justify-content-center">
              <center><img src="../assets/img/igbi.jpg" width="150"></center>
              <h2 class="title-a text-center">Parceiro oficial</h2>
              <center><img src="../assets/img/logo-mit.png" class="img-fluid"></center>
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-md-3 igbi-img text-center">
            <img src="../assets/img/enviar-receber.svg">
          </div>
          <div class="col-md-6">
            <h2 class="title-a">Uma plataforma completa que vai transformar o seu negócio através de uma nova forma de comprar: O Cashback!</h2>
            <a href="../igbi.php">
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
              <div class="title-link">
                <a href="#">Veja todas
                  <span class="bi bi-chevron-right"></span>
                </a>
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
    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t4">
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

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="../assets/img/azul.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Saúde</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">É melhor prevenir do que remediar
                          <br>concordam? 🤔</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">1 Nov. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="../assets/img/games.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Diversão</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">03 dicas de jogos para manter esse espírito de adrenalina</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">27 Out. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="../assets/img/rosa.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Saúde</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">É hora de se tocar, não deixe sua saúde para depois.</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">1 Out. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="../assets/img/diversao.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Diversão</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Fim de semana com diversão tem que ter Mit</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">17 Set. 2021</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
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
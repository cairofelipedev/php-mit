<?php 
session_start();
require_once "./classes/conexao.php";
require_once "./classes/logar.php";
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
  <link href="assets/img/logo-mit.png" rel="icon">
  <link href="assets/img/logo-mit.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php include "components/navbar.php"; ?>
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Confira nossos planos</h2>
                <p>
                  Soluções completas para você e sua casa: banda larga com ultravelocidade acompanhada com seus
                  aplicativos preferidos.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c">
              <h2 class="title-c pt-2">300 MEGAS</h2>
              <div class="row justify-content-center">
                <div class="col-5 text-center">
                  <i class="bi bi-wifi"></i> Wifi Super
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-bank2"></i> MIT Bank
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-share-fill"></i> Procotolo2
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-phone-fill"></i> App MIT
                </div>
              </div>
              <div class="d-grid gap-2 container">
                <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
              </div>
              <div class="card-body-c pt-2 pb-2">
                <div class="container">
                  <p class="content-c">
                    Assinatura Netflix + GloboPlay
                  </p>
                  <p class="content-c2">Séries originais e exclusivas, filmes, infantis, novelas e programas.</p>
                  <div class="row pb-3">
                    <div class="col-2">
                      <img class="img-fluid" src="assets/img/app-netflix-252x252.png">
                    </div>
                    <div class="col-2">
                      <img class="img-fluid" src="assets/img/app-globo-play-252x252.png">
                    </div>
                  </div>
                  <a href="#" class="link-c link-icon pt-3">Mais informações
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c">
              <h2 class="title-c pt-2">400 MEGAS</h2>
              <div class="row justify-content-center">
                <div class="col-5 text-center">
                  <i class="bi bi-wifi"></i> Wifi Super
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-bank2"></i> MIT Bank
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-share-fill"></i> Procotolo2
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-phone-fill"></i> App MIT
                </div>
              </div>
              <div class="d-grid gap-2 container">
                <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
              </div>
              <div class="card-body-c pt-2 pb-2">
                <div class="container">
                  <p class="content-c">
                    Assinatura Netflix + GloboPlay
                  </p>
                  <p class="content-c2">Séries originais e exclusivas, filmes, infantis, novelas e programas.</p>
                  <div class="row pb-3">
                    <div class="col-2">
                      <img class="img-fluid" src="assets/img/app-netflix-252x252.png">
                    </div>
                    <div class="col-2">
                      <img class="img-fluid" src="assets/img/app-globo-play-252x252.png">
                    </div>
                  </div>
                  <a href="#" class="link-c link-icon pt-3">Mais informações
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c">
              <h2 class="title-c pt-2">500 MEGAS</h2>
              <div class="row justify-content-center">
                <div class="col-5 text-center">
                  <i class="bi bi-wifi"></i> Wifi Super
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-bank2"></i> MIT Bank
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-share-fill"></i> Procotolo2
                </div>
                <div class="col-5 text-center">
                  <i class="bi bi-phone-fill"></i> App MIT
                </div>
              </div>
              <div class="d-grid gap-2 container">
                <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
              </div>
              <div class="card-body-c pt-2 pb-2">
                <div class="container">
                  <p class="content-c">
                    Assinatura Netflix + GloboPlay
                  </p>
                  <p class="content-c2">Séries originais e exclusivas, filmes, infantis, novelas e programas.</p>
                  <div class="row pb-3">
                    <div class="col-2">
                      <img class="img-fluid" src="assets/img/app-netflix-252x252.png">
                    </div>
                    <div class="col-2">
                      <img class="img-fluid" src="assets/img/app-globo-play-252x252.png">
                    </div>
                  </div>
                  <a href="#" class="link-c link-icon pt-3">Mais informações
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Oferece Section -->
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
              <img class="img-fluid" src="assets/img/1.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="assets/img/2.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="assets/img/3.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="assets/img/4.png">
            </div>
            <div class="swiper-slide">
              <img class="img-fluid" src="assets/img/5.png">
            </div>
          </div>
          <div class="oferece-carousel-pagination carousel-pagination-oferece"></div>
        </div>
    </section><!-- End Oferece Section -->
    <!-- ======= FAQ Section ======= -->
    <section class="section-property section-t4">
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Travamentos e lentidão na TV ou assistir videoaula no notebook.
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Utilize conexões via cabo ethernet, são mais recomendadas para usuários que desejem fazer atividades que
                requeiram uma grande taxa de transferência de dados, como videoaulas, jogar partidas online e utilizar
                serviços de filmes via streaming, como o Netflix e Amazon prime.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Por quer a internet está lenta em meu celular?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample">
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Por quer a qualidade do sinal Wifi não é a mesma em toda a residência?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Muitos aparelhos causam interferência, como fornos de micro-ondas e telefones
                sem fio, e evitar obstáculos e barreiras físicas também são essenciais para melhorar a qualidade do
                sinal nos cômodos de sua residencial.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Como atualizar minhas faturas?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
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
                  <img src="assets/img/azul.jpg" alt="" class="img-b img-fluid">
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
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/games.jpg" alt="" class="img-b img-fluid">
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
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/rosa.jpg" alt="" class="img-b img-fluid">
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
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/diversao.jpg" alt="" class="img-b img-fluid">
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
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <img class="img-fluid" src="assets/img/logo-mit.png">
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                MIT Internet que transforma!💙💚
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Contato </span> (86)3220-2386
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">MIT INTERNET</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Página Principal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Para você</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Empresas</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Produtos</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Serviços</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Contato</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Cidades</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Teresina</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Curralinhos</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Monsenhor Gil</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Lagoa do Piauí</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Demerval Lobão</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Quem Somos</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contato</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-whatsapp" aria-hidden="true"></i>
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
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy;
              <span class="color-a">MIT Internet</span> Todos os direitos reservados.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/login-register.js" type="text/javascript"></script>

</body>

</html>
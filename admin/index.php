<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location:../index.php");
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Painel Administrativo | Mit Internet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo-mit.png" rel="icon">
  <link href="../assets/img/logo-mit.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Painel Administrativo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Painel Administrativo</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Planos Card -->
            <div class="col-xxl-3 col-md-6">
              <a href="painel-planos.php">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Planos</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-wifi"></i>
                      </div>
                      <div class="ps-3">
                        <h6>
                          <?php
                          $sth = $DB_con->prepare("SELECT count(*) as total from plans");
                          $sth->execute();
                          print_r($sth->fetchColumn());
                          ?>
                        </h6>
                      </div>
                    </div>
                  </div>

                </div>
              </a>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-6">
              <a href="painel-banners.php">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Banners</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fas fa-images"></i>
                      </div>
                      <div class="ps-3">
                        <h6>
                          <?php
                          $sth = $DB_con->prepare("SELECT count(*) as total from banners");
                          $sth->execute();
                          print_r($sth->fetchColumn());
                          ?>
                        </h6>
                      </div>
                    </div>
                  </div>

                </div>
              </a>
            </div>

            <div class="col-xxl-3 col-md-6">
              <a href="painel-leads.php">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Leads</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fas fa-align-justify"></i>
                      </div>
                      <div class="ps-3">
                        <h6>
                          <?php
                          $sth = $DB_con->prepare("SELECT count(*) as total from leads");
                          $sth->execute();
                          print_r($sth->fetchColumn());
                          ?>
                        </h6>
                      </div>
                    </div>
                  </div>

                </div>
              </a>
            </div>

            <!-- Customers Card -->
            <div class="col-xxl-3 col-md-6">
              <a href="painel-users.php">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Usuários</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>
                          <?php
                          $sth = $DB_con->prepare("SELECT count(*) as total from users");
                          $sth->execute();
                          print_r($sth->fetchColumn());
                          ?>
                        </h6>
                      </div>
                    </div>

                  </div>
              </a>
            </div>

          </div><!-- End Customers Card -->
        </div>
        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Postagens</span></h5>

            <div class="news">
              <?php
              $stmt = $DB_con->prepare('SELECT id, title, img, category FROM posts ORDER BY id DESC');
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);
              ?>
                  <div class="post-item clearfix">
                    <img src="./uploads/blog/<?php echo $row['img']; ?>" alt="">
                    <h4><a href="#"><?php echo $title; ?></a></h4>
                  </div>
              <?php
                }
              }
              ?>
            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->
      </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
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
<style>
  #box {
    display: none;
    background-color: blueviolet;
    color: white;
    width: 100px;
    height: 100px;
  }

  #box2 {
    background-color: blue;
    color: white;
    width: 100px;
    height: 100px;
  }
</style>

<body>
  <?php include "navbar.php"; ?>
  <main id="main">
    <section id="plans-internet" class="plans-internet pt-4">
      <div class="container" data-aos="fade-up">
        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12">
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Internet</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Netflix</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">+ Disney</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab4">Amazon</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <div class="row">
                  <?php
                  $stmt = $DB_con->prepare('SELECT * FROM plans where city="monsenhor" and type="1" ORDER BY id DESC');
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                  ?>
                      <div class="col-md-3">
                        <div class="card-box-c">
                          <div class="container">
                            <h2 class="title-c pt-2" style="padding-bottom:50px;"><?php echo $speed; ?> Mega</h2>
                            <h3>R$ <?php echo $price; ?> </h3>
                            <p class="text-black"><?php echo $description; ?></p>
                          </div>
                          <div class="d-grid gap-2 container">
                            <a href="<?php echo $link; ?>">
                              <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                            </a>
                          </div>
                          <div class="card-body-c pt-2 pb-2">
                            <div class="container">
                              <p class="content-c">
                                <?php echo $footer_text1; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text2; ?>
                              </p>
                              <div class="d-flex">
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon1']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon2']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon3']; ?>">
                                </div>

                              </div>
                              <p class="content-c pt-2">
                                <?php echo $footer_text3; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text4; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                    }
                  }
                  ?>
                </div>
              </div><!-- End Tab 1 Content -->
              <div class="tab-pane fade show" id="tab2">
                <div class="row">
                  <?php
                  $stmt = $DB_con->prepare('SELECT * FROM plans where city="monsenhor" and channels="netflix" and type="4" ORDER BY id DESC');
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                  ?>
                      <div class="col-md-3 pb-2">
                        <div class="card-box-c">
                          <div class="container">
                            <h2 class="title-c pt-2"><?php echo $speed; ?> Mega</h2>
                            <p class="text-black"><?php echo $description; ?></p>
                            <div style="padding-bottom:50px;">
                              <div>
                                <input type="radio" id="hide<?php echo $id; ?>" name="<?php echo $id; ?>" value="hide<?php echo $id; ?>" checked />
                                <label for="hide" class="text-black" style="font-size:14px;">Netflix Padrão</label>
                                <p style="font-size:14px;color:#3f3f3f;">incluso 2 telas simultâneas HD</p>
                              </div>
                              <div>
                                <input type="radio" id="show<?php echo $id; ?>" name="<?php echo $id; ?>" value="show<?php echo $id; ?>" />
                                <label for="show" class="text-black" style="font-size:14px;">Netflix Premium</label>
                                <p style="font-size:14px;color:#3f3f3f;">incluso 4 telas simultâneas HD</p>
                              </div>
                            </div>
                            <div id="box<?php echo $id; ?>" style="display:none;">
                              <h3>R$ <?php echo $price_display; ?></h3>
                            </div>
                            <div id="box2<?php echo $id; ?>">
                              <h3>R$ <?php echo $price; ?></h3>
                            </div>
                          </div>
                          <div class="d-grid gap-2 container">
                            <a href="<?php echo $link; ?>">
                              <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                            </a>
                          </div>
                          <div class="card-body-c pt-2 pb-2">
                            <div class="container">
                              <p class="content-c">
                                <?php echo $footer_text1; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text2; ?>
                              </p>
                              <div class="d-flex">
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon1']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon2']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon3']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon4']; ?>">
                                </div>
                              </div>
                              <p class="content-c pt-2">
                                <?php echo $footer_text3; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text4; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script>
                        const box<?php echo $id; ?> = document.getElementById('box<?php echo $id; ?>');

                        function handleRadioClick<?php echo $id; ?>() {
                          if (document.getElementById('show<?php echo $id; ?>').checked) {
                            box<?php echo $id; ?>.style.display = 'block';
                            box2<?php echo $id; ?>.style.display = 'none';
                          } else {
                            box<?php echo $id; ?>.style.display = 'none';
                            box2<?php echo $id; ?>.style.display = 'block';
                          }
                        }

                        const radioButtons<?php echo $id; ?> = document.querySelectorAll('input[name="<?php echo $id; ?>"]');
                        radioButtons<?php echo $id; ?>.forEach(radio => {
                          radio.addEventListener('click', handleRadioClick<?php echo $id; ?>);
                        });
                      </script>
                  <?php
                    }
                  }
                  ?>
                </div>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab3">

                <div class="row">
                  <?php
                  $stmt = $DB_con->prepare('SELECT * FROM plans where city="monsenhor" and channels="disney" and type="4" ORDER BY id DESC');
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                  ?>
                      <div class="col-md-3">
                        <div class="card-box-c">
                          <div class="container">
                            <h2 class="title-c pt-2"><?php echo $speed; ?> Mega</h2>
                            <p class="text-black" style="padding-bottom:50px;"><?php echo $description; ?></p>
                            <h3>R$ <?php echo $price; ?> </h3>
                          </div>
                          <div class="d-grid gap-2 container">
                            <a href="<?php echo $link; ?>">
                              <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                            </a>
                          </div>
                          <div class="card-body-c pt-2 pb-2">
                            <div class="container">
                              <p class="content-c">
                                <?php echo $footer_text1; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text2; ?>
                              </p>
                              <div class="d-flex">
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon1']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon2']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon3']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon4']; ?>">
                                </div>
                              </div>
                              <p class="content-c pt-2">
                                <?php echo $footer_text3; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text4; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                    }
                  }
                  ?>
                </div>
              </div><!-- End Tab 2 Content -->
              <div class="tab-pane fade show" id="tab4">

                <div class="row">
                  <?php
                  $stmt = $DB_con->prepare('SELECT * FROM plans where city="monsenhor" and channels="amazon" and type="4" ORDER BY id DESC');
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                  ?>
                      <div class="col-md-3">
                        <div class="card-box-c">
                          <div class="container">
                            <h2 class="title-c pt-2"><?php echo $speed; ?> Mega</h2>
                            <p class="text-black" style="padding-bottom:50px;"><?php echo $description; ?></p>
                            <h3>R$ <?php echo $price; ?> </h3>
                          </div>
                          <div class="d-grid gap-2 container">
                            <a href="<?php echo $link; ?>">
                              <button class="btn btn-plan" type="button">FALE COM UM CONSULTOR</button>
                            </a>
                          </div>
                          <div class="card-body-c pt-2 pb-2">
                            <div class="container">
                              <p class="content-c">
                                <?php echo $footer_text1; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text2; ?>
                              </p>
                              <div class="d-flex">
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon1']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon2']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon3']; ?>">
                                </div>
                                <div class="col-2 p-2">
                                  <img class="img-fluid" src="../admin/uploads/icons/<?php echo $row['footer_icon4']; ?>">
                                </div>
                              </div>
                              <p class="content-c pt-2">
                                <?php echo $footer_text3; ?>
                              </p>
                              <p class="text-black" style="font-size:14px;">
                                <?php echo $footer_text4; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                    }
                  }
                  ?>
                </div>
              </div><!-- End Tab 2 Content -->
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
    const box = document.getElementById('box');

    function handleRadioClick() {
      if (document.getElementById('show').checked) {
        box.style.display = 'block';
        box2.style.display = 'none';
      } else {
        box.style.display = 'none';
        box2.style.display = 'block';
      }
    }

    const radioButtons = document.querySelectorAll('input[name="example"]');
    radioButtons.forEach(radio => {
      radio.addEventListener('click', handleRadioClick);
    });
  </script>
</body>

</html>
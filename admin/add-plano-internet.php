<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;
error_reporting(~E_ALL);

if (isset($_POST['btnsave'])) {
  $speed = strtolower($_POST['speed']);
  $price = $_POST['price'];
  $city = $_POST['city'];
  $type = $_POST['type'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $footer_text1 = $_POST['footer_text1'];
  $footer_text2 = $_POST['footer_text2'];
  $footer_text3 = $_POST['footer_text3'];
  $footer_text4 = $_POST['footer_text4'];

  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];

  $imgFile2 = $_FILES['user_image2']['name'];
  $tmp_dir2 = $_FILES['user_image2']['tmp_name'];
  $imgSize2 = $_FILES['user_image2']['size'];

  $imgFile3 = $_FILES['user_image3']['name'];
  $tmp_dir3 = $_FILES['user_image3']['tmp_name'];
  $imgSize3 = $_FILES['user_image3']['size'];

  $imgFile4 = $_FILES['user_image4']['name'];
  $tmp_dir4 = $_FILES['user_image4']['tmp_name'];
  $imgSize4 = $_FILES['user_image4']['size'];



  if (empty($speed)) {
    $errMSG = "Por favor insira a velocidade do plano";
  }

  else {
    $upload_dir = 'uploads/icons/'; // upload directory

    $imgExt =  strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $imgExt2 =  strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION));
    $imgExt3 =  strtolower(pathinfo($imgFile3, PATHINFO_EXTENSION));
    $imgExt4 =  strtolower(pathinfo($imgFile4, PATHINFO_EXTENSION));

    $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
    // rename uploading image
    $city2 = preg_replace("/\s+/", "", $city);

    $userpic = "icon1-" . $city2 . "." . $imgExt;
    $userpic2 = "icon2-" . $city2 . "." . $imgExt2;
    $userpic3 = "icon3-" . $city2 . "." . $imgExt3;
    $userpic4 = "icon4-" . $city2 . "." . $imgExt4;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir . $userpic);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
    if (in_array($imgExt2, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize2 < 5000000) {
        move_uploaded_file($tmp_dir2, $upload_dir . $userpic2);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
    if (in_array($imgExt3, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize3 < 5000000) {
        move_uploaded_file($tmp_dir3, $upload_dir . $userpic3);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
    if (in_array($imgExt4, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize4 < 5000000) {
        move_uploaded_file($tmp_dir4, $upload_dir . $userpic4);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
  }

  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('INSERT INTO plans (speed,price,city, description, type,footer_text1, footer_text2, footer_text3, footer_text4, footer_icon1, footer_icon2, footer_icon2, footer_icon3, footer_icon4) VALUES(:uspeed,:uprice,:ucity,:udescription,:utype,:ufooter_text1,:ufooter_text2,:ufooter_text3,:ufooter_text4,:upic,:upic2,:upic3,:upic4)');
    $stmt->bindParam(':uspeed', $speed);
    $stmt->bindParam(':uprice', $price);
    $stmt->bindParam(':ucity',  $city);
    $stmt->bindParam(':udescription',  $description);
    $stmt->bindParam(':utype', $type);
    $stmt->bindParam(':ufooter_text1',  $footer_text1);
    $stmt->bindParam(':ufooter_text2',  $footer_text2);
    $stmt->bindParam(':ufooter_text3',  $footer_text3);
    $stmt->bindParam(':ufooter_text4',  $footer_text4);
    $stmt->bindParam(':upic', $userpic);
    $stmt->bindParam(':upic2', $userpic2);
    $stmt->bindParam(':upic3', $userpic3);
    $stmt->bindParam(':upic4', $userpic4);
    if ($stmt->execute()) {
      header("Location: painel-planos.php");
    } else {
      $errMSG = "Erro..";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adicionar Plano / Painel Administrativo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo-mit.png" rel="icon">
  <link href="../assets/img/logo-mit.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Adicionar Plano</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="painel-planos.php">Painel Planos</a></li>
          <li class="breadcrumb-item active">Adicionar Plano</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Informações do Plano</h5>

              <!-- Vertical Form -->
              <form method="POST" class="row g-3">
                <div class="col-12">
                  <label class="form-label">Velocidade</label>
                  <input value="<?php echo $speed; ?>" name="speed" type="text" placeholder="Digite a velocidade do plano" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Valor</label>
                  <input value="<?php echo $price; ?>" name="price" type="text" placeholder="Digite o valor do plano" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Descrição</label>
                  <input value="<?php echo $description; ?>" name="description" type="text" placeholder="Digite descrição para o plano" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Cidade</label>
                  <select  name="city" class="form-select">
                    <option value="teresina">TERESINA</option>
                    <option value="demerval">DEMERVAL</option>
                    <option value="lagoa">LAGOA PI</option>
                    <option value="monsenhor">MONSENHOR</option>
                    <option value="curralinhos">CURRALINHOS</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Tipo do Plano</label>
                  <select name="type" class="form-select">
                    <option value="1">Internet</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" name="btnsave" class="btn btn-primary">Adicionar</button>
                  <button type="reset" class="btn btn-secondary">Resetar</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
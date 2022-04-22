<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;
error_reporting(~E_ALL); // avoid notice

if (isset($_POST['btnsave'])) {
  $title = $_POST['title'];
  $subtitle = $_POST['subtitle'];
  $category = $_POST['category'];
  $category_2 = $_POST['category_2'];
  $link = $_POST['link'];
  $link_2 = $_POST['link_2'];
  $status = $_POST['status'];
  $text_1 = $_POST['text_1'];
  $text_2 = $_POST['text_2'];
  $text_3 = $_POST['text_3'];

  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];

  $imgFile2 = $_FILES['user_image2']['name'];
  $tmp_dir2 = $_FILES['user_image2']['tmp_name'];
  $imgSize2 = $_FILES['user_image2']['size'];


  if (empty($title)) {
    $errMSG = "Por favor, insira o titulo do post";
  } else {
    $upload_dir = 'uploads/blog/'; // upload directory

    $imgExt =  strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $imgExt2 =  strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION));

    $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
    // rename uploading image
    $title2 = preg_replace("/\s+/", "", $title);
    $userpic = "post-" . $title2 . "." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir . $userpic);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
    // allow valid image file formats
    if (in_array($imgExt2, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize2 < 5000000) {
        move_uploaded_file($tmp_dir2, $upload_dir . $userpic2);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
  }
  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('INSERT INTO posts (title,subtitle,category,category_2,link,link_2, status, text_1, text_2, text_3,img,img2) VALUES(:utitle,:usubtitle,:ucategory,:ucategory_2,:ulink,:ulink_2,:ustatus,:utext_1,:utext_2,:utext_3,:upic,:upic2)');
    $stmt->bindParam(':utitle', $title);
    $stmt->bindParam(':usubtitle', $subtitle);
    $stmt->bindParam(':ucategory', $category);
    $stmt->bindParam(':ucategory_2', $category_2);
    $stmt->bindParam(':ulink', $link);
    $stmt->bindParam(':ulink_2', $link_2);
    $stmt->bindParam(':utext_1', $text_1);
    $stmt->bindParam(':utext_2', $text_2);
    $stmt->bindParam(':utext_3', $text_3);
    $stmt->bindParam(':upic', $userpic);
    $stmt->bindParam(':upic2', $userpic2);
    $stmt->bindParam(':ustatus', $status);

    if ($stmt->execute()) {
      echo ("<script>window.location = 'painel-blog.php';</script>");
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

  <title>Adicionar Blog / Painel Administrativo</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.2/css/fileinput.min.css" integrity="sha512-optaW0zX5RBCFqhNsmzGuHHsD/tdnCcWl8B0OToMY01JVeEcphylF9gCCxpi4BQh0LY47BkJLyNC1J7M5MJMQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Adicionar Postagem</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="painel-post.php">Painel Post</a></li>
          <li class="breadcrumb-item active">Adicionar Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Informações do Post</h5>
              <?php
              if (isset($errMSG)) {
              ?>
                <div class="alert alert-danger">
                  <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
              <?php
              }
              ?>
              <!-- Vertical Form -->
              <form method="POST" enctype="multipart/form-data" class="row">
                <div class="col-md-6">
                  <div class="col-12">
                    <label class="form-label">Titulo do Post</label>
                    <input value="<?php echo $title; ?>" name="title" type="text" placeholder="Titulo do Post" class="form-control">
                  </div>
                  <div class="col-12 pb-3 pt-2">
                    <label class="form-label">Subtitulo do Post</label>
                    <input value="<?php echo $subtitle; ?>" name="subtitle" type="text" placeholder="Titulo do Post" class="form-control">
                  </div>
                  <div class="row">
                    <div class="col-6 pb-3 pt-2">
                      <label class="form-label">Categoria 1</label>
                      <input value="<?php echo $category; ?>" name="category" type="text" placeholder="Categoria 1" class="form-control">
                    </div>
                    <div class="col-6 pb-3 pt-2">
                      <label class="form-label">Categoria 2</label>
                      <input value="<?php echo $category_2; ?>" name="category_2" type="text" placeholder="Titulo do Post" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-12 pb-3">
                    <div class="form-floating">
                      <textarea type="text" class="form-control" value="<?php echo $text_1; ?>" name="text_1" placeholder="Texto 1" style="height: 100px;"></textarea>
                      <label for="">Texto 1</label>
                    </div>
                  </div>
                  <div class="col-md-12 pb-3">
                    <div class="form-floating">
                      <textarea type="text" class="form-control" value="<?php echo $text_2; ?>" name="text_2" placeholder="Texto 2" style="height: 100px;"></textarea>
                      <label for="">Texto 2</label>
                    </div>
                  </div>
                  <div class="col-md-12 pb-3">
                    <div class="form-floating">
                      <textarea type="text" class="form-control" value="<?php echo $text_3; ?>" name="text_3" placeholder="Texto 2" style="height: 100px;"></textarea>
                      <label for="">Texto 3</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label pt-3">Status</label>
                    <select name="status" class="form-select">
                      <option value="1">Ativado</option>
                      <option value="2">Desativado</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="form-label pt-3">Link</label>
                    <input value="<?php echo $link; ?>" name="link" type="text" placeholder="Link" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label pt-3">Link</label>
                    <input value="<?php echo $link_2; ?>" name="link_2" type="text" placeholder="Link 2" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <h6 class="text-bold text-center">
                    Imagens
                  </h6>
                  <div class="col-12 pb-2">
                    <div class="file-loading">
                      <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image" accept="image/*">
                    </div>
                  </div>
                  <div class="col-12 pb-2">
                    <div class="file-loading">
                      <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image2" accept="image/*">
                    </div>
                  </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.2/js/fileinput.min.js" integrity="sha512-OgkQrY08KbdmZRLKrsBkVCv105YJz+HdwKACjXqwL+r3mVZBwl20vsQqpWPdRnfoxJZePgaahK9G62SrY9hR7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
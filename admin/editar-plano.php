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

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
  $id = $_GET['edit_id'];
  $stmt_edit = $DB_con->prepare('SELECT * FROM plans WHERE id =:uid');
  $stmt_edit->execute(array(':uid' => $id));
  $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
  extract($edit_row);
} else {
  header("Location: painel-planos.php");
}

if (isset($_GET['delete_img'])) {
  $id = $_GET['delete_img'];
  $stmt_delete = $DB_con->prepare('UPDATE plans SET footer_icon1 = "" WHERE id =:uid');
  $stmt_delete->bindParam(':uid', $_GET['delete_img']);
  $stmt_delete->execute();

  header("Location: editar-plano.php?edit_id=$id");
}

if (isset($_GET['delete_img2'])) {
  $id = $_GET['delete_img2'];
  $stmt_delete = $DB_con->prepare('UPDATE plans SET footer_icon2 = "" WHERE id =:uid');
  $stmt_delete->bindParam(':uid', $_GET['delete_img2']);
  $stmt_delete->execute();

  header("Location: editar-plano.php?edit_id=$id");
}

if (isset($_GET['delete_img3'])) {
  $id = $_GET['delete_img3'];
  $stmt_delete = $DB_con->prepare('UPDATE plans SET footer_icon3 = "" WHERE id =:uid');
  $stmt_delete->bindParam(':uid', $_GET['delete_img3']);
  $stmt_delete->execute();

  header("Location: editar-plano.php?edit_id=$id");
}

if (isset($_GET['delete_img4'])) {
  $id = $_GET['delete_img4'];
  $stmt_delete = $DB_con->prepare('UPDATE plans SET footer_icon4 = "" WHERE id =:uid');
  $stmt_delete->bindParam(':uid', $_GET['delete_img4']);
  $stmt_delete->execute();

  header("Location: editar-plano.php?edit_id=$id");
}

if (isset($_POST['btnsave'])) {
  $speed = strtolower($_POST['speed']);
  $price = $_POST['price'];
  $price_display = $_POST['price_display'];
  $city = $_POST['city'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $footer_text1 = $_POST['footer_text1'];
  $footer_text2 = $_POST['footer_text2'];
  $footer_text3 = $_POST['footer_text3'];
  $footer_text4 = $_POST['footer_text4'];
  $destak = $_POST['destak'];

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


  if ($imgFile) {
    $upload_dir = 'uploads/icons/'; // upload directory	
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    $city2 = preg_replace("/\s+/", "", $city);
    $city3 = substr($city2, 0, -1);
    $userpic = $city3 . "icon1" . "." . $imgExt;
    if (in_array($imgExt, $valid_extensions)) {
      if ($imgSize < 5000000) {
        unlink($upload_dir . $edit_row['footer_icon1']);
        move_uploaded_file($tmp_dir, $upload_dir . $userpic);
      } else {
        $errMSG = "Imagem grande demais, max 5MB";
      }
    } else {
      $errMSG = "Imagens apenas nos formatos JPG, JPEG, PNG & GIF files are allowed.";
    }
  } else {
    // if no image selected the old image remain as it is.
    $userpic = $edit_row['footer_icon1']; // old image from database
  }

  if ($imgFile2) {
    $upload_dir = 'uploads/icons/'; // upload directory	
    $imgExt2 = strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION)); // get image extension
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    $city2 = preg_replace("/\s+/", "", $city);
    $city3 = substr($city2, 0, -1);
    $userpic2 = $city3 . "icon2" . "." . $imgExt2;
    if (in_array($imgExt2, $valid_extensions)) {
      if ($imgSize2 < 5000000) {
        unlink($upload_dir . $edit_row['footer_icon2']);
        move_uploaded_file($tmp_dir2, $upload_dir . $userpic2);
      } else {
        $errMSG = "Imagem grande demais, max 5MB";
      }
    } else {
      $errMSG = "Imagens apenas nos formatos JPG, JPEG, PNG & GIF files are allowed.";
    }
  } else {
    // if no image selected the old image remain as it is.
    $userpic2 = $edit_row['footer_icon2']; // old image from database
  }

  if ($imgFile3) {
    $upload_dir = 'uploads/icons/'; // upload directory	
    $imgExt3 = strtolower(pathinfo($imgFile3, PATHINFO_EXTENSION)); // get image extension
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    $city2 = preg_replace("/\s+/", "", $city);
    $city3 = substr($city2, 0, -1);
    $userpic3 = $city3 . "icon3" . "." . $imgExt3;
    if (in_array($imgExt3, $valid_extensions)) {
      if ($imgSize3 < 5000000) {
        unlink($upload_dir . $edit_row['footer_icon3']);
        move_uploaded_file($tmp_dir3, $upload_dir . $userpic3);
      } else {
        $errMSG = "Imagem grande demais, max 5MB";
      }
    } else {
      $errMSG = "Imagens apenas nos formatos JPG, JPEG, PNG & GIF files are allowed.";
    }
  } else {
    // if no image selected the old image remain as it is.
    $userpic3 = $edit_row['footer_icon3']; // old image from database
  }

  if ($imgFile4) {
    $upload_dir = 'uploads/icons/'; // upload directory	
    $imgExt4 = strtolower(pathinfo($imgFile4, PATHINFO_EXTENSION)); // get image extension
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    $city2 = preg_replace("/\s+/", "", $city);
    $city3 = substr($city2, 0, -1);
    $userpic4 = $city4 . "icon4" . "." . $imgExt4;
    if (in_array($imgExt4, $valid_extensions)) {
      if ($imgSize4 < 5000000) {
        unlink($upload_dir . $edit_row['footer_icon2']);
        move_uploaded_file($tmp_dir4, $upload_dir . $userpic4);
      } else {
        $errMSG = "Imagem grande demais, max 5MB";
      }
    } else {
      $errMSG = "Imagens apenas nos formatos JPG, JPEG, PNG & GIF files are allowed.";
    }
  } else {
    // if no image selected the old image remain as it is.
    $userpic4 = $edit_row['footer_icon4']; // old image from database
  }

  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('UPDATE plans SET 
    speed=:uspeed,
    price=:uprice,
    price_display=:uprice_display,
    city=:ucity,
    description=:udescription,
    footer_text1=:ufooter_text1,
    footer_text2=:ufooter_text2,
    footer_text3=:ufooter_text3,
    footer_text4=:ufooter_text4,
    footer_icon1=:upic,
    footer_icon2=:upic2,
    footer_icon3=:upic3,
    footer_icon4=:upic4,
    destak=:udestak
    WHERE id=:uid');
    $stmt->bindParam(':uspeed', $speed);
    $stmt->bindParam(':uprice', $price);
    $stmt->bindParam(':uprice_display', $price_display);
    $stmt->bindParam(':ucity',  $city);
    $stmt->bindParam(':udescription',  $description);
    $stmt->bindParam(':ufooter_text1',  $footer_text1);
    $stmt->bindParam(':ufooter_text2',  $footer_text2);
    $stmt->bindParam(':ufooter_text3',  $footer_text3);
    $stmt->bindParam(':ufooter_text4',  $footer_text4);
    $stmt->bindParam(':udestak',  $destak);
    $stmt->bindParam(':upic', $userpic);
    $stmt->bindParam(':upic2', $userpic2);
    $stmt->bindParam(':upic3', $userpic3);
    $stmt->bindParam(':upic4', $userpic4);
    $stmt->bindParam(':uid', $id);

    if ($stmt->execute()) {
      header("Location: painel-planos.php");
    } else {
      $errMSG = "Erro..";
    }
  }
}
$type_plan = $_GET['type'];
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.2/css/fileinput.min.css" integrity="sha512-optaW0zX5RBCFqhNsmzGuHHsD/tdnCcWl8B0OToMY01JVeEcphylF9gCCxpi4BQh0LY47BkJLyNC1J7M5MJMQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
.file-drop-zone {
  min-height: 0px!important;
}
.file-drop-zone-title {
  padding:0px!important;
}
.krajee-default.file-preview-frame {
  width: 100%!important;
}

.krajee-default.file-preview-frame .kv-file-content {
  width: 100%!important;
}
</style>
<body>

  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Editar Plano</h1>
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
              <form method="POST" enctype="multipart/form-data" class="row g-3">
                <div class="row">
                  <div class="col-md-6">
                    <div class="col-12">
                      <label class="form-label">Velocidade</label>
                      <input value="<?php echo $speed; ?>" name="speed" type="text" placeholder="Digite a velocidade do plano" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Valor</label>
                      <input value="<?php echo $price; ?>" name="price" type="text" placeholder="Digite o valor do plano" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Descrição</label>
                      <input value="<?php echo $description; ?>" name="description" type="text" placeholder="Descrição no plano" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Cidade</label>
                      <select name="city" class="form-select">
                        <option value="<?php echo $city; ?>">
                          <?php echo $city; ?> (selecionado)
                        </option>
                        <option value="teresina">TERESINA</option>
                        <option value="demerval">DEMERVAL</option>
                        <option value="lagoa">LAGOA PI</option>
                        <option value="monsenhor">MONSENHOR</option>
                        <option value="curralinhos">CURRALINHOS</option>
                      </select>
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Rodapé Texto 1</label>
                      <input value="<?php echo $footer_text1; ?>" name="footer_text1" type="text" placeholder="Texto 1 do Rodapé" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Rodapé Texto 2</label>
                      <input value="<?php echo $footer_text2; ?>" name="footer_text2" type="text" placeholder="Texto 2 do Rodapé" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Rodapé Texto 3</label>
                      <input value="<?php echo $footer_text3; ?>" name="footer_text3" type="text" placeholder="Texto 3 do Rodapé" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Rodapé Texto 4</label>
                      <input value="<?php echo $footer_text4; ?>" name="footer_text4" type="text" placeholder="Texto 4 do Rodapé" class="form-control">
                    </div>
                    <div class="col-12 pt-2">
                      <label class="form-label">Cidade</label>
                      <select name="destak" class="form-select">
                        <option value="<?php echo $destak; ?>">
                          <?php 
                           if ($destak == 's') {
                          echo "plano destacado"; 
                           } else {
                            echo "sem destaque";
                           }?>
                        </option>
                        <option value="s">destaque</option>
                        <option value="n">sem destaque</option>
                      </select>
                    </div>
                    <?php if ($type_plan == 2) { ?>
                      <div class="col-12 pt-2">
                        <label class="form-label">TV</label>
                        <input value="<?php echo $tv; ?>" name="tv" type="text" placeholder="TV" class="form-control">
                      </div>
                      <div class="col-12 pt-2">
                        <label class="form-label">Quantidade de Canais</label>
                        <input value="<?php echo $channels; ?>" name="channels" type="text" placeholder="Quantidade de canais" class="form-control">
                      </div>
                      <div class="col-12 pt-2">
                        <label class="form-label">Preço tela adicional</label>
                        <input value="<?php echo $price_display; ?>" name="price_display" type="text" placeholder="Preço tela adicional" class="form-control">
                      </div>
                    <?php } ?>
                    <?php if ($type_plan == 4) { ?>
                      <div class="col-12 pt-2">
                        <label class="form-label">Streaming</label>
                        <input value="<?php echo $channels; ?>" name="channels" type="text" placeholder="Streaming" class="form-control">
                      </div>
                      <div class="col-12 pt-2">
                        <label class="form-label">Preço 2 (com mais tela)</label>
                        <input value="<?php echo $price_display; ?>" name="price_display" type="text" placeholder="Quantidade de telas" class="form-control">
                      </div>
                    <?php } ?>
                  </div>
                  <div class="col-md-6">
                    <h5 class="card-title">Ícones</h5>
                    <div class="row">
                      <div class="col-md-2 pb-2">
                        <img src="./uploads/icons/<?php echo $footer_icon1; ?>" onerror="this.src='./assets/img/sem-imagem-10.jpg'" class="img-fluid rounded pb-2">
                        <a href="?delete_img=<?php echo $id; ?>">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </div>
                      <div class="col-md-4 pb-2">
                        <div class="file-loading">
                          <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image" accept="image/*">
                        </div>
                      </div>
                      <div class="col-md-2 pb-2">
                        <img src="./uploads/icons/<?php echo $footer_icon2; ?>" onerror="this.src='./assets/img/sem-imagem-10.jpg'" class="img-fluid rounded pb-2">
                        <a href="?delete_img2=<?php echo $id; ?>">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </div>
                      <div class="col-md-4 pb-2">
                        <div class="file-loading">
                          <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image2" accept="image/*">
                        </div>
                      </div>
                      <div class="col-md-2 pb-2">
                        <img src="./uploads/icons/<?php echo $footer_icon3; ?>" onerror="this.src='./assets/img/sem-imagem-10.jpg'" class="img-fluid rounded pb-2">
                        <a href="?delete_img3=<?php echo $id; ?>">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </div>
                      <div class="col-md-4 pb-2">
                        <div class="file-loading">
                          <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image3" accept="image/*">
                        </div>
                      </div>
                      <div class="col-md-2 pb-2">
                        <img src="./uploads/icons/<?php echo $footer_icon4; ?>" onerror="this.src='./assets/img/sem-imagem-10.jpg'" class="img-fluid rounded pb-2">
                        <a href="?delete_img4=<?php echo $id; ?>">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </div>
                      <div class="col-md-4 pb-2">
                        <div class="file-loading">
                          <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image4" accept="image/*">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-left pt-2">
                    <button type="submit" name="btnsave" class="btn btn-primary">Editar</button>
                  </div>
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
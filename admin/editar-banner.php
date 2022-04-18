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
    $stmt_edit = $DB_con->prepare('SELECT * FROM banners WHERE id =:uid');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
} else {
    header("Location: painel-banners.php");
}

if (isset($_POST['btnsave'])) {
    $nome = $_POST['nome'];
    $link = $_POST['link'];

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if ($imgFile) {
        $upload_dir = 'uploads/banners/'; // upload directory	
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $nome2 = preg_replace("/\s+/", "", $nome);
        $nome3 = substr($nome2, 0, -1);
        $userpic = $nome3 . "edit" . "." . $imgExt;
        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                unlink($upload_dir . $edit_row['img']);
                move_uploaded_file($tmp_dir, $upload_dir . $userpic);
            } else {
                $errMSG = "Imagem grande demais, max 5MB";
            }
        } else {
            $errMSG = "Imagens apenas nos formatos JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        // if no image selected the old image remain as it is.
        $userpic = $edit_row['img']; // old image from database
    }

    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('UPDATE banners
        SET 
        nome=:unome,
        link=:ulink,
        img=:upic
        WHERE id=:uid');

        $stmt->bindParam(':unome', $nome);
        $stmt->bindParam(':ulink', $link);
        $stmt->bindParam(':upic', $userpic);
        $stmt->bindParam(':uid', $id);

        if ($stmt->execute()) {
            echo ("<script>window.location = 'painel-banners.php';</script>");
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

    <title>Editar Banner / Painel Administrativo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/icon-semfundo.png" rel="icon">
    <link href="../assets/img/icon-semfundo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
            <h1>Editar Banner</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="painel-controle.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="painel-banners.php">Painel Banners</a></li>
                    <li class="breadcrumb-item active">Editar Banner</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12 justify-content-center">
                    <div class="card">
                        <div class="card-body">
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
                                <div class="col-md-4">
                                    <h5 class="card-title">Informações</h5>
                                    <div class="row">
                                        <div class="pb-3">
                                            <div class="form-floating pb-3">
                                                <input type="text" class="form-control" value="<?php echo $nome; ?>" name="nome" placeholder="Nome do Banner">
                                                <label for="">Nome do Banner</label>
                                            </div>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="<?php echo $link; ?>" name="link" placeholder="Link do banner">
                                                <label for="">Link</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">Imagens</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="./uploads/banners/<?php echo $img; ?>" onerror="this.src='./assets/img/semperfil.png'" class="img-fluid rounded">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="file-loading">
                                                <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-2">
                                    <button type="submit" name="btnsave" class="btn btn-primary">Editar</button>
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
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
  header("Location: painel-servicos.php");
}

if (isset($_POST['btnsave'])) {
  $speed = strtolower($_POST['speed']);
  $price = $_POST['price'];
  $city = $_POST['city'];


  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('UPDATE plans SET 
    speed=:uspeed,
    price=:uprice,
    city=:ucity
    WHERE id=:uid');
    $stmt->bindParam(':uspeed', $speed);
    $stmt->bindParam(':uprice', $price);
    $stmt->bindParam(':ucity',  $city);
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
        <div class="col-lg-6">

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
                <?php if ($type_plan == 2) { ?>
                  <div class="col-12">
                    <label class="form-label">TV</label>
                    <input value="<?php echo $tv; ?>" name="tv" type="text" placeholder="TV" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Quantidade de Canais</label>
                    <input value="<?php echo $channels; ?>" name="channels" type="text" placeholder="Quantidade de canais" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Preço tela adicional</label>
                    <input value="<?php echo $display_price; ?>" name="display_price" type="text" placeholder="Preço tela adicional" class="form-control">
                  </div>
                <?php } ?>
                <?php if ($type_plan == 4) { ?>
                  <div class="col-12">
                    <label class="form-label">Streaming</label>
                    <input value="<?php echo $channels; ?>" name="channels" type="text" placeholder="Streaming" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Quantidade de Telas</label>
                    <input value="<?php echo $display_price; ?>" name="display_price" type="text" placeholder="Quantidade de telas" class="form-control">
                  </div>
                <?php } ?>
                <div class="text-center">
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
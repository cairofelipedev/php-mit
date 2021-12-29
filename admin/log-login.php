<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
include "add-log.php";

if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Spinners - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <main>
    <form action="" method="POST">
      <input type="hidden" class="form-control" type="text" name="name" value="<?php echo $_SESSION['name']; ?>" />
      <input type="hidden" class="form-control" type="text" name="type" value="login" />
      <button id="clickButton" type="submit" name="submit" style="background-color:transparent;" value="LOG"></button>
    </form>
    <div class="d-flex justify-content-center">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </main>
  <script type="text/javascript">
    window.setTimeout(function() {
      document.getElementById("clickButton").click();
    }, 1500);
  </script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
require_once './admin/dbconfig.php';
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
<style>

</style>

<body class="home">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <center><img src="assets/img/logo-mit.png" width="300px"></center>
        <div class="select-citys">
          <p>
            Escolha sua localização <i class="bi bi-geo-alt-fill"></i>
          </p>
          <select class="form-control select-city">
            <option> Escolha sua localização</option>
            <option value="teresina/home.php">Teresina</option>
            <option value="demerval/home.php">Demerval Lobão</option>
            <option value="lagoa-pi/home.php">Lagoa do PI</option>
            <option value="monsenhor/home.php">Monsenhor Gil</option>
            <option value="curralinhos/home.php">Curralinhos e Região</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <script>
    var select = document.querySelector(".select-city");
    var selectOption = select.options[select.selectedIndex];
    var lastSelected = localStorage.getItem('select');

    if (lastSelected) {
      select.value = lastSelected;
    }

    select.onchange = function() {
      lastSelected = select.options[select.selectedIndex].value;
      localStorage.setItem('select', lastSelected);

      if (lastSelected == 'teresina/home.php') {
        location.href = this.value;
      }
      if (lastSelected == 'demerval/home.php') {
        location.href = this.value;
      }
      if (lastSelected == 'lagoa-pi/home.php') {
        location.href = this.value;
      }
      if (lastSelected == 'monsenhor/home.php') {
        location.href = this.value;
      }
      if (lastSelected == 'curralinhos/home.php') {
        location.href = this.value;
      }
    }
  </script>
</body>

</html>
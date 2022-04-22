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
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KH99KST');</script>
<!-- End Google Tag Manager -->
</head>
<style>

</style>

<body class="home">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH99KST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-4 d-md-block d-none">
        <a href="cidade.php">
          <div class="d-grid gap-2">
            <button class="text-white btn-mit btn" type="button">SOU CLIENTE</button>
          </div>
        </a>
        <a href="cidade.php">
          <div class="d-grid gap-2 mt-2">
            <button class="text-white btn btn-mit" type="button">NÃO SOU CLIENTE</button>
          </div>
        </a>
      </div>
      <div class="col-md-6 d-md-block d-none">
        <center><img src="assets/img/logo-mit.png" width="300px"></center>
      </div>
      <div class="col-md-6 d-block d-md-none">
        <center><img src="assets/img/logo-mit.png" width="250px"></center>
      </div>
      <div class="col-md-6 d-block d-md-none">

        <a href="cidade.php">
          <div class="d-grid gap-2">
            <button class="text-white btn-mit btn" type="button">SOU CLIENTE</button>
          </div>
        </a>
        <a href="cidade.php">
          <div class="d-grid gap-2 mt-2">
            <button class="text-white btn btn-mit" type="button">NÃO SOU CLIENTE</button>
          </div>
        </a>
      </div>
    </div>
  </div>
  <script>
    var lastSelected = localStorage.getItem('select');
    if (lastSelected == 'teresina/home.php') {
      location.href = 'teresina/home.php';
    }
    if (lastSelected == 'demerval/home.php') {
      location.href = 'demerval/home.php';
    }
    if (lastSelected == 'lagoa-pi/home.php') {
      location.href = 'lagoa-pi/home.php';
    }
    if (lastSelected == 'monsenhor/home.php') {
      location.href = 'monsenhor/home.php';
    }
    if (lastSelected == 'curralinhos/home.php') {
      location.href = 'curralinhos/home.php';
    }
    if (lastSelected == '') {
      location.href = 'index.php';
    }
  </script>
</body>

</html>
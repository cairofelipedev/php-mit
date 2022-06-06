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
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KH99KST');
  </script>
  <!-- End Google Tag Manager -->
</head>
<style>

</style>

<body class="home">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH99KST" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
  <call-us style="position: fixed; right: 20px; bottom: 20px; 
         font-family: Arial; 
         z-index: 99999; 
         --call-us-form-header-background:#00c154;
         --call-us-main-button-background:#003f77;
         --call-us-client-text-color:#d4d4d4;
         --call-us-agent-text-color:#eeeeee;
         --call-us-form-height:330px;" id="wp-live-chat-by-3CX" channel-url="https://mittele.my3cx.com.br:5001" files-url="https://mittele.my3cx.com.br:5001" minimized="true" animation-style="none" party="outros" minimized-style="BubbleRight" allow-call="true" allow-video="false" allow-soundnotifications="true" enable-mute="true" enable-onmobile="true" offline-enabled="true" enable="true" ignore-queueownership="false" authentication="both" operator-name="Atendimento Online" show-operator-actual-name="true" channel="phone" aknowledge-received="true" gdpr-enabled="false" gdpr-message="I agree that my personal data to be processed and for the use of cookies in order to engage in a chat processed by COMPANY, for the purpose of Chat/Support for the time of  30 day(s) as per the GDPR." message-userinfo-format="both" message-dateformat="both" start-chat-button-text="Chat" window-title="Live Chat & Talk" button-icon-type="Default" invite-message="Hello! How can we help you today?" authentication-message="Could we have your name and email?" unavailable-message="We are away, leave us a message!" offline-finish-message="We received your message and we'll contact you soon." ending-message="Your session is over. Please feel free to contact us again!" greeting-visibility="none" greeting-offline-visibility="none" chat-delay="2000" offline-name-message="Could we have your name?" offline-email-message="Could we have your email?" offline-form-invalid-name="I'm sorry, the provided name is not valid." offline-form-maximum-characters-reached="Maximum characters reached" offline-form-invalid-email="I'm sorry, that doesn't look like an email address. Can you try again?" enable-direct-call="true" enable-ga="false">
  </call-us>
  <script defer src="https://cdn.3cx.com/livechat/v1/callus.js" id="tcx-callus-js"></script>
</body>

</html>
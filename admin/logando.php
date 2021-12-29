<?php
session_start();
require_once "classes/conexao.php";
require_once "classes/logar.php";

if (isset($_POST['ok'])) :
  $login = filter_input(INPUT_POST, "login");
  $pass = filter_input(INPUT_POST, "pass");
  $_1 = new Login;
  $_1->setLogin($login);
  $_1->setPass($pass);

  if ($_1->logar()) :
    header("Location:log-login.php");
  else :
?>
    <script>
      alert('Usuário ou senha inválidos ...');
      window.location.href = '../index.php';
    </script>
<?php
  endif;
endif;
?>
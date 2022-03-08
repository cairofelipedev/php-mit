<style>
  .selectoptions {
    border: transparent;
    text-align: right;
  }
</style>
<!-- ======= Search Section ======= -->
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
  <div class="title-box-d">
    <h3 class="title-d">Busque aqui</h3>
  </div>
  <span class="close-box-collapse right-boxed bi bi-x"></span>
  <div class="box-collapse-wrap form">
    <form class="form-a">
      <div class="row">
        <div class="col-md-12 mb-2">
          <div class="form-group">
            <label class="pb-2" for="Type"></label>
            <input type="text" class="form-control form-control-lg form-control-a" placeholder="Seu plano ou serviço">
          </div>
        </div>
        <!-- <div class="col-md-6 mb-2">
          <div class="form-group mt-3">
            <label class="pb-2" for="Type">Tipo</label>
            <select class="form-control form-select form-control-a" id="Type">
              <option>Plano</option>
              <option>Serviços</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 mb-2">
          <div class="form-group mt-3">
            <label class="pb-2" for="city">Cidade</label>
            <select class="form-control form-select form-control-a" id="city">
              <option>Todas</option>
              <option>Teresina</option>
              <option>Curralinhos</option>
              <option>Monsenhor Gil</option>
              <option>Lagoa do Piauí</option>
              <option>Demerval Lobão</option>
            </select>
          </div>
        </div> -->
        <div class="col-md-12">
          <button type="submit" class="btn btn-b">Buscar no sistema</button>
        </div>
      </div>
    </form>
  </div>
</div><!-- End Search Section -->

<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg pt-2">
  <div class="container">
    <a class="navbar-brand d-md-none" href="../">
      <img class="img-fluid" src="../assets/img/logo-mit.png">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="container d-none d-md-block">
      <a class="navbar-brand" href="#">
        <img class="igm-fluid" src="../assets/img/logo-mit.png">
      </a>
      <a class="text-brand" href="#"><span class="color-b active">Para você</span></a>
    </div>
    <div class="title-link text-center pb-2">
      <div class="d-flex ">
        <form id="loc" action="#">
          <select class="form-control select-city selectoptions">
            <option value="home/teresina.php">Teresina</option>
            <option value="home/demerval.php">Demerval</option>
            <option value="home/lagoa-pi.php">Lagoa PI</option>
            <option value="home/monsenhor.php">Monsenhor</option>
            <option value="home/curralinhos-e-povoados.php">Curralinhos e povoados</option>
          </select>
        </form>
        <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="bi bi-geo-alt-fill"></i>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> <i class="bi bi-geo-alt-fill"></i> Localização</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="d-md-block d-none" id="loc" action="#">
              <select class="form-control select-city selectoptions">
                <option value="home/teresina.php">Teresina</option>
                <option value="home/demerval.php">Demerval</option>
                <option value="home/lagoa-pi.php">Lagoa PI</option>
                <option value="home/monsenhor.php">Monsenhor</option>
                <option value="home/curralinhos-e-povoados.php">Curralinhos e povoados</option>
              </select>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav><!-- End Header/Navbar -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg nav2">
  <div class="container">
    <div class="navbar-collapse collapse" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">App MIT</a>
          <div class="dropdown-menu">
            <div class="row">
              <div class="col-md-6">
                <a class="dropdown-item title" href="#">AQUI VOCÊ TEM</a>
                <a class="dropdown-item " href="https://mitfibra.com.br/central_assinante_web/login">2ª Via da Fatura </a>
                <a class="dropdown-item " href="https://mitfibra.com.br/central_assinante_web/login">Consumo de Internet</a>
                <a class="dropdown-item " href="https://mitfibra.com.br/central_assinante_web/login">Sobre seu plano</a>
                <a class="dropdown-item " href="https://mitfibra.com.br/central_assinante_web/login">Nota fiscal</a>
                <a class="dropdown-item " href="https://mitfibra.com.br/central_assinante_web/login">Recibo</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos e Serviços</a>
          <div class="dropdown-menu">
            <div class="row">
              <div class="col-md-4">
                <a class="dropdown-item title" href="#">COMBOS</a>
                <a class="dropdown-item " href="combos-internet-tv.php">Internet + TV</a>
                <a class="dropdown-item " href="combos-internet-telefonia-tv.php">Internet + Telefonia + TV</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item title" href="#">CASA</a>
                <a class="dropdown-item " href="casa-internet.php">Internet</a>
                <a class="dropdown-item " href="casa-tv.php">TV</a>
                <a class="dropdown-item " href="casa-fixo.php">Telefone Fixo</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item title" href="#">SERVIÇOS DIGITAIS</a>
                <a class="dropdown-item " href="apps.php">Apps em Destaque</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Por que a MIT</a>
          <div class="dropdown-menu">
            <div class="row">
              <div class="col-md-3">
                <a class="dropdown-item title" href="#">HISTÓRIA</a>
                <a class="dropdown-item">Início de tudo</a>
              </div>
              <div class="col-md-3">
                <a class="dropdown-item title" href="#">INFRAESTRUTURA</a>
                <a class="dropdown-item " href="#">Equipamentos</a>
                <a class="dropdown-item " href="#">Rede</a>
                <a class="dropdown-item " href="#">Cidades de atuação</a>
                <a class="dropdown-item " href="#">Treinamentos</a>
              </div>
              <div class="col-md-3">
                <a class="dropdown-item title" href="#">Responsabilidade Social</a>
                <a class="dropdown-item " href="#">Reciclagem</a>
                <a class="dropdown-item " href="#">Empreendorismo</a>
                <a class="dropdown-item " href="#">Diversidade</a>
              </div>
              <div class="col-md-3">
                <a class="dropdown-item title" href="#">Protagonismo</a>
                <a class="dropdown-item " href="#">Feiras</a>
                <a class="dropdown-item " href="#">Ações Social</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="ofertas.php">Melhor oferta</a>
        </li>
      </ul>
    </div>
    <a href="../admin/login.php"><button type="button" class="btn d-none d-md-block navbar-toggle-box navbar-toggle-box-collapse" data-toggle="modal">
        <i class="bi bi-person"></i>Login
      </button>
    </a>

  </div>
</nav><!-- End Header/Navbar -->
<nav class="navbar-footer fixed-bottom">
  <div class="container">
    <div class="d-flex justify-content-center contents">
      <div class="col-md-2 pt-2">
        Fala com um consultor
      </div>
      <div class="col-md-2">
        <div class="d-grid">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-footer btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Contato
          </button>

        </div>
      </div>
      <div class="col-md-2">
        <div class="d-grid">
          <button class="btn btn-footer btn-lg" type="button">Ligue agora</button>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- End Header/Navbar -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entre em contato</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0 pb-3">
              <input size="20" maxlength="14" type="tel" class="form-control" name="whats" placeholder="Seu número" required>
            </div>
            <div class="col-md-12 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="msg" rows="3" placeholder="Esreva sua mensagem"></textarea>
          </div>
          <input type="hidden" name="tipo" value="1">
          <div class="text-center pt-3">
            <button type="submit" class="btn btn-primary-form" name="submit">Enviar</button>
          </div>
        </form>
        <p class="text-center pt-3">OU</p>
        <div class="row justify-content-center pb-3">
          <div class="col-4">
            <a href="">
              <div class="container-a-i rounded">
                <i class="bi bi-instagram"></i> Instagram
              </div>
            </a>
          </div>
          <div class="col-4">
            <a href="">
              <div class="container-a-f rounded">
                <i class="bi bi-facebook"></i> Facebook
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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

    if (lastSelected == 'home/teresina.php') {
      location.href = 'teresina.php';
      document.getElementById("demo").innerHTML = "Teresina";
    }
    if (lastSelected == 'home/demerval.php') {
      location.href = '../home/demerval.php';
      document.getElementById("demo").innerHTML = "Demerval";
    }
    if (lastSelected == 'home/lagoa-pi.php') {
      location.href = '../home/lagoa-pi.php';
      document.getElementById("demo").innerHTML = "Lagoa";
    }
    if (lastSelected == 'home/monsenhor.php') {
      location.href = '../home/monsenhor.php';
      document.getElementById("demo").innerHTML = "Monsenhor";
    }
    if (lastSelected == 'home/curralinhos-e-povoados.php') {
      location.href = '../home/curralinhos-e-povoados.php';
      document.getElementById("demo").innerHTML = "Curralinhos";
    }
  }
</script>
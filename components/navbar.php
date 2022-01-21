
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
          <div class="col-md-6 mb-2">
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
          </div>
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
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand d-md-none" href="#">
        <img class="img-fluid" src="./assets/img/logo-mit.png">
      </a>
      <div class="container d-none d-md-block">
        <a class="navbar-brand" href="#">
          <img class="igm-fluid" src="./assets/img/logo-mit.png">
        </a>
        <a class="text-brand" href="#"><span class="color-b active">Para você</span></a>
        <a class="text-brand" href="#"><span class="color-b">Empresas</span></a>
      </div>
      <button type="button" class="btn navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i><span class="d-none d-md-block">Buscar</span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg">
    <div class="container">
      <div class="navbar-collapse collapse" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Produtos e Serviços</a>
            <div class="dropdown-menu">
              <div class="row">
                <div class="col-md-6">
                  <a class="dropdown-item title" href="#">INTERNET FIBRA ÓTICA</a>
                  <a class="dropdown-item " href="#">300 MEGAS</a>
                  <a class="dropdown-item " href="#">400 MEGAS</a>
                  <a class="dropdown-item " href="#">500 MEGAS</a>
                </div>
                <div class="col-md-6">
                  <a class="dropdown-item title" href="#">COMBOS</a>
                  <a class="dropdown-item " href="#">Monte seu combo</a>
                  <a class="dropdown-item " href="#">Indique e ganhe</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Soluções Digitais</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Ajuda</a>
            <div class="dropdown-menu">
              <div class="row">
                <div class="col-md-6">
                  <a class="dropdown-item title" href="#">DÚVIDAS</a>
                  <a class="dropdown-item " href="#">Internet</a>
                  <a class="dropdown-item " href="#">Aparelho</a>
                  <a class="dropdown-item " href="#">Fatura</a>
                </div>
                <div class="col-md-6">
                  <a class="dropdown-item " href="#">Assistência</a>
                  <a class="dropdown-item " href="#">Cancelamento</a>
                  <a class="dropdown-item " href="#">Aplicativos</a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Porque a MIT</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn d-none d-md-block navbar-toggle-box navbar-toggle-box-collapse"
        data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
        <i class="bi bi-person"></i>Login
      </button>


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
            <button class="btn btn-footer btn-lg" type="button">Chat</button>
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
  <div class="modal fade login">
    <div class="modal-dialog login animated">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        </div>
        <div class="modal-body">>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <?php include "login.php" ?>
  <!-- End Header/Navbar -->
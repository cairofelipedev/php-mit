<!-- Modal -->
<div class="modal fade login" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="box">
          <div class="content">
            <div class="form loginBox">
              <form action="logando.php" method="POST">
                <input id="login"  class="form-control mb-2" type="text" placeholder="Login" name="login" required>
                <input id="pass" class="form-control mb-2" type="password" placeholder="Senha" name="pass" required>
                <input class="btn btn-login" type="submit" name="ok" value="Login">
              </form>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="content registerBox" style="display:none;">
            <div class="form">
              <form method="" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="forgot login-footer">
          <span>
            <a href="javascript: showRegisterForm();">Criar conta</a>
          </span>
        </div>
        <div class="forgot register-footer" style="display:none">
          <span>Already have an account?</span>
          <a href="javascript: showLoginForm();">Login</a>
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
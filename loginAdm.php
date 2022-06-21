<?php
require('./header.php');

  if(isset($_SESSION['dadosUsuario'])) header('Location: index.php');

?>


<aside class="col-lg-4 mx-auto">
  <div class="card">
    <article class="card-body">
      <h4 class="card-title text-center mb-4 mt-1">Login Administrador</h4>
      <hr>

      <form action="servicoLoginAdm.php" method="POST">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="usuario" class="form-control" placeholder="Nome de usuário" type="text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="Senha" type="password" name="senha" required>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"> Login </button>
        </div>

      </form>
    </article>
  </div>

</aside>



<?php require('footer.php') ?>
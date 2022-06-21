<?php
require('./header.php');
?>



<div class="signup-form">
    <form action="confirmarCliente.php" method="post">
        <h2>Registro</h2>
        <p class="hint-text">Crie sua conta agora </p>
        <div class="form-group">
            <input type="text" class="form-control" value="" name="nome" placeholder="Nome completo" required>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" value="" name="nascimento" placeholder="Data de Nascimento" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="cpf" maxlength="11" placeholder="CPF: SOMENTE NÚMEROS" required>
        </div>

        <div class="form-group">
            <input type="text" maxlength="8" class="form-control" name="cep" placeholder="CEP: SOMENTE NÚMEROS" required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" value="" name="email" placeholder="E-mail" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="" name="usuario" placeholder="Nome de usuário" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
        </div>



        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required> Eu aceito os <a href="#">Termos de Usuário</a> &amp; <a href="#">Política de Privacidade</a></label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Registre agora</button>
        </div>
    </form>
    <div class="text-center">Já tem uma conta? <button type="link" class="
                    btn btn-primary btn-lg btn-block"><a href="login.php">Login</a>
        </button></div>





</div>


</div>





<?php require('footer.php') ?>
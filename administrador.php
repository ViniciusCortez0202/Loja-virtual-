<?php
require('./header.php');

$nome = $_SESSION['dadosUsuario']['adm_nome'];
$cpf = $_SESSION['dadosUsuario']['adm_cpf'];
$email = $_SESSION['dadosUsuario']['adm_email'];
$nomeUsuario = $_SESSION['dadosUsuario']['adm_nome_de_usuario'];

$cep = $_SESSION['dadosUsuario']['end_cep'];

?>

<div class="signup-form">
    <form action="sairUsuario.php" method="post">
        <h2>Perfil</h2>
        <p class="hint-text">Seus dados </p>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $nome ?>" name="nome" placeholder="Nome completo" readonly>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="cpf"   value="<?php echo $cpf ?>" maxlength="11" placeholder="CPF: SOMENTE NÚMEROS" readonly>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $cep ?>" name="cep" placeholder="CEP" readonly>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" value="<?php echo $email ?>" name="email" placeholder="E-mail" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $nomeUsuario ?>" name="usuario" placeholder="Nome de usuário" readonly>
        </div>

        <button type="submit" class="btn btn-danger btn-block"> Sair</button>
</form>

<a href="cadastrar.php"><button type="link" class="btn btn-primary"> Cadastrar Produtos</button></a>
<a href="vendas.php"> <button type="link" class="btn btn-success"> Vendas</button> </a>

</div>


<?php 
require('footer.php') 
?>
<?php
require('./header.php');

include('servicoRegistro.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$nomeUsuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
$nascimento = isset($_POST['nascimento']) ? $_POST['nascimento'] : "";
if (validar_cpf($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
} else {
    header("Location: registrarAdm.php");
}
$v = validar_cep($_POST['cep']);
$cep = "";
$logradouro = "";
$bairro = "";
$estado = "";
$cidade = "";

if ($v) {
    $cep = $_POST['cep'];
    $logradouro = $v["logradouro"];
    $bairro = $v["bairro"];
    $estado = $v["uf"];
    $cidade = $v["localidade"];
} else {
    header("Location: registrarAdm.php");
}
?>

<div class="signup-form">
    <form action="servicoConfirmarRegistro.php/?tipo=A" method="post">
        <h2>Confirmar dados</h2>
        <p class="hint-text">Confirme seus dados </p>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $nome ?>" name="nome" placeholder="Nome completo" readonly>
        </div>

        <div class="form-group">
            <input type="date" class="form-control" value="<?php echo $nascimento ?>" name="nascimento" placeholder="Data de Nascimento" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="cpf" value="<?php echo  $cpf ?>" maxlength="11" placeholder="CPF: SOMENTE NÚMEROS" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="cep" value="<?php echo  $cep ?>" maxlength="11" placeholder="CEP: SOMENTE NÚMEROS" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $logradouro ?>" name="rua" placeholder="Rua Fulano de Tal" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $bairro ?>" name="bairro" placeholder="Bairro do Pai de Família" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $estado ?>" name="estado" placeholder="Estado" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $cidade ?>" name="cidade" placeholder="Cidade" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="numero" placeholder="N°" >
        </div>

        <div class="form-group">
            <input type="email" class="form-control" value="<?php echo $email ?>" name="email" placeholder="E-mail" readonly>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $nomeUsuario ?>" name="usuario" placeholder="Nome de usuário" readonly>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Confirme sua senha" required>
        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Confirmar</button>
        </div>
    </form>
    <div class="text-center">Já tem uma conta? <button type="link" class="
                    btn btn-primary btn-lg btn-block"><a href="loginAdm.php">Login</a>
        </button></div>





</div>


</div>





<?php require('footer.php') ?>
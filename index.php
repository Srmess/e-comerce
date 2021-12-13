<?php require_once ("estetica/cabecalho.php");
require_once ("logica-usuario.php");
require_once("mostra-alerta.php");
?>

<?php
    mostraAlerta("success");
    mostraAlerta("danger");
?>
    <h1>Bem vindo ao Meu Lojinha!</h1>

<?php if (verificaUsuario()){?>
    <p class="text-success">Você está logado
    <?=usuarioLogado()?><br> <a class="btn btn-danger" href="logout.php">Deslogar</a> </p>
<?php } else { ?>

<h2>Login</h2>
<form action="login.php" method="POST">
    <table class="table">
        <tr>
            <td>email:</td>
            <td><input class="form-control" type="text" name="email"></td>
        </tr>
        <tr>
            <td>senha:</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">login</td>
        </tr>
    </table>
</form>
<?php } ?>
<?php include("estetica/rodapé.php");?>

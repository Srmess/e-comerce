<?php require_once('conexao.php');
require_once('banco-usuario.php');
require_once('logica-usuario.php');

$usuario = BuscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null){
    $_SESSION["danger"] = "usuario ou senha invalido";
    header("location: index.php");
} else {
    $_SESSION["success"] = "login efetuado com successo";
    logaUsuario($usuario["email"]);
    header("location: index.php");
}
die();

?> 
<?php
require_once ("conexao.php");
    function BuscaUsuario($conexao, $email, $senha){
        $md5senha = md5($senha);
        $email = mysqli_real_escape_string($conexao, $email);
        $query = "SELECT * FROM usuarios WHERE email='{$email}' and senha='{$md5senha}'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }
?>
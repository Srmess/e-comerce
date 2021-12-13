<?php 
session_start();
function usuarioFoiLogado(){
    if(!verificaUsuario()){
        $_SESSION["danger"] = "Não tão rápido cowboy!";
        header("location: index.php");
    };
    
}

function verificaUsuario(){
    return isset($_SESSION['usuario_logado']);
}

function usuarioLogado(){
    $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function logout(){
    session_destroy();
    session_start();
};

?>
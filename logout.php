<?php 
require_once("logica-usuario.php");
logout();
$_SESSION["success"]="Até mais!";
header("location: index.php");
die(); 
?>
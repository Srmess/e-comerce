<?php session_start();
$nome = $_POST["nome"];
$email= $_POST["email"];
$menssagem= $_POST["menssagem"];

require_once("PHPMailer-master/get_oauth_token.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->host = 'smtp.outlook.com';
$mail->port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->username = "markim";
$mail->password = "12345";

$mail->setFrom("boynerd@outllok.com", "Marcos Vinicius");
$mail->addAdress("boynerd@outlook.com");
$mail->Subject="Email de contato da loja";
$mail->msgHTML("<html> de:{$nome}<br/>email:{$email}<br/>mensagem:{$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem:{$mensagem}";

if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("location: index.php");
} else {
    $_SESSION["danger"]= "Erro ao enviar mensagem". $mail->ErrorInfo;
    header("location: contato.php");
}
die();


?>
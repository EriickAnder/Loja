
<?php
session_start();

$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$mensagem = $_POST["txtMensagem"];
require_once("PHPMailerAutoload.php");
require_once("contato.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "eriickanderson@gmail.com";
$mail->Password = "251294Ea";

$mail->setFrom("eriickanderson@gmail.com", "Alura Curso PHP e MySQL");
$mail->addAddress("eriickanderson@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();
<?php session_start();

use PHPMailer\PHPMailer\PHPMailer;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//VARIAVEIS RECEBIDAS PELO POST/HTML
$seu_nome = $_POST["seu_nome"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$corpo_email = $_POST["corpo_email"];
$anexo = $_FILES["anexo"];

if(empty($seu_nome)){
    $_SESSION["erro_enviar_email"] = "Não deixe nenhum campo vázio!";
    header("Location: ../admin/email.php");
    die();
} elseif (empty($nome)) {
    $_SESSION["erro_enviar_email"] = "Não deixe nenhum campo vázio!";
    header("Location: ../admin/email.php");
    die();
} elseif (empty($email)) {
    $_SESSION["erro_enviar_email"] = "Não deixe nenhum campo vázio!";
    header("Location: ../admin/email.php");
    die();
} elseif (empty($assunto)) {
    $_SESSION["erro_enviar_email"] = "Não deixe nenhum campo vázio!";
    header("Location: ../admin/email.php");
    die();
} elseif (empty($corpo_email)) {
    $_SESSION["erro_enviar_email"] = "Não deixe nenhum campo vázio!";
    header("Location: ../admin/email.php");
    die();
}

//CONEXÃO PHP MAILER
$mailer = new PHPMailer();
$mailer -> IsSMTP();
$mailer -> Host = "smtp.gmail.com";
$mailer -> Port = "587";
$mailer -> SMTPAuth = true;
$mailer -> SMTPSecure = "tls";
//$mail -> SMTPDebug = 2;

$mailer -> Username = '';
$mailer -> Password = '';

$mailer -> SMTPOptions = array( 'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

//REMETENTE
$mailer -> From = "";

//NOME
$mailer -> FromName = $seu_nome;

//DESTINATÁRIO
$mailer -> AddAddress($email, $nome);

//Anexos
$mailer -> AddAttachment( $anexo["tmp_name"], $anexo["name"] );

//DEFINIR SE É FORMATO HTML O EMAIL
$mailer -> IsHTML(true);

//CHARSET
$mailer -> CharSet = 'UTF-8';

//Assunto da mensagem
$mailer -> Subject = $assunto;

//Corpo do email
$mailer -> Body = $corpo_email;

if( !$mailer -> Send() ) {
    $_SESSION["erro_enviar_email"] = "Não foi possível enviar seu e-mail, tente novamente.";
    header("Location: ../admin/email.php");
    die();
}

$mailer -> smtpClose();
$_SESSION["enviar_email"] = "E-mail enviado com sucesso!";
header("Location: ../admin/email.php");
?>
<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ("Exception.php");
require ("PHPMailer.php");
require ("SMTP.php");

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    //$mail->SMTPDebug = 2;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "email@gmail.com";          // SMTP username
    $mail->Password = "secret";                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('email@gmail.com', 'Loja');
    $mail->addAddress('email@gmail.com', 'PH');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Bloco do Eu Sozinho form de contato";
    $mail->Body = ("<html>de: {$nome}<br/>email: {$email}<br/> Mensagem:{$mensagem}</html>");
    $mail->AltBody = "de: {$nome}\nemail: {$email}\nMensagem:{$mensagem}";

    if ($mail->send()) {
        $_SESSION["success"] = "Mensagem enviada com sucesso";
        header("Location: index.php");
    } else {
        $_SESSION["danger"] = "Mensagem enviada com sucesso" . $mail->ErrorInfo;
        header("Location: contato.php");
    }

    die();

/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 13/03/19
 * Time: 22:38
 */
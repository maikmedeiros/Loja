<?php
  session_start(); 

  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];
  $descricao = $_POST["descricao"];
  
  require_once("PHPMailerAutoload.php"); 
  
  $mail = new PHPMailer();
  
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPSecure = 'TLS';
  $mail->SMTPAuth = true;
  $mail->Username = "maik.moreira@escolamobile.com.br";
  $mail->Password = "Flamengo1";

  $mail->setFrom("maikmedeirosm@gmail.com", "Alura Curso PHP e MySQL");
  $mail->addAddress("maikmedeirosm@gmail.com");
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
?>

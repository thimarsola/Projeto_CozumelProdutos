<?php
  if (isset($_POST['submit'])){
    // Recebe dados do formulario
    $quebra_linha = "\n";
    $mailsender = "site@cozumelestetica.com.br";
    $nameremetente= "Formulário de contato - SITE";
    $maildestinatario = "atendimento@cozumelestetica.com.br";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $mobilePhone = $_POST['mobilePhone'];
    //Requisitos google reCaptcha
    $secretKey = "6LfuUK0UAAAAAK5plYXQwB8TNjMYVkUVXiloPEJU";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $ch = curl_init();
    $timeout = 5; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response);
    if($response->success){
      $messageHTML =
        '
          Olá Cozumel,
          Eu me chamo '.$name.', estou entrando em contato através do site.

          Aqui estão os meus dados para contato:
          E-mail: '.$mail.'
          Telefone: '.$phone.'
          Celular: '.$mobilePhone.'

          Eu gostaria de falar sobre:
          '.$subject.'

          Minha mensagem:
          '.$message.'
          ';

      $headers = "MIME-Version: 1.1".$quebra_linha;
      $headers .= "Content-type: text/plain; charset=UTF-8".$quebra_linha;
      $headers .= "From:" .$mailsender.$quebra_linha;
      $headers .= "Return-Path:" .$mailsender.$quebra_linha;

      $envio = mail($maildestinatario, $subject, $messageHTML, $headers, "-r".$mailsender);
      if (isset($envio)) {
        echo "<script>alert('Mensagem enviada com sucesso! Em breve estaremos entrando em contato!');</script>";
//        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../'>";
      }
      else{
        echo "<script>alert('Erro ao tentar enviar a sua mensagem! Por favor tente enviar a sua mensagem diretamente para o nosso email: atendimento@cozumemlestetica.com.br');</script>";
      }
    }
    else{
      echo "<script>alert('Erro ao tentar enviar a sua mensagem!');</script>";
//      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../'>";
    }
  }
?>
<?php

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];

  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
    </html>
  ";
  
  $destino = "elder_dias23@hotmail.com";
  $assunto = $_POST ['subject'];

  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
?>
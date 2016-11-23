<?php
    include "conecta_mysql.php";
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $insere = mysqli_query($conexao,"INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')") or die ("Não foi possível executar o comando: ".mysqli_error());
	
	header('Location: faleconosco.php');

?>
	   
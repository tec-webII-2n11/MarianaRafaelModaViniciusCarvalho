<?php
    include "conecta_mysql.php";
    
    $usuario = $_COOKIE["usuario"];
    $data = date("Ymd");
    $comentario = $_POST["comentario"];
    $local = $_POST["local"];
    
    $insere = mysqli_query($conexao,"INSERT INTO comentarios (usuario, data, comentario, local) VALUES ('$usuario', '$data', '$comentario', '$local')") or die ("Não foi possível executar o comando: ".mysqli_error());
	
	header('Location: estabelecimentos.php');

?>
	   



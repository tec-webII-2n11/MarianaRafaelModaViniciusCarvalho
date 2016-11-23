<?php
    include "conecta_mysql.php";
    
    $usuario = $_POST["usuario"];
    $data = $_POST["data"];
    $comentario = $_POST["comentario"];
    $local = $_POST["local"];
    
    if ($usuario=="Anônimo"){
      			$usuario="";
      		}
    
    $deleta = mysqli_query($conexao,"DELETE from comentarios where usuario='$usuario' and data='$data' and comentario='$comentario' and local='$local'") or die ("Não foi possível executar o comando: ".mysqli_error());
	
    header('Location: admin.php');
?>
	   

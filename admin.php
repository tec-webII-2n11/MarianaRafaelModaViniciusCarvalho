 
 <header id="cabecalhoPg" style="height:40px;">  
            <div class="containerCabecalho">
       <span style="float:left;display:inline-block;margin-top:5px;color:#fff;">Painel Administrativo | </span><a style="float:left;display:inline-block;margin-left:5px;" href="index.html"><img class="logo" src="imagens/mackLogo.png" alt="Mack-Advisor" width="83" height="39"/></a>
            </div>    
            </header>
 
 
 <html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>.:: Painel Administrativo ::.</title>
	</head>
	<body>  
	    <div class="containerTudo">
	
 <?php
 
 include "conecta_mysql.php";
    $sql = "SELECT usuario, data, comentario, local FROM comentarios";
    $resultado1 = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL: ".mysqli_error());

   if($resultado1){
      while ($row = mysqli_fetch_array($resultado1)){
      		if ($row["usuario"]==""){
      			$row["usuario"]="Anônimo";
      		}
            echo $lista_comentarios = "<div class='containerComentario'><p>".$row["usuario"]." disse em ".$row["data"]."<br>Sobre ".$row["local"]."<br><br>".$row["comentario"]."</p>
                                        <form method='post' action='deleta.php' id='formdeleta' name='formdeleta'>
                                        <input name='usuario' type='hidden' id='usuario' value=".$row["usuario"].">
                                        <input name='data' type='hidden' id='data' value=".$row["data"].">
                                        <input name='comentario' type='hidden' id='comentario' value=".$row["comentario"].">
                                        <input name='local' type='hidden' id='local' value=".$row["local"].">
                                        <input name='excluir' type='submit' id='excluir' value='Excluir'>
                                        </form></div>";
      		
       }
    }

?>

    </div>
</body>
    
</html>

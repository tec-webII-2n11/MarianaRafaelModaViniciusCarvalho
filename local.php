<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>.:: <?php echo $nome ?> ::.</title>
	</head>
	
	<body> 
        <header id="cabecalhoPg">  
            <div class="containerCabecalho">
                    <figure>      
                    	<a href="estabelecimentos.php"><img class="logo" src="imagens/mackLogo.png" alt="Mack-Advisor" width="133" height="62"/></a>
                    </figure>   
                    
                    
                    <nav class="menu">		
                        <ul class="menu">
                            <li><a href="estabelecimentos.php"> Home </a> </li>
                            <li><a href="sobre.html"> Sobre </a> </li>
                            <li><a href="faleconosco.php"> Fale Conosco </a> </li>
                            <li><a href="logout.php"> Logout</a> </li>
                        </ul>
                    </nav>
                    
                </div>    
            </header>


       
<?php
    
    $local = $_POST["local"]; 
    include "conecta_mysql.php";
    
    
    $query = "SELECT nome, imagem, localizacao FROM locais WHERE nome = '$local'";
    $resultado2 = mysqli_query($conexao,$query) or die("Não foi possível executar a SQL: ".mysqli_error());                   
    
    if($resultado2){
        while ($row = mysqli_fetch_array($resultado2)){
        $nome = $row["nome"];
        $imagem = $row["imagem"];
        $localizacao = $row["localizacao"];
        }
    }
?>

	 
        <h1 class="titleLocal">Avalie este estabelecimento!</h1>
            
	
        <div style="clear:both"></div>
		<div class="containerimage">
			<div class="imgefeitop">
				<a href="#">
					<img src=<?php echo "'".$imagem."'"?> width="500px" height="300px">
				</a>
				
			</div>
			

			<div class="floatLeft">
	    <div class="scrollDiv">
	        
							<?php $sql = "SELECT usuario, data, comentario FROM comentarios WHERE local = '$local'";
    $resultado1 = mysqli_query($conexao,$sql) or die("Não foi possível executar a SQL: ".mysqli_error());

   if($resultado1){
      while ($row = mysqli_fetch_array($resultado1)){
      		if ($row["usuario"]==""){
      			$row["usuario"]="Anônimo";
      		}
           echo $lista_comentarios = "<p id='nomec'>".$row["usuario"]." em <id='datac'>".$row["data"]." - <id='comentarioc'>".$row["comentario"]."</p>";
       }
    }  ?>
        </div>
    
				<form method="post" action="comenta.php" id="formcomenta" name="formcomenta">
				<textarea name="comentario" id="comentario" rows=6 cols=50 placeholder="Escreva um comentário!"></textarea>
				<input type="hidden" id="local" name="local" value="<?php echo $local ?>">
				<br>
	            <input name="enviar" type="submit" id="enviar" value="Enviar">
	            <input name="limpar" type="reset" id="limpar" value="Limpar">
	            </form>
	        </div>    
	           
		</div>
		
		<div style="clear:both;"></div>
		    <footer style="margin-top:45px;">
                <div class="rodapelogin" style="background: none;width:80%;margin:0 auto;text-align:center;height:50px;color:#fff;">
                    <a class="linkFooter" href="quemsomos.html">Quem Somos</a> | <a class="linkFooter" href="ajuda.html">Ajuda</a><br>
                  <span style="font-size:10px;">MackAdvidor © 2016 | By Mariana Portela</span>
                </div>
            </footer>
 	</body>
 	
 	   
</html>

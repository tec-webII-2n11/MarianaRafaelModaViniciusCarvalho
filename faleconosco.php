<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>.:: Fale conosco ::.</title>
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
            
            
        <h1 class="titleLocal">Nos mande uma mensagem!</h1>
            
	
        <div style="clear:both"></div>
		<div class="containerimage">
			<div class="imgefeitop">
			  <form method="post" action="enviafc.php" id="formfc" name="formfc">
			    
            <input name="nome" type="text" id="nome" placeholder="Nome"><br>
            <input name="email" type="text" id="email" placeholder="E-mail"><br>
				<textarea name="comentario" id="comentario" rows=6 cols=50 placeholder="Diga o que você pensa!"></textarea>
				<br>
	            <input name="enviar" type="submit" id="enviar" value="Enviar">
	            <input name="limpar" type="reset" id="limpar" value="Limpar">
	            </form>
				
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

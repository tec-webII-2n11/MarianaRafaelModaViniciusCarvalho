<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>.:: Estabelecimentos ::.</title>
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
<div class="containerTudo">
	 
	 
		<div class="formulario"> 
	<div>
		<form method="post" action="local.php" id="formcomenta" name="formcomenta" class="avalieEstabele">
			<image class="round" style="width:98%;" src="imagens/starbucks.jpg">
			<input type="hidden" name="local" id="local"  value="Starbucks">
				<input type="hidden" name="usuario" id="usuario"  value="<?php echo $_COOKIE["usuario"] ?>">
			<input type="submit" name="avalie" id="avalie" value="Avalie!">
		</form>
	</div>
	

	
	<div>
		<form method="post" action="local.php" id="formcomenta" name="formcomenta" class="avalieEstabele">
			<image class="round" style="width:98%;" src="imagens/casapaodequeijo.jpg">
			<input type="hidden" name="local" id="local"  value="Casa do Pao de Queijo">
				<input type="hidden" name="usuario" id="usuario"  value="<?php echo $_COOKIE["usuario"] ?>">
			<input type="submit" name="avalie" id="avalie" value="Avalie!">
		</form>
	</div>
	
	<div>
			<form method="post" action="local.php" id="formcomenta" name="formcomenta" class="avalieEstabele">
				<image class="round" style="width:98%;" src="imagens/bobs.png">
				<input type="hidden" name="local" id="local"  value="Bobs">
				<input type="hidden" name="usuario" id="usuario"  value="<?php echo $_COOKIE["usuario"] ?>">
			<input type="submit" name="avalie" id="avalie" value="Avalie!">
			</form>
	</div>		
		
	<div>		
			<form method="post" action="local.php" id="formcomenta" name="formcomenta" class="avalieEstabele">
				<image class="round" style="width:98%;" src="imagens/spremuto.jpg">
				<input type="hidden" name="local" id="local"  value="Spremuto">
				<input type="hidden" name="usuario" id="usuario"  value="<?php echo $_COOKIE["usuario"] ?>">
			<input type="submit" name="avalie" id="avalie" value="Avalie!">
			</form>
			</div>
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
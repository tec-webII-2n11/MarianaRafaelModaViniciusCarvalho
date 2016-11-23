<!DOCTYPE html>
<!--?php echo "Seja bem vindo,". $_COOKIE["usuario"]; ?>-->
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>.:: HOME ::.</title>
		
        
        <script type="text/javascript">
		
            function logar(){
                document.getElementById("login").className = "invisible";
                document.getElementById("cadastrar").className = "invisible";
                document.getElementById("usuario").className = "";
                document.getElementById("senha").className = "";
                document.getElementById("entrar").className = "";
                document.getElementById("nome").className = "invisible";
                document.getElementById("email").className = "invisible";
                document.getElementById("tia").className = "invisible";
                document.getElementById("usuario_cad").className = "invisible";
                document.getElementById("senha_cad1").className = "invisible";
                document.getElementById("senha_cad2").className = "invisible";
                document.getElementById("concluir").className = "invisible";
                document.getElementById("limpar").className = "invisible";
                document.getElementById("voltar").className = "";
            }
			
			function toninho(){
                document.getElementById("login").className = "invisible";
                document.getElementById("cadastrar").className = "invisible";
                document.getElementById("usuario").className = "invisible";
                document.getElementById("senha").className = "invisible";
                document.getElementById("entrar").className = "invisible";
                document.getElementById("nome").className = "";
                document.getElementById("email").className = "";
                document.getElementById("tia").className = "";
                document.getElementById("usuario_cad").className = "";
                document.getElementById("senha_cad1").className = "";
                document.getElementById("senha_cad2").className = "";
                document.getElementById("concluir").className = "";
                document.getElementById("limpar").className = "";
                document.getElementById("voltar").className = "";
            }
			
        </script>

</head>
	<body style="background-image:url(imagens/fundo.jpg);background-size:auto;">
		<header style="height:150px;border-bottom:none;">         
			   <div style="text-align:center;margin:0 auto;padding:25px 0 25px 0;">
                	<a href="index.php"><img class="logologin" src="imagens/mackLogo.png" alt="Mack-Advisor" width="222" height="104"/></a>
         		</div>
		</header>
        <div style="clear:both"></div>
        <div style="margin:60px 0 100px 0;">
		<article class="formulario" style="width:250px;margin:0 auto;background-color:rgba(0, 0, 0, 0.5);text-align:center;padding:25px;-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 15px;color:#fff;"> 
        <h2>Entre ou Cadastre-se</h2>
        <p>Avalie e confira as opiniões de outros alunos!</p>
        	<form method="post" action="insere.php" id="formlogin" name="formlogin">
            <input type="button" value="Login" id="login" onclick="logar()">
            <input type="button" value="Cadastre-se" id="cadastrar" onclick="toninho()">
			<input type="text" name="usuario" id="usuario" class="invisible" placeholder="Usuário">
			<input type="password" name="senha" id="senha" class="invisible" placeholder="Senha">
            <input name="entrar" type="submit" value="Entrar" id="entrar" class="invisible" onclick="location.href=#">
            <input name="nome" type="text" id="nome" class="invisible" placeholder="Nome">
            <input name="email" type="text" id="email" class="invisible" placeholder="E-mail">
            <input name="tia" type="text" id="tia" class="invisible" placeholder="TIA">
            <input name="usuario_cad" type="text" id="usuario_cad" maxlength="12" class="invisible" placeholder="Usuário">
            <input name="senha_cad1" type="password" id="senha_cad1" maxlength="12" class="invisible" placeholder="Senha">
            <input name="senha_cad2" type="password" id="senha_cad2" maxlength="12" class="invisible" placeholder="Confirme sua senha">
            <input name="concluir" type="submit" id="concluir" value="Concluir" class="invisible">
            <input name="limpar" type="reset" id="limpar" value="Limpar" class="invisible">
            </form>
            <a href="index.php"><img id="voltar" class="invisible" src="imagens/back.png" alt="Voltar" width="42" height="21" style="margin-top: 15px;"/></a>    
        </article>
        </div>
        <div style="clear:both"></div>
		    <footer style="margin-top:45px;">
                <div class="rodapelogin" style="background: none;width:80%;margin:0 auto;text-align:center;height:50px;color:#fff;">
                    <a class="linkFooter" href="quemsomos.html">Quem Somos</a> | <a class="linkFooter" href="ajuda.html">Ajuda</a> | <a class="linkFooter" href="faleconosco.php">Fale Conosco</a> | <a class="linkFooter" href="sobre.html">Sobre</a><br>
                  <span style="font-size:10px;">MackAdvidor © 2016 | By Mariana Portela</span>
                </div>
            </footer>
	</body>
</html>
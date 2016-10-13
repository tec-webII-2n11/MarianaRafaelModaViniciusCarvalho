<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8"/>
        <meta name="author" content="Mariana Garcia">
        <meta name="author" content="Rafael Moda de Souza"/>
        <meta name="author" content="Vinicius Camargo"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>.:: HOME ::.</title>
		
        
        
        <script type="text/javascript">
            //Funcao para exibir campos de login
            function logar(){
                document.getElementById("cadastrar").className = "invisivel";
                document.getElementById("entrar").className = "invisivel";
                document.getElementById("email").className = "";
                document.getElementById("senha").className = "";
                document.getElementById("login").className = "";
            }
        </script>
        <link rel="stylesheet" href="/login.css" type="text/css" />
		
		
	</head>
	<body style="background-color: lightgray;">
		<header>         
        	<figure>      
                	<a href="index.html"><img class="logologin" src="logo.png" alt="SURVIVORMACK" width="272" height="52"/></a>
            </figure>   
           
			
		</header>
        <div style="clear:both"></div>
		<article> 
            <input type="button" value="Entrar" id="entrar" onclick="logar()">
            <input type="button" value="Cadastre-se" id="cadastrar" onclick="location.href='cadastro.php'">
            <input type="email" name="email" id="email" class="invisivel" placeholder="E-mail"/>
            <input type="password" name="senha" id="senha" class="invisivel" placeholder="Senha"/>
            <input name="Login" type="button" value="Login" id="login" class="invisivel" onclick="location.href='https://petnet-osniel.c9users.io/timeline.php'">
        </article>
        <div style="clear:both"></div>
		<footer>
        <div class="rodapeConteudo">
            <div class="rodape1">
                <figure>
                    <a href="index.html"><img src ="logorodape.png" alt="SURVIVORMACK" width="196" height="34"/></a>
                </figure>
            
            </div>
            <div class="rodape2">
            	<nav>		
				<ul>
					<li><a href="quemsomos.html"> Quem somos? </a> </li>
					<li><a href="index.html"> Mapa </a> </li>
					<li><a href="ajuda.html"> Ajuda </a> </li>
					<li><a href="faleconosco.html"> Fale conosco </a> </li>
				</ul>
			</nav>
            
            </div>
            <div class="rodape3">
                <article>
                    <figure>
                        <a href="https://www.facebook.com/" target="_blank"><img class="sociais" src ="imagens/face.png" alt="FACEBOOK" width="30" height="30"/></a>
                    </figure>
                    <figure>
                        <a href="https://twitter.com/" target="_blank"><img class="sociais" src ="imagens/twitter.png" alt="TWITTER" width="30" height="30"/></a>
                    </figure>
                    <figure>
                        <a href="https://plus.google.com/" target="_blank"><img class="sociais" src ="imagens/google.png" alt="GOOGLE+" width="30" height="30"/></a>
                    </figure>
                </article>
            
            </div>
            <div style="clear:both;"></div>
            <div class="copyright">			
			<p> Copyright 2016 by Mariana Portela, Rafael Moda. All Rights reserved. </p>
            </div>
		</footer>
	</body>
</html>
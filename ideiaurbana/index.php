<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Ideia Urbana</title>
		<link rel="shortcut icon" href="./img/logo_2_.ico"/>
		<link rel="stylesheet" type="text/css" href="./css/reset.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 1000px)" href="./css/desktop.css">
		<script src="./js/jquery.min.js"></script>
		<script>
			$(function(){
				var login = $(".form-login");
				var cadastro = $(".form-cadastro");

				$("#cadastro").click(function(){
					login.animate({
						opacity: 0,
						marginLeft: "100vw"
					},"slow",function(){
								login.css("display","none");
								cadastro.css("display","flex");
								cadastro.animate({
									opacity: 1,
									marginLeft: '0vw'
								},"slow");
							}
					);
				});
				$("#login").click(function(){
					cadastro.animate({
						opacity: 0,
						marginLeft: '-100vw'
					},"slow",function(){
								login.css("display","flex");
								cadastro.css("display","none");
								login.animate({
									opacity: 1,
									marginLeft: '0vw'
								},"slow");
							}
					);
				});
				$("#box1").hover(function(){
					$("#picture1").toggleClass("animate_picture1")
				});
				$("#box2").hover(function(){
					$("#picture2").toggleClass("animate_picture2")
				});
				$("#box3").hover(function(){
					$("#picture3").toggleClass("animate_picture3")
				});
			});
		</script>
	</head>
	<body>
		<header class="header">
			<nav class="nav">
				<ul class="list">
					<a class="sobre" href="#sobreSite">Sobre o Site</a>
					<a class="criar" href="#acompanhe-nos">Acompanhe-nos</a>
					<a class="login" href="#entrar">Login ou Cadastro</a>
				</ul>
			</nav>
			<div class="header-content">
				<figure class="header-logo">
					<img class="header-img" src="./img/logo.png">
				</figure>
			</div>
		</header>
		<section id="sobreSite" class="content">
			<div class="content-title">
				<h1>Sobre o Site</h1>
			</div>
			<div id="box1" class="content-box">
				<div id="picture1" class="content-img img1"></div>
				<figcaption id="subtitle1" class="content-text">
					<h1>Aqui será possível você conhecer mais sobre os arquitetos e engenheiros mais reconhecidos.</h1>
				</figcaption>
			</div>
			<div id="box2" class="content-box">
				<div id="picture2" class="content-img img2"></div>
				<figcaption id="subtitle2" class="content-text">
					<h1>Dê um basta na dúvida entre engenharia e arquitetura. Veja suas diferenças e similaridades</h1>
				</figcaption>
			</div>
			<div id="box3" class="content-box">
				<div id="picture3" class="content-img img3"></div>
				<figcaption id="subtitle3" class="content-text">
					<h1>Veja os projetos presentes aqui e aproveite para inspirar-se e, futuramente, coloca-los em prática.</h1>
				</figcaption>
			</div>
			<div class="clear"></div>
			<div class="content-subtitle">
				<h1>Arquitetos novos, engenheiros que você não conhecia, projetos que gera uma vontade de contruir e que ronovará os seu sonhos com um toque de modernismo neles - Esses são o que esperamos e temos a convicção de que você terá ao entrar no <span class="span">Ideia Urbana</span>. Venha, você não se decepcionará.</h1>
				<h2>OBS: Esse site foi produzido com o intuito de divulgação dos projetos dos arquitetos e engenheiros mais renomados do mundo e do próprio artista. Ou seja, nada que se encontra aqui é de nossa autoria.</h2>
			</div>
			<div class="clear"></div>
		</section>
		<section id="acompanhe-nos" class="between">
			<div class="between-content">
				<h1 class="between-title">Acompanhe-nos</h1>
				<nav class="between-nav">
					<ul class="between-list">
						<a class="facebook" href="#"><img src="./img/facebook.png"></a>
						<a class="instagram" href="#"><img src="./img/instagram.png"></a>
						<a class="linkedin" href="#"><img src="./img/twitter.png"></a>
						<a class="vimeo" href="#"><img src="./img/tumblr.png"></a>
						<a class="youtube" href="#"><img src="./img/youtube.png"></a>
					</ul>
				</nav>
			</div>
		</section>
		<section id="entrar" class="entrar">
			<div class="form-login">
				<form class="formulario-login" action="login.php" method="post">
					<h1>Login</h1>
					<input class="l-email" type="email" name="email" placeholder="Digite Seu E-mail">
					<input class="l-senha" type="password" name="password" placeholder="Digite Sua Senha">

					<input class="submit" type="submit" name="login" value="Login">
					<p id="cadastro">Não tenho uma conta</p>
				</form>
			</div>
			<div class="form-cadastro">
				<form class="formulario-cadastro" action="cadastrar.php" method="post">
					<h1>Cadastro</h1>
					<input class="c-nome" type="text" name="nome" placeholder="Digite Seu Nome" required>
					<input class="c-Snome" type="text" name="sobreNome" placeholder="Digite Seu Sobrenome" required>
					<input class="c-email" type="email" name="email" placeholder="Digite Seu E-mail" required>
					<input class="c-senha" type="password" name="password" placeholder="Digite Sua Senha" required>
					<input class="c-Csenha" type="password" name="confirmPassword" placeholder="Digite Sua Senha Novamente" required>

					<input class="submit" type="submit" name="cadastro" value="Criar">
					<p id="login">Tenho uma conta</p>
				</form>
			</div>
		</section>
		<footer class="footer">
			<div class="footer-developer">
				Desenvolvido por <br/><span class="developer">Vinícius Siqueira</span> & <span class="developer">Guilherme Azis</span>
			</div>
			<div class="footer-copyright">
				<button><a href="home.php">Botão Provisório: Ir ao Site</a></button>
			</div>
		</footer>
	</body>
</html>

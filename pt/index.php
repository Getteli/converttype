<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- meta's -->
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0055ff">

    <!-- favicon -->
    <link rel="shortcut icon" href="../_assets/images/favicon.ico" />

    <!-- search google -->
    <meta name="description" content="Converta diversos tipos de formatos (tanto video, audio, imagens) para outros formatos online."/>
    <meta name="keywords" content="converttype, convert type, convert, convert online, midia, type, converter, midias, mp3, mp4, converter video, converter musica, video, musica, audio, formatos, online"/>

    <!-- OG facebook -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="pt/index.php">
    <meta property="og:title" content="Convert Type">
    <meta property="og:site_name" content="converttype">
    <meta property="og:description" content="Converta diversos formatos (tanto video, audio, imagens) para outros formatos online.">
    <meta property="og:image" content="../_assets/images/logo.png">
    <meta property="og:image:secure_url" content="https://converttype.com/_assets/images/logo.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="150"> <!-- pixel -->
    <meta property="og:image:height" content="150"> <!-- pixel -->
    <meta property="og:type" content="website">

    <!-- title -->
    <title>Convert Type</title>

    <!-- Icones materilalize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../_assets/layout/index.min.css">
  </head>
  <body id="begin">
    <div class="row">
      <div class="col l3 m3 mob green">
        p
      </div>
      <div class="col s12 m6 l6 yellow">
        p
      </div>
      <div class="col m3 l3 mob green">
        p
      </div>
    </div>
    <div class="mob tab propsider">
      <div class="col m3 l3 propside red">
        p
      </div>
      <div class="col m3 l3 propside blue">
        p2
      </div>
    </div>
    <div class="mob tab propsidel">
      <div class="col m3 l3 propside red">
        p
      </div>
      <div class="col m3 l3 propside blue">
        p2
      </div>
    </div>
    <main>
      <div class="container">
        <div class="navbar">
            <nav>
                <div class="nav-wrapper center colorprimary">
                    <a href="#" class="pos-logo-top"><img src="../_assets/images/converttype_negative.png" alt="CONVERTTYPE.com" class="pos-logo-top"></a>
                </div>
            </nav>
        </div>

        <div class="row colorprimary nospacerow">
          <div class="col s12 m12 l12 center white-text">
            <h3 id="convert_to">PARA MP3</h3>
          </div>
        </div>
        <!-- menu -->
        <div class="navbar">
            <nav class="nav-center">
                <div class="nav-wrapper colorprimary">
                    <!-- icon open menu no mobile -->
                    <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="navbar-items" class="hide-on-med-and-down">
                        <li><a href="#begin" class="begin">INÍCIO</a></li>
                        <li><a href="#about" class="about">SOBRE</a></li>
                        <li><a class="link mp3">MP3</a></li>
                        <li><a href="#" class="link mp4">MP4</a></li> <!-- disabledtext -->
                        <li><a href="#" class="disabledtext">WAV</a></li>
                        <li><a href="#" class="disabledtext">OGG</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="mobile-navbar" class="sidenav">
            <li><a href="#begin">INÍCIO</a></li>
            <li><a href="#about" class="about">SOBRE</a></li>
            <li><a class="link mp3">MP3</a></li>
            <li><a href="#" class="link mp4">MP4</a></li> <!-- disabledtext -->
            <li><a href="#" class="disabledtext">WAV</a></li>
            <li><a href="#" class="disabledtext">OGG</a></li>
        </ul>
      </div>
      <!-- content -->
      <div class="container background">
        <div class="row">
            <div class="col s12 m12 l10 offset-l1 white container-input" style="width:90%!important;margin-left:5%!important;margin-bottom:50px;">
              <form method="post" id="formconv">
                <div class="row margin_form">
                  <!-- options -->
                  <div class="col s12 m12 l12">
                    <h5>OPÇÕES</h5>
                    <p class="options">
                      <a id="t_url" class="selectedlink link">via url</a> |
                      <a id="t_input" class="link">upload</a>
                    </p>
                    <p class="options">
                      <a id="320" class="selectedlink link">320 kbps</a> |
                      <a id="256" class="link">256 kbps</a> |
                      <a id="192" class="link">192 kbps</a> |
                      <a id="128" class="link">128 kbps</a>
                    </p>
                  </div>
                  <!-- input -->
                  <div class="col s12 m12 l10">
                        <div class="col s12 m12 l10 col_input">
                          <input type="number" class="none disabled" name="type" id="type" value="1">
                          <input class="input_target" id="input_url" name="input_url" required placeholder="https://www.youtube.com/watch...."/>
                          <div id="div_input_file" class="div_input_file disabled none">
                            <label for="input_file" class="colorprimary" id="lb_input_file">Subir</label>
                            <input type="file" class="input_file disabled none" id="input_file" name="input_file">
                          </div>
                        </div>
                        <div class="col s6 offset-s3 m6 offset-m3 l2 center">
                          <p id="convert_to2">PARA MP3</p>
                        </div>
                    </div>
                  <!-- btn -->
                  <div class="row margin_form center center-align">
                    <div class="col s12 m12 l2 marginline">
                      <button type="button" name="btn_convert" id="btn_convert" class="btn-ct btn colorprimary">CONVERTER</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row margin_form center center-align">
                <div class="col s12 m12 l12 marginline">
                  <a href="#" id="linktodownload"><button class="btn green btn-ct2">BAIXAR</button></a>
                </div>
              </div>
            </div>
        </div>
      </div>

      <!--  -->
      <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3 yellow">
          p
        </div>
      </div>

      <div class="row">
        <div class="col l12">
          <div class="container" id="about">
            <p class="desc"><b>ConvertType</b> é um conversor de vídeos por link para os mais diversos formatos de aúdio. Inicialmente disponibilizamos para MP3, logo teremos mais opções e outros tipos de conversões, seja por link ou arquivo. Graça aos desenvolvedores deste projeto, estamos disponibilizando para todos. Fique a vontade, aproveite. Caso use <b>AdBlock</b> ou qualquer outro <b>bloqueador de anúncios</b>, por favor desative para podermos manter o site no ar para o seu uso e de outros que necessitam. Obrigado pela compreensão &#128522;</p>
          </div>
        </div>
      </div>

      <!--  -->
      <div class="row">
        <div class="col s12 m6 offset-m3 l6 offset-l3 yellow">
          p
        </div>
      </div>

      <!-- footer -->
      <footer class="page-footer colorprimary pos-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">SOBRE</h5>
              <p class="grey-text text-lighten-4 desc">Todos os direitos são livres, apenas fazemos para a utilidade e uso do dia a dia de todos que possam precisar.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Converter para</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">MP3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">MP4</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">OGG</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">WAV</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2020 Copyright
          <a class="grey-text text-lighten-4 right" href="#!">Ilion Tecnologia</a>
          </div>
        </div>
      </footer>
    </main>
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../_assets/scripts/script.js"></script>
    <script src="../_assets/scripts/index.js"></script>

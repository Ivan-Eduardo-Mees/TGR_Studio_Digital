<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
  
  <link href="Style.css" rel="stylesheet">
</head>

<body>
  <!--Menu-->
  <header>
    <div class="container-fluid">
      <div class="row header">
        <div class="col-md-5 alignMidle">
          <img src="IMG/logo-tgr.png" class="imgHeader" alt="">
        </div>
        <div class="col-md-7 responseNavbar ">
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><label class="labelHeader head1">HOME</label></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><label class="labelHeader head2">EMPRESA</label></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><label class="labelHeader head3">SERVIÇOS</label></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><label class="labelHeader head4">NOTÍCIAS</label></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><label class="labelHeader head5">CONTATO</label></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

  </header>
  <!--Fim Menu-->

  <!--Banner-->
  <section>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators ">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="IMG/Banner.png" alt="Los Angeles" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
          <img src="IMG/Banner.png" alt="Chicago" class="d-block" style="width:100%;">
        </div>
        <div class="carousel-item">
          <img src="IMG/Banner.png" alt="New York" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
          <img src="IMG/Banner.png" alt="New York" class="d-block" style="width:100%">
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <div class="boxPrev">
          <span class="carousel-control-prev-icon"></span>
        </div>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <div class="boxNext">
          <span class="carousel-control-next-icon"></span>
        </div>
      </button>
    </div>

  </section>
  <!--Fim Banner-->

  <!--Quem Somos-->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <img src="IMG/QuemSomos.png" class="imgQuemSomos">
        </div>
        <div class="col-md-6">
          <div class="quemSomosText">
            <label class="quemSomosTitulo">QUEM SOMOS</label>
            <label class="quemSomosTexto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</label>
            <br><br>
            <button type="button" class="quemSomosButton">CONHEÇA MAIS SOBRE</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Fim Quem Somos-->

  <!--Serviço-->
    <section class="servicos">
      <div class="conteudo servicos">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <img src="IMG/iconeLeft.png" alt="">
              <br><br>
              <label class="servicosTitulo">Título do Serviço</label>
              <label class="servicosText">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</label>
              <br><br>
              <button type="button" class="buttonServico">SAIBA MAIS</button>
              <br><br>
            </div>

            <div class="col-md-4">
              <img src="IMG/iconeMidle.png" alt="">
              <br><br>
              <label class="servicosTitulo">Título do Serviço</label>
              <label class="servicosText">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</label>
              <br><br>
              <button type="button" class="buttonServico">SAIBA MAIS</button>
              <br><br>
            </div>
            <br><br>
            <div class="col-md-4">
              <img src="IMG/iconeRight.png" alt="">
              <br><br>
              <label class="servicosTitulo">Título do Serviço</label>
              <label class="servicosText">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</label>
              <br><br>
              <button type="button" class="buttonServico">SAIBA MAIS</button>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--Fim Serviço-->

  <!--Noticias-->
  <section>
    <div class="iframeNoticias">
      <script type="text/javascript">
          function calcHeight(iframeElement) {
            var the_height = iframeElement.contentWindow.document.body.scrollHeight;
            iframeElement.height = the_height ;
          }
        
      </script>
      <iframe src="./noticias.php" onLoad="calcHeight(this);" frameborder="0" scrolling="no" id="the_iframe" width="100%" style="display: block;"></iframe>
    </div>
  </section>
  <!--Fim Noticias-->

  <!--Rodapé-->
  <footer class="footer">
    <div class="conteudo footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <img src="IMG/logo-tgr.png" class="imgFooter" alt="">
          </div>
          <div class="col-md-4 alignCenterLeft">
            <label class="footerText">© 2021 Copyright. Todos os Direitos Reservados.</label>
          </div>
          <div class="col-md-4 alignMidleLeft">
            <label class="footerText">Desenvolvido por TGRStudio</h6></label>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Fim Rodapé-->


</body>


</html>
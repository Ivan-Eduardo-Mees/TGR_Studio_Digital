<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/compiled-4.20.0.min.css">
  <link rel="stylesheet" href="Style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
</head>

<body>

  <div class="conteudo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 noticiasTitulo">
          <label class="noticiaTituloHeader">NOTÍCIAS RECENTES</label>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="alignRight">
            <div class="noticiasNextPrev">
              <a class="btn-floating alignMidle" href="#carousel-example-multi" data-slide="prev">
                <img src="IMG/NoticiasPast.png" alt="">
              </a>
            </div>
            <div class="noticiasNextPrev">
              <a class="btn-floating alignMidle" href="#carousel-example-multi" data-slide="next">
                <img src="IMG/NoticiasNext.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fim Header-->
  <div class="conteudo noticiasImagens">
    <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">


      <div class="carousel-inner v-2" role="listbox">

        <?php

        $dadosJson = file_get_contents('data.json');

        $dadosJsonDecodificados = json_decode($dadosJson, true);

        $controle = 0;

        foreach ($dadosJsonDecodificados['data'] as $noticia) {

          if ($noticia['status']['name'] == 'Publicado') {

            if ($controle == 0) {
              echo '<div class="carousel-item active">
                  <div class="col-12 col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="IMG/Noticia01.png" class="imgNoticias">
                      <div class="card-body" >
                        <label class="card-title noticiasTituloConteudo">' . $noticia['category']['title'] .
                ' / 18 de Novembro, 2016 </label>
                          <label class="card-text noticiasText"> Companhia divulga novidades para Europa e Alasca </label>
                        </div>
                      </div>
                    </div>
                  </div>';
              $controle++;
            } else {
              echo '<div class="carousel-item">
                  <div class="col-12 col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="IMG/Noticia02.png" class="imgNoticias">
                      <div class="card-body">
                        <label class="card-title noticiasTituloConteudo">' . $noticia['category']['title'] .
                ' / 18 de Novembro, 2016 </label>
                          <p class="card-text">' . $noticia['title'] . '</p>
                        </div>
                      </div>
                    </div>
                  </div>';
            }
          }
        }

        ?>

        <script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/bundles/4.20.0/compiled.min.js"></script>

        <script>
          $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
            var next = $(this).next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 4; i++) {
              next = next.next();
              if (!next.length) {
                next = $(this).siblings(':first');
              }
              next.children(':first-child').clone().appendTo($(this));
            }
          });
        </script>
</body>

</html>
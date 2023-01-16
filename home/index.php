<!--INCLUDES DO PHP-->
<?php
    include "../vars/vars_landing.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../estilos/src/imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/banner1.css">
    <link rel="stylesheet" href="../estilos/banner2.css">
    <link rel="stylesheet" href="../estilos/banner3.css">
    <link rel="stylesheet" href="../estilos/banner4.css">
    <link rel="stylesheet" href="../estilos/banner5.css">
    <link rel="stylesheet" href="../estilos/banner6.css">
    <link rel="stylesheet" href="../estilos/banner7.css">
    <link rel="stylesheet" href="../estilos/index.css">

    <title> <?php echo $row_tb_configuracoes["tag_title"]; ?> </title>

</head>

<body>

    <!--COMEÇO BANNER 1-->
    
    <div class="fundo-banner1">

        <div class="conteudo-banner1">

            <img src="../estilos/src/imagens/logo_xbox.png" alt="logo_xbox_series_x" class="logo-xbox-banner1">

            <h1> 
                <span class="fonte-titulo-branco">
                    <?php echo $row_tb_textos_banner1["titulo_banner1"]; ?>
                </span>
                <span class="fonte-titulo-verde">
                    <?php echo $row_tb_textos_banner1["titulo_verde_banner1"]; ?>
                </span>
            </h1> 

        </div>

    </div>
    
    <!--FIM BANNER 1-->

    <!--COMEÇO BANNER 2-->
    
    <div class="fundo-banner2">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 alinhamento-coluna-banner2">
                    <div class="titulo-banner2">
                        <h1> "<?php echo $row_tb_textos_banner2["titulo_banner2"]; ?>" </h1>
                    </div>
                    <div class="subtitulo-banner2">
                        <h5> <?php echo $row_tb_textos_banner2["subtitulo_banner2"]; ?> </h5>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="../estilos/src/imagens/console_seriesx.png" alt="series-x" class="xbox-banner2">
                </div>
            </div>
        </div>
    </div>

    <!--FIM BANNER 2-->

    <!--COMEÇO BANNER 3-->

    <div class="fundo-banner3">
        <div class="container-lg">

            <div class="row">

                <div class="col-lg-3 alinhamento-coluna-banner3">
                    <h1 class="sombra-texto"> <?php echo $row_tb_textos_banner3["titulo_1"]; ?> </h1>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3 alinhamento-coluna-banner3">
                    <h1 class="sombra-texto titulo-banner3"> <?php echo $row_tb_textos_banner3["sub1_titulo_1"] ?> </h1>
                    
                    <h5 class="sombra-texto"> <?php echo $row_tb_textos_banner3["sub2_titulo_1"] ?> </h5>
                </div>

                <div class="col-lg-3 alinhamento-coluna-banner3">
                    <h1 class="sombra-texto"> <?php echo $row_tb_textos_banner3["titulo_2"]; ?> </h1>

                    <h5 class="sombra-texto"> <?php echo $row_tb_textos_banner3["sub_titulo_2"]; ?> </h5>
                </div>

                <div class="col-lg-3 alinhamento-coluna-banner3">
                    <h1 class="sombra-texto"> <?php echo $row_tb_textos_banner3["titulo_3"]; ?> </h1>

                    <h5 class="sombra-texto"> <?php echo $row_tb_textos_banner3["sub_titulo_3"]; ?> </h5>
                </div>

                <div class="col-lg-3 alinhamento-coluna-banner3">
                    <img src="../estilos/src/imagens/velocity_logo.png" alt="xbox-velocity-architecture" class="xbox-velocity">

                    <h5 class="sombra-texto">  <?php echo $row_tb_textos_banner3["sub_titulo_4"]; ?> </h5>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 alinhamento-coluna-banner3 slogan-banner3">
                    <h1 class="sombra-texto"> <?php echo $row_tb_textos_banner3["titulo_5"]; ?> </h1>
                </div>
            </div>

        </div>
    </div>

    <!--FIM BANNER 3-->

    <!--COMEÇO BANNER 4-->
    <div class="fundo-banner4">

        <div class="container-lg conteudo-banner4">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 coluna-banner4">
                    <h1 class="titulo-banner4"> <?php echo $row_tb_textos_banner4["titulo_banner4"]; ?> </h1>
                    <h5 class="paragrafo-banner4"> <?php echo $row_tb_textos_banner4["subtitulo_banner4"]; ?> </h5>
                </div>
            </div>
        </div>

    </div>
    <!--FIM DO BANNER 4-->

    <!--COMEÇO BANNER 5-->
    <div class="fundo-banner5">

        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 coluna-banner5">

                    <h1> <?php echo $row_tb_textos_banner5["titulo_banner5"]; ?> </h1>

                    <h2 class="paragrafo-banner5"> <?php echo $row_tb_textos_banner5["subtitulo_banner5"]; ?> </h2>

                    <div class="botao-detalhes-controle">
                        <a href="https://www.xbox.com/pt-BR/accessories/controllers/xbox-wireless-controller" 
                        class="texto-detalhes">Detalhes do controle</a>
                    </div>

                </div>

                <div class="col-lg-6"></div>
            </div>
        </div>

    </div>
    <!--FIM BANNER 5-->

    <!--COMEÇO DO BANNER 6-->
    <div class="fundo-banner6">

        <div class="titulo-banner6">
            <h1> <?php echo $row_tb_textos_banner6["titulo_banner6"]; ?> </h1>
            <h2 class="subtitulo-banner6"> <?php echo $row_tb_textos_banner6["subtitulo_banner6"]; ?> </h2>
        </div>

        <div class="container-lg">
            <div class="row">

                <div class="col-lg-3 zoom">
                    <a href="https://www.xbox.com/pt-BR/games/a-plague-tale-requiem"><img src="../estilos/src/imagens/banner6_game1.jpg" alt="a-plague-tale" class="game-banner6"></a>
                </div>

                <div class="col-lg-3 zoom">
                    <a href="https://www.xbox.com/pt-BR/games/starfield"><img src="../estilos/src/imagens/banner6_game2.jpg" alt="starfield" class="game-banner6"></a>
                </div>

                <div class="col-lg-3 zoom">
                    <a href="https://www.xbox.com/pt-BR/games/store/deathloop/9P5Z4530318L/0010"><img src="../estilos/src/imagens/banner6_game3.jpg" alt="deathloop" class="game-banner6"></a>
                </div>

                <div class="col-lg-3 zoom">
                    <a href="https://www.xbox.com/pt-BR/games/halo-infinite"><img src="../estilos/src/imagens/banner6_game4.jpg" alt="halo_infinite" class="game-banner6"></a>
                </div>

            </div>
        </div>
    </div>
    <!--FIM DO BANNER 6-->

    <!--COMEÇO DO BANNER 7-->
    <div class="fundo-banner7">
        <div class="conteudo-banner7">
            <h1 class="titulo-banner7"> <?php echo $row_tb_textos_banner7["titulo_banner7"]; ?> </h1><br>
            <h2 class="subtitulo-banner7"> <?php echo $row_tb_textos_banner7["subtitulo_banner7"]; ?> </h2><br>
            
            <form action="preVenda.php" method="post">
                <label for="email-pre-venda">E-MAIL</label>
                <input type="email" name="email_pre_venda">
                <button type="submit" class="btn btn-light">ENVIAR</button>
            </form>
        </div>
    </div>
    <!--FIM DO BANNER 7-->
    
</body>

</html>
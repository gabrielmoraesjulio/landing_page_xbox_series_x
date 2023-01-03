<?php session_start();
    include ("bd.php");
    include ("valida_pg.php");

    $sql_tb_textos_banner1 = " SELECT *  FROM tb_textos_banner1 ";
    $res_tb_textos_banner1 = mysqlexec($id,$sql_tb_textos_banner1);
    $row_tb_textos_banner1 = mysqli_fetch_array($res_tb_textos_banner1,MYSQLI_ASSOC);
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="estilos/src/imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/admin.css">

    <title>Admin</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="admin.php">
                <img src="estilos/src/imagens/logo-xbox-admin.png" alt="logo-xbox" class="logo-navbar">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin.php"><span class="item-ativo-navbar">Xbox Series X</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xbox Series S</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gamepass</a>
                    </li>
                </ul>
            </div>

        </nav>

    </header>

    <div>

        <h1>HEADER  </h1>

        <form action="alterar_admin.php" method="post">

            <input type="text" name="titulo_banner1" value="<?php echo $row_tb_textos_banner1["titulo_banner1"]; ?>">

            <input type="text" name="titulo_verde_banner1" value="<?php echo $row_tb_textos_banner1["titulo_verde_banner1"]; ?>">

            <button type="submit">ALTERAR</button>

        </form>
        
    </div>

    <a href="logout.php">SAIR</a>
    
</body>

</html>
<?php session_start();
    include ("../vars/bd.php");
    include ("../validacoes/valida_pg.php");
    include ("../vars/vars_admin.php");
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/cadastro.css">
    <link rel="stylesheet" href="../estilos/admin-landing.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="shortcut icon" href="../estilos/src/imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Admin</title>
</head>

<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="../admin/admin.php">
            <img src="../estilos/src/imagens/logo-xbox-admin.png" alt="logo-xbox" class="logo-navbar">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../admin/admin.php">Xbox Series X</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Xbox Series S</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gamepass</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../cadastro.php"><span class="item-ativo-navbar">Cadastro</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login/logout.php">Sair</a>
                </li>
            </ul>
        </div>

    </nav>

</div>

<div class="alinhamento">
    <div class="formulario-cadastro-admin">
        <form action="../validacoes/valida_cadastro.php" method="post">

            <label for="novo_usuario">Novo Usuario</label><br>
            <input type="text" name="novo_usuario" id="novo_usuario"><br>

            <label for="senha" class="mt-lg-3">Senha</label><br>
            <input type="password" name="senha" id="senha"><br>

            <label for="confirma_senha" class="mt-lg-3">Confirmar senha</label><br>
            <input type="password" name="confirma_senha" id="confirma_senha"><br>

            <button type="submit" class="btn btn-dark mt-lg-3 mb-lg-2">CADASTRAR</button><br>

            <span style="color:red;"><?php 
            echo $_SESSION["usuario_existente"] ?? ""; 
            echo "<br>";
            echo $_SESSION["confirma_senha"] ?? ""; 
            ?></span>

            <span style="color:green;"><?php 
            echo $_SESSION["cadastro_concluido"] ?? "";
            ?></span>
        </form>
    </div>
</div>

</body>
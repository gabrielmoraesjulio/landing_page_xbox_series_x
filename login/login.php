<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/login_admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../estilos/src/imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Login Admin</title>
</head>
<body>
    <div class="formulario-de-login">
        <form action="../vars/vars_validacao_admin.php" method="post">
            <input type="text" name="usuario" placeholder="Usuário" class="form-control input-formulario">
            <input type="password" name="senha" placeholder="Senha" class="form-control input-formulario">
            <button type="submit" class="input-formulario btn btn-dark">Enviar</button><br>
            <span class="text-danger"><?php
            echo $_SESSION['erro'] ?? "";
            echo $_SESSION['erro_de_pagina'] ?? "";
            ?></span>
        </form>
    </div>
</body>
</html>

<?php 
session_unset(); 
session_destroy(); 
?>
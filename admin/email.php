<?php session_start();
    include ("../vars/bd.php");
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/admin-landing.css">
    <link rel="stylesheet" href="../estilos/email.css">

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
                    <a class="nav-link" href="admin.php">Xbox Series X</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../admin/email.php"><span class="item-ativo-navbar">E-mail</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/cadastro.php">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/usuarios.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login/logout.php">Sair</a>
                </li>
            </ul>
        </div>
        
    </nav>

</div>

<div class="form-email">

    <h1>Envie seu e-mail</h1>

    <!--Mensagem ao enviar o e-mail-->
    <div class="m-lg-3">
        <span style="color:red;">
            <?php 
                echo $_SESSION["erro_enviar_email"] ?? "";
                $_SESSION["erro_enviar_email"] = "";
            ?>
        </span>
        <span style="color:green;">
            <?php 
                echo $_SESSION["enviar_email"] ?? "";
                $_SESSION["enviar_email"] = ""; 
            ?>
        </span>
    </div>

    <!--Formulário de E-mail-->
    <form enctype="multipart/form-data" action="../validacoes/valida_email.php" method="post">

        <label for="seu_nome">Seu Nome</label><br>
        <input type="text" id="seu_nome" name="seu_nome"><br><br>

        <label for="nome">Nome (Destinatário)</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">E-mail</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="assunto">Assunto</label><br>
        <input type="text" id="assunto" name="assunto"><br><br>

        <textarea name="corpo_email" id="corpo_email" cols="40" rows="5"></textarea><br><br>

        <label for="anexo"></label>
        <input type="file" name="anexo" id="anexo"><br><br>

        <button type="submit" class="btn btn-dark" onclick="this.disabled = true; this.form.submit();">ENVIAR</button>
    </form>

</div>

</body>
</html>
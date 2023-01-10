<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar E-mail</title>
</head>
<body>
    <form enctype="multipart/form-data" action="../validacoes/valida_email.php" method="post">

        <label for="seu_nome">Seu Nome</label>
        <input type="text" id="seu_nome" name="seu_nome"><br><br>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="assunto">Assunto</label>
        <input type="text" id="assunto" name="assunto"><br><br>

        <textarea name="corpo_email" id="corpo_email" cols="40" rows="10"></textarea><br><br>

        <label for="anexo"></label>
        <input type="file" name="anexo" id="anexo"><br><br>

        <button type="submit" onclick="this.disabled = true; this.form.submit();">ENVIAR</button>
    </form>
</body>
</html>
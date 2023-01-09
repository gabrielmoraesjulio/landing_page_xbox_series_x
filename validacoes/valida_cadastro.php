<?php session_start();

    include ("../vars/bd.php");

    //VARIÁVEIS RECEBIDAS E TRATADAS VIA METODO POST
    $novo_user = mysqli_real_escape_string($id, trim( $_POST["novo_usuario"] ) );
    $senha = mysqli_real_escape_string($id, trim( md5( $_POST["senha"] ) ) );
    $confirma_senha = mysqli_real_escape_string($id, trim( md5( $_POST["confirma_senha"] ) ) );

    //COMANDO SQL PARA VERIFICAR OS USUARIOS REGISTRADOS NO BANCO DE DADOS
    $sql_tb_login_admin_listar = " SELECT COUNT(*) AS TOTAL FROM tb_login_admin WHERE usuario='$novo_user' ";
    $res_tb_login_admin_listar = mysqlexec($id, $sql_tb_login_admin_listar);
    $row_tb_login_admin_listar = mysqli_fetch_assoc($res_tb_login_admin_listar);

    //CONDIÇÕES DE LOGIN *USUARIO*
    if ($row_tb_login_admin_listar["TOTAL"] == 1) {
        $_SESSION["usuario_existente"] = "Este nome de usuário já existe!";
        header("Location: ../admin/cadastro.php");
        die();
    } else {
        $_SESSION["usuario_existente"] = "";
        header("Location: ../admin/cadastro.php");
    }

    //CONDIÇÕES DE LOGIN *SENHA*
    if ($senha != $confirma_senha) {
        $_SESSION["confirma_senha"] = "As senhas precisam ser iguais, tente novamente.";
        header("Location: ../admin/cadastro.php");
        die();
    } else {
        $_SESSION["confirma_senha"] = "";
        header("Location: ../admin/cadastro.php");
    }

    //MENSAGEM CADASTRO EFETUADO
    if ($senha == $confirma_senha or $row_tb_login_admin_listar["TOTAL"] == 0) {
    
        $_SESSION["cadastro_concluido"] = "Cadastrado concluído!";

    } else {

        $_SESSION["cadastro_concluido"] = "";
    }

    $sql_cadastrar_usuario = "INSERT INTO `tb_login_admin`(`cod_usuarios`, `usuario`, `senha`) VALUES (NULL,'$novo_user','$confirma_senha')";

    mysqlexec($id, $sql_cadastrar_usuario);

    header("Location: ../admin/cadastro.php");

?>
<?php session_start();

    include ("../vars/bd.php");
    include ("../validacoes/valida_pg.php");
    include ("../vars/vars_admin.php");

    $novo_user = $_POST["novo_usuario"];
    $senha = $_POST["senha"];
    $confirma_senha = $_POST["confirma_senha"];

    $sql_tb_login_admin_listar = " SELECT *  FROM tb_login_admin ";
    $res_tb_login_admin_listar = mysqlexec($id,$sql_tb_login_admin_listar);

    while($row_tb_login_admin_listar = mysqli_fetch_array($res_tb_login_admin_listar,MYSQLI_ASSOC)) {

        $listar_usuario = $row_tb_login_admin_listar["usuario"];

    };
    

    if ($novo_user == $listar_usuario) {

        $_SESSION["erro_cadastro"] = "Este usuário já existe!";
        header("Location: ../admin/cadastro.php");

    } elseif ($novo_user != $listar_usuario) {

        $_SESSION["erro_cadastro"] = "Deu certo";
        header("Location: ../admin/cadastro.php");

    };
?>
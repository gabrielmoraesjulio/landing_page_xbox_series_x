<?php

$usuario = $_SESSION["usuario"];
$senha = $_SESSION["senha"];

$sql_tb_login_admin = " SELECT * FROM tb_login_admin where usuario='$usuario' and senha='$senha' ";
$res_tb_login_admin = mysqlexec($id,$sql_tb_login_admin);
$total_tb_login_admin = mysqli_num_rows($res_tb_login_admin);

switch ($total_tb_login_admin) {
    case 0:
        header("Location: login.php");
        $_SESSION["erro_de_pagina"] = "Você não tem acesso";
        break;
    case 1:

        break;
}
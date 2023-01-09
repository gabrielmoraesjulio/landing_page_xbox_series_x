<?php session_start();

include ("../vars/bd.php");

######################### VARIÁVEIS #########################
//VALORES RECEBIDOS PELO FORMULARIO DE LOGIN
$usuario = mysqli_real_escape_string($id, trim( $_POST["usuario"] ) );
$senha = mysqli_real_escape_string($id, trim( md5( $_POST["senha"] ) ) );

$sql_tb_login_admin = " SELECT * FROM tb_login_admin where usuario='$usuario' and senha='$senha' ";
$res_tb_login_admin = mysqlexec($id,$sql_tb_login_admin);
$total_tb_login_admin = mysqli_num_rows($res_tb_login_admin);

switch ($total_tb_login_admin) {
    case 0:
        header("Location: ../login/login.php");
        $_SESSION["erro"] = "Login ou senha invalido!";
        break;
    case 1:
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        header("Location: ../admin/admin.php");
        break;
}
?>
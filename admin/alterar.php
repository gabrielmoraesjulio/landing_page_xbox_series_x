<?php

include ("../vars/bd.php");

//Comando MySQL
$sql_tb_login_admin_listar = "UPDATE tb_login_admin SET usuario='$_POST[altera_usuario]'
                                                    WHERE cod_usuarios='$_POST[cod_usuarios]' ";


//Trazer resultado
$res_tb_login_admin_listar = mysqlexec($id, $sql_tb_login_admin_listar);

//Voltar para a pagina index.php
header('Location: usuarios.php');
?>
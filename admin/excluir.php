<?php 

include ("../vars/bd.php");

//Puxei o ID do cliente
$cod = $_GET["cod"];

//Comando MySQL
$sql_excluir_usuario = " DELETE FROM tb_login_admin WHERE cod_usuarios=$cod ";

//Trazer resultado
mysqlexec($id, $sql_excluir_usuario);

//Voltar para a pagina usuarios
header('Location: ./usuarios.php');


?>
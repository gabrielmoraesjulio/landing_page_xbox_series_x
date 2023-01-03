<?php

session_start();

include ("bd.php");

//ALTERAR BANNER 1
    $sql_tb_textos_banner1 = " UPDATE tb_textos_banner1 SET 
                            titulo_banner1='$_POST[titulo_banner1]',
                            titulo_verde_banner1='$_POST[titulo_verde_banner1]' ";

    //Trazer resultado.
    mysqlexec($id,$sql_tb_textos_banner1);

//ALTERAR BANNER 2
    $sql_tb_textos_banner1 = " UPDATE tb_textos_banner2 SET 
                            titulo_banner1='$_POST[titulo_banner1]',
                            titulo_verde_banner1='$_POST[titulo_verde_banner1]' ";
    //Trazer resultado.
    mysqlexec($id,$sql_tb_textos_banner1);

//Voltar para a Admin
header("Location: admin.php");

?>
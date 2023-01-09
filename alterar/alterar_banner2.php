<?php

session_start();

include ("bd.php");

//ALTERAR BANNER 2
$sql_tb_textos_banner2 = " UPDATE tb_textos_banner2 SET 
                        titulo_banner2='$_POST[titulo_banner2]',
                        subtitulo_banner2='$_POST[subtitulo_banner2]' ";
                        //Trazer resultado.  
mysqlexec($id,$sql_tb_textos_banner2);

//Voltar para a Admin
header("Location: admin.php");

?>
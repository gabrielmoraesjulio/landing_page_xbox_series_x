<?php
include "bd.php";

################################################################################

//TAG TITLE DO HTML DA LANDING PAGE
$sql_tb_configuracoes = " SELECT tag_title FROM tb_configuracoes ";
$res_tb_configuracoes = mysqlexec($id,$sql_tb_configuracoes);
$row_tb_configuracoes = mysqli_fetch_array($res_tb_configuracoes,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 1 
$sql_tb_textos_banner1 = " SELECT * FROM tb_textos_banner1 ";
$res_tb_textos_banner1 = mysqlexec($id,$sql_tb_textos_banner1);
$row_tb_textos_banner1 = mysqli_fetch_array($res_tb_textos_banner1,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 2 
$sql_tb_textos_banner2 = " SELECT titulo_banner2, subtitulo_banner2 FROM tb_textos_banner2 ";
$res_tb_textos_banner2 = mysqlexec($id,$sql_tb_textos_banner2);
$row_tb_textos_banner2 = mysqli_fetch_array($res_tb_textos_banner2,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 3 
$sql_tb_textos_banner3 = " SELECT * FROM tb_textos_banner3 ";
$res_tb_textos_banner3 = mysqlexec($id,$sql_tb_textos_banner3);
$row_tb_textos_banner3 = mysqli_fetch_array($res_tb_textos_banner3,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 4 
$sql_tb_textos_banner4 = " SELECT * FROM tb_textos_banner4 ";
$res_tb_textos_banner4 = mysqlexec($id,$sql_tb_textos_banner4);
$row_tb_textos_banner4 = mysqli_fetch_array($res_tb_textos_banner4,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 5 
$sql_tb_textos_banner5 = " SELECT * FROM tb_textos_banner5 ";
$res_tb_textos_banner5 = mysqlexec($id,$sql_tb_textos_banner5);
$row_tb_textos_banner5 = mysqli_fetch_array($res_tb_textos_banner5,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 6 
$sql_tb_textos_banner6 = " SELECT * FROM tb_textos_banner6 ";
$res_tb_textos_banner6 = mysqlexec($id,$sql_tb_textos_banner6);
$row_tb_textos_banner6 = mysqli_fetch_array($res_tb_textos_banner6,MYSQLI_ASSOC);

################################################################################

//TEXTOS DO BANNER 7 
$sql_tb_textos_banner7 = " SELECT * FROM tb_textos_banner7 ";
$res_tb_textos_banner7 = mysqlexec($id,$sql_tb_textos_banner7);
$row_tb_textos_banner7 = mysqli_fetch_array($res_tb_textos_banner7,MYSQLI_ASSOC);


?>
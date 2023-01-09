<?php

$sql_tb_textos_banner1 = " SELECT *  FROM tb_textos_banner1 ";
$res_tb_textos_banner1 = mysqlexec($id,$sql_tb_textos_banner1);
$row_tb_textos_banner1 = mysqli_fetch_array($res_tb_textos_banner1,MYSQLI_ASSOC);

$sql_tb_textos_banner2 = " SELECT *  FROM tb_textos_banner2 ";
$res_tb_textos_banner2 = mysqlexec($id,$sql_tb_textos_banner2);
$row_tb_textos_banner2 = mysqli_fetch_array($res_tb_textos_banner2,MYSQLI_ASSOC);

$sql_tb_textos_banner3 = " SELECT *  FROM tb_textos_banner3 ";
$res_tb_textos_banner3 = mysqlexec($id,$sql_tb_textos_banner3);
$row_tb_textos_banner3 = mysqli_fetch_array($res_tb_textos_banner3,MYSQLI_ASSOC);

?>
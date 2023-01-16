<?php

include ("../vars/bd.php");

date_default_timezone_set('America/Sao_Paulo');
$quando = date('d/m/Y H:i');
$email = $_POST['email_pre_venda'];
$status = 1;

$sql_tb_emails_pre = "INSERT INTO `tb_emails`(`cod_email`, `email`, `status`, `data_cadastro`) 
                VALUES (NULL,'$email','$status','$quando')";

mysqlexec($id, $sql_tb_emails_pre);

header("Location: ../home/index.php");
?>
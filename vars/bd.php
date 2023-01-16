<?php
$dbname = "landing-page-xbox";
$usuario = "root";
$senha = "";

$id = mysqli_connect ("localhost", $usuario, $senha, $dbname);

mysqli_query($id, 'SET NAMES utf8');

if (mysqli_connect_error()) {
    printf("Connect failed: ",mysqli_connect_error());
    die();
}

function mysqlexec($id,$sql) {
    $res = mysqli_query($id, $sql);
    return $res;
    mysqli_free_result($res);
    mysqli_close($id);
}
?>
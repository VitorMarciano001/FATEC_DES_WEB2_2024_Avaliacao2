<?php
include 'classes/login.php';
session_start();

$login = new Login();

if(!$login->verificar_logado()){
    header("Location: index.php");
}

?>
<?php
session_start();

include 'classes/cadastro.php';

$cadastro = new Cadastro();

$vagas[] = $cadastro->listar_vagas();

$_SESSION["vagas"] = $vagas;
if(isset($_SESSION["vagas"]) && !empty($_SESSION["vagas"])){
    header("Locaion: home.php");
}
header("Location: listar_vaga.php");
exit;

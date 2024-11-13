<?php
session_start();

include 'classes/cadastro.php';

$cadastro = new Cadastro();

$vagas[] = $cadastro->listar_vagas();

$_SESSION["vagas"] = $vagas;

header("Location: listar_vaga.php");
exit;

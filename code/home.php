<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
</head>
<body style="height: 100vh; margin: 0px;">
    <center>
        <h2>Vagas de Estágio</h2>
    </center>
    
    <br>
    <a href="cadastro_vaga.php"><button >Cadastrar Vaga</button></a><br>
    <a href="listar_vaga.php"><button >Listar vagas</button></a><br>
    <a href="apagar_vaga.php"><button >Remover Vaga</button></a><br>
    <a href="login.php">Logout</a>
</body>
</html>
<?php
session_start();
include 'util/checa_logado.php';

if(isset($_SESSION["vagas"]) && !empty($_SESSION["vagas"])){
    $vagas = $_SESSION["vagas"][0] ?? "empty";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="display: flex; flex-direction: column ;justify-content: center; align-items: center; margin:0px; height:100vh;">
    <div>
        <ul>
            <?php
            foreach ($vagas['vagas'] as $vaga) {
                echo '<li style="display: flex; justify-content: center; align-items: center; gap: 10px; padding-top: 10px;">';
                echo '<strong>Nome da Empresa:</strong> ' . htmlspecialchars($vaga["nome_empresa"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '<strong>Numero do WhatsApp:</strong> ' . htmlspecialchars($vaga["numero_whatsapp"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '<strong>E-mail para contato:</strong> ' . htmlspecialchars($vaga["email_contato"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '<strong>Descrição da vaga:</strong> ' . htmlspecialchars($vaga["descritivo_vaga"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '<strong>Curso:</strong> ' . htmlspecialchars($vaga["curso"], ENT_QUOTES, 'UTF-8') . '<br>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>

    <div>
        <a href="home.php"><button>Voltar</button></a>
    </div>

</body>

</html>
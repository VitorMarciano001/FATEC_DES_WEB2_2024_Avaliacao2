<?php
session_start();
include 'util/checa_logado.php';

if (isset($_SESSION["vagas"]) && !empty($_SESSION["vagas"])) {
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

<body>
    <form action="apagar_vagas_controle.php" method="POST">
        <select name="delete" id="delete">
            <?php
            foreach ($vagas["vagas"] as $vaga) {
                echo '<option value="' . htmlspecialchars($vaga["id"]) . '">';
                echo  htmlspecialchars($vaga["nome_empresa"]);
                echo '</option>';
            }
            ?>
        </select>
        <button type="submit">Apagar Vaga</button>
    </form>
</body>

</html>
<?php
include 'util/checa_logado.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="height: 100vh; margin: 0px; display: flex; justify-content: center; align-items: center;">
    <div style="height: 80%; width: 70%; display: flex; justify-content: center; align-items: center;">
        <form action="cadastro_controle.php" method="POST">
                <label for="nome_empresa">Nome da Empresa</label><br>
                <input type="text" name="nome_empresa" id="nome_empresa" placeholder="Nome da Empresa"><br>
                <label for="numero_whatsapp">WhatsApp</label><br>
                <input type="text" name="numero_whatsapp" id="numero_whatsapp" placeholder="Nome da Empresa"><br>
                <label for="email_contato">E-mail para contato</label><br>
                <input type="text" name="email_contato" id="email_contato" placeholder="Nome da Empresa"><br>
                <label for="descritivo_vaga">Descricção da vaga</label><br>
                <textarea name="descritivo_vaga" id="descritivo_vaga" rows="4" cols="20" placeholder="Digite a descrição aqui"></textarea><br>
                <label for="curso">Curso</label>
                <select name="curso" id="curso">
                    <option value="1">DSM</option>
                    <option value="2">GE</option>
                </select><br>
                <div style="display: flex; justify-content: center; align-items: center; padding-top:10px;  ">
                    <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
                </div>
        </form>
    </div>
    
</body>
</html>
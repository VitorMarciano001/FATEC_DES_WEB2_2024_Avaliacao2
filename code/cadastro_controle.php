<?php
include 'classes/cadastro.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome_empresa = htmlspecialchars($_POST["nome_empresa"]);
    $numero_whatsapp = htmlspecialchars($_POST["numero_whatsapp"]);
    $email_contato = htmlspecialchars($_POST["email_contato"]);
    $descritivo_vaga = htmlspecialchars($_POST["descritivo_vaga"]);
    $curso = htmlspecialchars($_POST["curso"]);
    $cadastro = new Cadastro();

    if ($cadastro->cadastrar_vaga($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso)){
        session_start();
        $_SESSION["curso"] = $curso;
        header("Location: home.php");
    }else {
        echo "Falha";
    }    

}









?>
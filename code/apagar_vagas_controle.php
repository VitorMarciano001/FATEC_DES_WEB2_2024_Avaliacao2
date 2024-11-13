<?php
include 'classes/cadastro.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $con = new Cadastro();
    $id = htmlspecialchars($_POST["delete"]);


    $con->remove_vaga($id);
    header("Location: listar_vaga_controle.php");
    exit;

}




?>
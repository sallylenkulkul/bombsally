<?php
session_start();
    include("conecta.php");

    $nome  = $_POST["nome"];
    $cpf   = $_POST["cpf"];
    $sexo  = $_POST["sexo"];
    $fone  = $_POST["fone"];
    $idade = $_POST["idade"];
    $hospital  = $_POST["hospital"];
    $acomp     = $_POST["acomp"];
    $idade_acomp = $_POST["idade_acomp"];
    $local = $_POST["local"];
    $data = $_POST["data"];


    $comando = $pdo->prepare("INSERT INTO ficha_paciente VALUES ('','$nome','$cpf', '$sexo', $fone, $idade, '$hospital',
    '$acomp', $idade_acomp, '$local', '$data' )");
    $resultado = $comando->execute();

    $_SESSION["id"] = $pdo->lastInsertId();

    echo ("{\"resposta\":1}");

?>
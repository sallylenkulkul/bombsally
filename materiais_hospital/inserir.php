<?php
session_start();
$FK_IdOcorrencia = $_SESSION["id"];
    
    include("conecta.php");

    $disturbio = $_POST["disturbio"]?1:0;
    $capacete  = $_POST["capacete"]?1:0;
    $cinto  = $_POST["cinto"]?1:0;
    $parabrisa  = $_POST["parabrisa"]?1:0;
    $camin = $_POST["camin"]?1:0;
    $painel  = $_POST["painel"]?1:0;
    $volante = $_POST["volante"]?1:0;
   


    $comando = $pdo->prepare("INSERT INTO av_cinematica VALUES ($FK_IdOcorrencia, $disturbio, $capacete, 
    $cinto, $parabrisa, $camin, $painel, $volante)");
    $resultado = $comando->execute();


    echo ("{\"resposta\":1}");
    //$_SESSION["id"] = $pdo->lastInsertId();

?>
<?php
session_start();
$FK_IdOcorrencia = $_SESSION["id"];

    include("conecta.php");

    $causado  = isset($_POST["causado"])?1:0;
    $transporte  = isset($_POST["transporte"])?1:0;
    $desmor  = isset($_POST["desmor"])?1:0;
    $emerg  = isset($_POST["emerg"])?1:0;
    $queda2m  = isset($_POST["queda2m"])?1:0;
    $suicidio  = isset($_POST["suicidio"])?1:0;
    $quedaaltura  = isset($_POST["quedaaltura"])?1:0;
    $afogamento  = isset($_POST["afogamento"])?1:0;
    $agressao  = isset($_POST["agressao"])?1:0;
    $atrop  = isset($_POST["atrop"])?1:0;
    $choque  = isset($_POST["choque"])?1:0;
    $desab  = isset($_POST["desab"])?1:0;
    $dom  = isset($_POST["dom"])?1:0;
    $esp  = isset($_POST["esp"])?1:0;
    $intox  = isset($_POST["intox"])?1:0;
    $quedabic  = isset($_POST["quedabic"])?1:0;
    $quedamoto  = isset($_POST["quedamoto"])?1:0;
    $quedamenor2m  = isset($_POST["quedamenor2m"])?1:0;
    $trabalho  = isset($_POST["trabalho"])?1:0;
    $transf  = isset($_POST["transf"])?1:0;
    $outrotext  = isset($_POST["outrotext"])?1:0;

    


    $comando = $pdo->prepare("INSERT INTO tipo_ocorrencia VALUES ($FK_IdOcorrencia, $causado, $transporte, 
    $desmor, $emerg, $queda2m, $suicidio, $quedaaltura, $afogamento, $agressao, $atrop, $choque, $desab, 
    $dom, $esp, $intox, $quedabic, $quedamoto, $quedamenor2m, $trabalho, $transf, $outrotext )");
    $resultado = $comando->execute();


    echo ("{\"resposta\":1}");
    //_SESSION["id"] = $pdo->lastInsertId();

?>
<?php
session_start();
$FK_IdOcorrencia = 43;//$_SESSION["id"];

    include("conecta.php");

    $psiquiatrico  = isset($_POST["psiquiatrico"])?1:0;
    $respiratorio  = isset($_POST["respiratorio"])?1:0;
    $dpoc  = isset($_POST["dpoc"])?1:0;
    $inalac  = isset($_POST["inalac"])?1:0;
    $diabete  = isset($_POST["diabete"])?1:0;
    $hiperg  = isset($_POST["hiperg"])?1:0;
    $hipog  = isset($_POST["hipog"])?1:0;
    $outrotext1  = isset($_POST["outrotext1"])?'1':'0';

    $obstet  = isset($_POST["obstet"])?1:0;
    $parto  = isset($_POST["parto"])?1:0;
    $gestante  = isset($_POST["gestante"])?1:0;
    $hemorrexc  = isset($_POST["hemorrexc"])?1:0;
    $transp  = isset($_POST["transp"])?1:0;
    $aereo  = isset($_POST["aereo"])?1:0;
    $clinico  = isset($_POST["clinico"])?1:0;
    $emerg  = isset($_POST["emerg"])?1:0;
    $postrauma  = isset($_POST["postrauma"])?1:0;
    $samu  = isset($_POST["samu"])?1:0;
    $semrem  = isset($_POST["semrem"])?1:0;
    $outrotext2  = isset($_POST["outrotext2"])?'1':'0';

echo("INSERT INTO prob_encont_suspeitos VALUES ($FK_IdOcorrencia, $psiquiatrico, $respiratorio, $dpoc, $inalac, $diabete, $hipog, '$outrotext1', $obstet, $parto, $gestante, $hemorrexc, $transp, $aereo, $clinico, $emerg, $postrauma, $samu, $semrem, '$outrotext2' )");
    $comando = $pdo->prepare("INSERT INTO prob_encont_suspeitos VALUES ($FK_IdOcorrencia, $psiquiatrico, $respiratorio, $dpoc, $inalac, $diabete, $hiperg, $hipog, '$outrotext1', $obstet, $parto, $gestante, $hemorrexc, $transp, $aereo, $clinico, $emerg, $postrauma, $samu, $semrem, '$outrotext2' )");
    $resultado = $comando->execute();


    if ($resultado) {
        echo ("{\"resposta\":1}");
    } else {
        echo ("{\"resposta\":0}");
    }
?>
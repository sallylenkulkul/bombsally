<?php
session_start();
$FK_IdOcorrencia = $_SESSION["id"];

    include("conecta.php");

    $abdomen  = isset($_POST["abdomen"])?1:0;
    $afund  = isset($_POST["afund"])?1:0;
    $agit  = isset($_POST["agit"])?1:0;
    $amnesia  = isset($_POST["amnesia"])?1:0;
    $angina  = isset($_POST["angina"])?1:0;
    $apineia  = isset($_POST["apineia"])?1:0;
    $bradic  = isset($_POST["bradic"])?1:0;
    $bradip  = isset($_POST["bradip"])?1:0;
    $bronco  = isset($_POST["bronco"])?1:0;
    $cefaleia  = isset($_POST["cefaleia"])?1:0;
    $cianose  = isset($_POST["cianose"])?1:0;

    $labios  = isset($_POST["labios"])?1:0;
    $ext  = isset($_POST["ext"])?1:0;

    $conv  = isset($_POST["conv"])?1:0;
    $decort  = isset($_POST["decort"])?1:0;
    $deform  = isset($_POST["deform"])?1:0;

    $descereb  = isset($_POST["descereb"])?1:0;
    $desmaio  = isset($_POST["desmaio"])?1:0;
    $desviotraq  = isset($_POST["desviotraq"])?1:0;
    $disp  = isset($_POST["disp"])?1:0;
    $dorlocal  = isset($_POST["dorlocal"])?1:0;
    $edema  = isset($_POST["edema"])?1:0;

    $general  = isset($_POST["general"])?1:0;
    $local  = isset($_POST["local"])?1:0;

    $enfis  = isset($_POST["enfis"])?1:0;
    $estase  = isset($_POST["estase"])?1:0;
    $face  = isset($_POST["face"])?1:0;
    $hemorr  = isset($_POST["hemorr"])?1:0;

    $interna  = isset($_POST["interna"])?1:0;
    $externa  = isset($_POST["externa"])?1:0;

    $hiper  = isset($_POST["hiper"])?1:0;
    $hipo  = isset($_POST["hipo"])?1:0;
    $nausea  = isset($_POST["nausea"])?1:0;
    $nasor  = isset($_POST["nasor"])?1:0;
    $obito  = isset($_POST["obito"])?1:0;
    $otorreia  = isset($_POST["otorreia"])?1:0;
    $otorragia  = isset($_POST["otorragia"])?1:0;
    $parada  = isset($_POST["parada"])?1:0;

    $card  = isset($_POST["card"])?1:0;
    $resp  = isset($_POST["resp"])?1:0;

    $ovace  = isset($_POST["ovace"])?1:0;
    $priap  = isset($_POST["priap"])?1:0;
    $prurido  = isset($_POST["prurido"])?1:0;
    $pupilas  = isset($_POST["pupilas"])?1:0;

    $anisocoria  = isset($_POST["anisocoria"])?1:0;
    $isocoria  = isset($_POST["isocoria"])?1:0;

    $midriase  = isset($_POST["midriase"])?1:0;
    $miose  = isset($_POST["miose"])?1:0;

    $reag  = isset($_POST["reag"])?1:0;
    $nreag  = isset($_POST["nreag"])?1:0;

    $sede  = isset($_POST["sede"])?1:0;
    $battle  = isset($_POST["battle"])?1:0;
    $guax  = isset($_POST["guax"])?1:0;
    $sudorese  = isset($_POST["sudorese"])?1:0;
    $taquip  = isset($_POST["taquip"])?1:0;
    $taquic  = isset($_POST["taquic"])?1:0;
    $tontura  = isset($_POST["tontura"])?1:0;
    $outrotext  = isset($_POST["outrotext"])?1:0;



    $comando = $pdo->prepare("INSERT INTO sinais_sintomas VALUES 
    (:FK_IdOcorrencia, :abdomen, :afund, :agit, :amnesia, :angina, :apineia, :bradic, :bradip, :bronco, :cefaleia, 
    :cianose, :labios, :ext, :conv, :decort, :deform, :descereb, :desmaio, :desviotraq, :disp, :dorlocal, :edema, :general, :local, 
    :enfis, :estase, :face, :hemorr, :interna, :externa, :hiper, :hipo, :nausea, :nasor, :obito, :otorreia, :otorragia, :parada, :card, 
    :resp, :ovace, :priap, :prurido, :pupilas, :anisocoria, :isocoria, :midriase, :miose, :reag, :nreag, :sede, :battle, 
    :guax, :taquip, :taquic, :tontura, ':outrotext')");
    $resultado = $comando->execute();


    echo ("{\"resposta\":1}");
    //$_SESSION["id"] = $pdo->lastInsertId();

?>




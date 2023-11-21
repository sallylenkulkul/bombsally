<?php
session_start();
$FK_IdOcorrencia = 42; //$_SESSION["id"];

    include("conecta.php");
    
    $decisao_transp  = $_POST["decisao_transp"];

    $comando = $pdo->prepare("INSERT INTO decisao_transporte (FK_IdOcorrencia, decisao_transp) VALUES (:FK_IdOcorrencia,:decisao_transp)");
    $comando->bindParam(":FK_IdOcorrencia", $FK_IdOcorrencia);
    $comando->bindParam(":decisao_transp", $decisao_transp);
    $resultado = $comando->execute();

    echo ("{\"resposta\":1}");
    //$_SESSION["id"] = $pdo->lastInsertId();

?>
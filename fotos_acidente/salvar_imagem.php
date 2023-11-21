<?php
       session_start();
       $FK_IdOcorrencia = $_SESSION["id"];
       // ATENÇÃO: o tipo da coluna na tabela deve ser MEDIUMBLOB
        include("conecta.php");

        $arquivo = $_FILES["arquivo"]["tmp_name"];
        // Lê o conteúdo do arquivo de imagem e armazena na variável $imagem
        $imagem = file_get_contents($arquivo);
        //$imagem = $arquivo;
        
		$comando = $pdo->prepare("INSERT INTO fotos_acidente (FK_IdOcorrencia, arquivo) VALUES (:FK_IdOcorrencia, :arquivo)");
       
        $comando->bindParam(":FK_IdOcorrencia", $FK_IdOcorrencia);
        $comando->bindParam(":arquivo", $imagem, PDO::PARAM_LOB);
		$resultado = $comando->execute();
        
        // As linhas abaixo você usará sempre que quiser mostrar a imagem

        header("Location: fotos_acidente.php");

?>

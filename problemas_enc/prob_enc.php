<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas Encontrados Suspeitos</title>
    <link rel="stylesheet" href="prob_enc.css">
</head>

<body>
    <div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>
    
    <div class="quadrado">
        <div class="titulo"><br>
            <h2>Problemas <br> Encontrados Suspeitos </h2> <br>
        </div>

        <div class="ficha">
            <form action="inserir.php" method="post">
                <div class="forms">
                    <div class="opcoes">
                        <input type="checkbox" name="psiquiatrico"> &nbsp; Psiquiátrico <br><br>
                        <input type="checkbox" name="respiratorio"> &nbsp; Respiratório <br><br>
                        <input type="checkbox" name="dpoc"> &nbsp; DPOC <br><br>
                        <input type="checkbox" name="inalac"> &nbsp; Inalação Fumaça <br><br>
                        <input type="checkbox" name="diabete"> &nbsp; Diabetes <br><br>
                        <input type="checkbox" name="hiperg"> &nbsp; Hiperglicemia <br><br>
                        <input type="checkbox" name="hipog"> &nbsp; Hipoglicemia <br><br>
                        <input type="checkbox" name="outro1"> &nbsp; Outro: 
                        <input type="text" name="outrotext1" class="caixa"><br><br>

                        <input type="checkbox" name="obstet"> &nbsp; Obstétrico <br><br>
                        <input type="checkbox" name="parto"> &nbsp; Parto emergencial <br><br>
                        <input type="checkbox" name="gestante"> &nbsp; Gestante <br><br>
                        <input type="checkbox" name="hemorrexc"> &nbsp; Hemorragia excessiva <br><br>
                        <input type="checkbox" name="transp"> &nbsp; Transporte <br><br>
                        <input type="checkbox" name="aereo"> &nbsp; Aéreo <br><br>
                        <input type="checkbox" name="clinico"> &nbsp; Clínico <br><br>
                        <input type="checkbox" name="emerg"> &nbsp; Emergencial <br><br>
                        <input type="checkbox" name="postrauma"> &nbsp; Pós-trauma <br><br>
                        <input type="checkbox" name="samu"> &nbsp; SAMU <br><br>
                        <input type="checkbox" name="semrem"> &nbsp; Sem remoção <br><br>
                        <input type="checkbox" name="outro2"> &nbsp; Outro: 
                        <input type="text" name="outrotext2" class="caixa"><br><br>

                    </div>
                </div>

                <div class="botao">
                    <button type="submit" class="prox">Próximo</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
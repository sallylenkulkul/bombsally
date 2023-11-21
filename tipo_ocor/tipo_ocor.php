<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Ocorrência</title>
    <link rel="stylesheet" href="tipo_ocor.css">
</head>

<body>
    <div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>

    <div class="quadrado">
        <div class="titulo">
            <h2> Tipo de Ocorrência <br></h2>
               <h5>(pré-hospitalar)</h5> 
        </div>
        <div class="ficha">
            <form action="inserir.php" method="post">
                <div class="opcoes">
                    <input type="checkbox" name="causado" > &nbsp; Causado por animais <br><br>
                    <input type="checkbox" name="transporte" > &nbsp; Com meio de transporte <br><br>
                    <input type="checkbox" name="desmor" > &nbsp; Desmoronamento/Deslizamento <br><br>
                    <input type="checkbox" name="emerg" > &nbsp; Emergência médica <br><br>
                    <input type="checkbox" name="queda2m" > &nbsp; Queda de altura 2M <br><br>
                    <input type="checkbox" name="suicidio" > &nbsp; Tentativa de suicídio <br><br>
                    <input type="checkbox" name="quedaaltura" > &nbsp; Queda própria altura <br><br>
                    <input type="checkbox" name="afogamento" > &nbsp; Afogamento <br><br>
                    <input type="checkbox" name="agressao" > &nbsp; Agressão <br><br>
                    <input type="checkbox" name="atrop" > &nbsp; Atropelamento <br><br>
                    <input type="checkbox" name="choque" > &nbsp; Choque elétrico <br><br>
                    <input type="checkbox" name="desab" > &nbsp; Desabamento <br><br>
                    <input type="checkbox" name="dom" > &nbsp; Doméstico <br><br>
                    <input type="checkbox" name="esp" > &nbsp; Esportivo <br><br>
                    <input type="checkbox" name="intox" > &nbsp; Intoxicação <br><br>
                    <input type="checkbox" name="quedabic" > &nbsp; Queda bicicleta <br><br>
                    <input type="checkbox" name="quedamoto" > &nbsp; Queda moto <br><br>
                    <input type="checkbox" name="quedamenor2m" > &nbsp; Queda nível menor que 2m <br><br>
                    <input type="checkbox" name="trabalho" > &nbsp; Trabalho <br><br>
                    <input type="checkbox" name="transf" > &nbsp; Transferência <br><br>
                    <input type="checkbox" name="outro" > &nbsp; Outro: <input type="text" name="outrotext"
                        class="caixa"><br><br>

                    <div class="botao">
                        <button type="submit" class="prox">Próximo</button>
                    </div>

                </div>
                
            </form>
        </div>

    </div>

</body>

</html>
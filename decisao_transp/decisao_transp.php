<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão Transporte</title>
    <link rel="stylesheet" href="decisao_transp.css">
</head>

<body>

    <div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>

    <div class="quadrado">
        <div class="titulo">
            <h2> Decisão Transporte </h2>
        </div>
        
        <div class="ficha">
            <form action="inserir.php" method="post">
                <div class="opcoes">
                    <div class="emoji">
                        <img src="emoji_critico.png" width="50px">
                        <input type="radio" name="decisao_transp" class="op" value="critico"> Crítico <br><br>
                    </div>
                    <div class="emoji">
                        <img src="emoji_instavel.png" width="50px">
                        <input type="radio" name="decisao_transp" class="op" value="instavel"> Instável <br><br>
                    </div>
                    <div class="emoji">
                        <img src="emoji_pot_instavel.png" width="50px">
                        <input type="radio" name="decisao_transp" class="op" value="potencialmente instavel"> Potencialmente <br> instável <br><br>
                    </div>
                    <div class="emoji">
                        <img src="emoji_instavel.png" width="50px">
                        <input type="radio" name="decisao_transp" class="op" value="estavel"> Estável <br>
                    </div>
                </div>
                <br>
                <div class="botao">
                    <button type="submit" class="prox">Próximo</button>
                </div>
            </form>
        </div>
                    
    </div>
    
</body>

</html>
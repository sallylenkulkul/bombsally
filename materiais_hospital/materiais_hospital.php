<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiais Utilizados Deixados no Hospital</title>
    <link rel="stylesheet" href="materiais_hospital.css">
</head>

<body>
    <div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>
    <div class="quadrado">
        <div class="titulo"><br>
            <h2> Materiais Utilizados<br> Deixados no Hospital </h2> <br>
        </div>
        <div class="ficha">
            <form action="inserir.php" method="post">
                <div class="forms">
                    <div class="opcoes">
                        <div class="d1">
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Base do estabiliza.<br>
                                Quantidade:
                                <input type="number" name="quant"  id="nome" class="dadoss" /><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Colar<br>
                                <div class="tamanhos">
                                    <input type="radio" name="tamanho"  class="dadoss"/> N
                                    <input type="radio" name="tamanho"  class="dadoss"/> PP
                                    <input type="radio" name="tamanho"  class="dadoss"/> P
                                    <input type="radio" name="tamanho"  class="dadoss"/> M
                                    <input type="radio" name="tamanho"  class="dadoss"/> G
                                    <input type="radio" name="tamanho"  class="dadoss"/> <input type="text" name="tamanho"  class="tam"/> 
                                </div>
                                Quantidade:
                                <input name="quant" type="number" id="quant" class="dadoss"/><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Coxins estabiliza.<br>
                                Quantidade:
                                <input type="number" name="quant"  id="quant" class="dadoss" /><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> KED<br>
                                <div class="tamanhos">
                                    <input type="radio" name="tamanho"  class="dadoss"/> Adulto
                                    <input type="radio" name="tamanho"  class="dadoss"/> Infantil
                                    <br>    
                                Quantidade:
                                <input name="quant" type="number" id="quant" class="dadoss"/><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Maca rígida<br>
                                Quantidade:
                                <input type="number" name="quant"  id="quant" class="dadoss" /><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> T.T.F<br>
                                <div class="tamanhos">
                                    <input type="radio" name="tamanho"  class="dadoss"/> Adulto
                                    <input type="radio" name="tamanho"  class="dadoss"/> Infantil
                                    <br>    
                                Quantidade:
                                <input name="quant" type="number" id="quant" class="dadoss"/><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Tirante Aranha<br>
                                Quantidade:
                                <input type="number" name="quant"  id="quant" class="dadoss" /><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Tirante de Cabeça<br>
                                Quantidade:
                                <input type="number" name="nome"  id="nome" class="dadoss" /><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> Cânula<br>
                                Quantidade:
                                <input type="number" name="nome"  id="nome" class="dadoss" /><br><br>
                            </div>
                            <div class="p1">
                                <input type="checkbox" name="nome"  id="nome" class="dadoss"/> <input type="text" name="nome"  id="nome" class="outro" /><br>
                                Quantidade:
                                <input type="number" name="nome"  id="nome" class="dadoss" /><br><br>
                            </div>
                        </div>

                </div>

                <div class="botao">
                    <button type="submit" class="prox">Próximo</button>
                </div><br>

            </form>
        </div>

    </div>

</body>

</html>
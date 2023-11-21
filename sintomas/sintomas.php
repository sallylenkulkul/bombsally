<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinais e Sintomas</title>
    <link rel="stylesheet" href="sintomas.css">
</head>

<body>
    <div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>

    <div class="quadrado">
        <div class="titulo">
            <h2>Sinais e Sintomas</h2>
        </div>
        <div class="ficha">
            <form action="inserir.php" method="post">
                <div class="opcoes">
                    <input type="checkbox" name="abdomen" class="op"> &nbsp; Abdômen sensível ou rígido<br><br>
                    <input type="checkbox" name="afund" class="op"> &nbsp; Afundamento de crânio<br><br>
                    <input type="checkbox" name="agit" class="op"> &nbsp; Agitação <br><br>
                    <input type="checkbox" name="amnesia" class="op"> &nbsp; Amnésia <br><br>
                    <input type="checkbox" name="angina" class="op"> &nbsp; Angina de peito <br><br>
                    <input type="checkbox" name="apineia" class="op"> &nbsp; Apinéia <br><br>
                    <input type="checkbox" name="bradic" class="op"> &nbsp; Bradicardia <br><br>
                    <input type="checkbox" name="bradip" class="op"> &nbsp; Bradipnéia <br><br>
                    <input type="checkbox" name="bronco" class="op"> &nbsp; Bronco-aspirando <br><br>
                    <input type="checkbox" name="cefaleia" class="op"> &nbsp; Cefaléia <br><br>
                    <input type="checkbox" name="cianose" class="op"> &nbsp; Cianose <br>
                    <div class="opc">
                        <input type="radio" name="labios" class="op"> &nbsp; Lábios <br>
                        <input type="radio" name="ext" class="op"> &nbsp; Extremidade <br><br>
                    </div>
                   
                    <input type="checkbox" name="conv" class="op"> &nbsp; Convulsão <br><br>
                    <input type="checkbox" name="decort" class="op"> &nbsp; Decorticação <br><br>
                    <input type="checkbox" name="deform" class="op"> &nbsp; Deformidade <br><br>

                    <input type="checkbox" name="descereb" class="op"> &nbsp; Descerebração <br><br>
                    <input type="checkbox" name="desmaio" class="op"> &nbsp; Desmaio <br><br>
                    <input type="checkbox" name="desviotraq" class="op"> &nbsp; Desvio de traquéia <br><br>
                    <input type="checkbox" name="disp" class="op"> &nbsp; Dispnéia <br><br>
                    <input type="checkbox" name="dorlocal" class="op"> &nbsp; Dor local <br><br>
                    <input type="checkbox" name="edema" class="op"> &nbsp; Edema <br>
                    <div class="opc">
                        <input type="radio" name="general" class="op1"> &nbsp; Generalizado <br>
                        <input type="radio" name="local" class="op1"> &nbsp; Localizado <br><br>
                    </div>
                  
                    <input type="checkbox" name="enfis" class="op"> &nbsp; Enfisema subcutâneo <br><br>
                    <input type="checkbox" name="estase" class="op"> &nbsp; Êstase de jugular <br><br>
                    <input type="checkbox" name="face" class="op"> &nbsp; Face pálida <br><br>
                    <input type="checkbox" name="hemorr" class="op"> &nbsp; Hemorragia <br>
                    <div class="opc">
                        <input type="radio" name="interna" class="op1"> &nbsp; Interna <br>
                        <input type="radio" name="externa" class="op1"> &nbsp; Externa <br><br>
                    </div>
                    
                    <input type="checkbox" name="hiper" class="op"> &nbsp; Hipertensão <br><br>
                    <input type="checkbox" name="hipo" class="op"> &nbsp; Hipotensão <br><br>
                    <input type="checkbox" name="nausea" class="op"> &nbsp; Náuseas e vômitos <br><br>
                    <input type="checkbox" name="nasor" class="op"> &nbsp; Nasoragia <br><br>
                    <input type="checkbox" name="obito" class="op"> &nbsp; Óbito <br><br>
                    <input type="checkbox" name="otorreia" class="op"> &nbsp; Otorréia <br><br>
                    <input type="checkbox" name="otorragia" class="op"> &nbsp; Otorragia <br><br>
                    <input type="checkbox" name="parada" class="op"> &nbsp; Parada <br>
                    <div class="opc">
                        <input type="radio" name="card" class="op"> &nbsp; Cardíaca <br>
                        <input type="radio" name="resp" class="op"> &nbsp; Respiratória <br><br>
                    </div>
                    
                    <input type="checkbox" name="ovace" class="op"> &nbsp; O.V.A.C.E <br><br>
                    <input type="checkbox" name="priap" class="op"> &nbsp; Priaprismo <br><br>
                    <input type="checkbox" name="prurido" class="op"> &nbsp; Prurido na pele <br><br>
                    <input type="checkbox" name="pupilas" class="op"> &nbsp; Pupilas <br>
                        <div class="opc">
                            <input type="radio" name="anisocoria" class="op1"> &nbsp; Anisocoria
                            <input type="radio" name="isocoria" class="op1"> &nbsp; Isocoria <br>
                        </div>
                        <div class="opc">
                            <input type="radio" name="midriase" class="op1"> &nbsp; Midríase
                            <input type="radio" name="miose" class="op1"> &nbsp; Miose
                        </div>
                        <div class="opc">
                            <input type="radio" name="reag" class="op1"> &nbsp; Reagente 
                            <input type="radio" name="nreag" class="op1"> Não reagente <br><br>
                        </div>

                    <input type="checkbox" name="sede" class="op"> &nbsp; Sede <br><br>
                    <input type="checkbox" name="battle" class="op"> &nbsp; Sinal de battle <br><br>
                    <input type="checkbox" name="guax" class="op"> &nbsp; Sinal de guaxinim <br><br>
                    <input type="checkbox" name="sudorese" class="op"> &nbsp; Sudorese <br><br>
                    <input type="checkbox" name="taquip" class="op"> &nbsp; Taquipinéia <br><br>
                    <input type="checkbox" name="taquic" class="op"> &nbsp; Taquicardia <br><br>
                    <input type="checkbox" name="tontura" class="op"> &nbsp; Tontura <br>
                    <input type="checkbox" name="outro" class="op"> &nbsp; Outro:
                    <input type="text" name="outrotext" class="outro"><br><br>
                </div>

                <div class="botao">
                    <button type="submit" class="prox">Próximo</button>
                </div>
            </form>
        </div>

        <br><br>

        </form>
    </div>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Ocorrência - Paciente</title>
    <link rel="stylesheet" href="paciente.css">
</head>

<body>
    <div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>
    
    <div class="quadrado">
        <div class="titulo"><br>
            <h2>Ficha do Paciente </h2>
        </div>
        <br>
        <div class="ficha">
            <form action="" method="post" id="form1">
                <div class="forms">
                    <div class="dados">
                        Nome do Paciente<br>
                        <input name="nome" type="text" id="nome" class="dadoss" /><br><br>
                        CPF<br>
                        <input name="cpf" type="text" id="cpf" class="dadoss" /><br><br>
                        Sexo
                        <div class="opcoes">
                            <div class="op">
                                <input type="radio" name="sexo" value="M"> &nbsp; Masculino
                            </div>
                            <div class="op">
                                <input type="radio" name="sexo" value="F"> &nbsp; Feminino
                            </div><br>
                        </div>
                        Telefone<br>
                        <input name="fone" type="text" id="fone" class="dadoss" /><br><br>
                        Idade<br>
                        <input name="idade" type="number" id="idade" class="dadoss" /><br><br>
                        Nome do Hospital<br>
                        <input name="hospital" type="text" id="hospital" class="dadoss" /><br><br>
                        Nome do Acompanhante<br>
                        <input name="acomp" type="text" id="acomp" class="dadoss" /><br><br>
                        Idade<br>
                        <input name="idade_acomp" type="number" id="idade_acomp" class="dadoss" /><br><br>
                        Local da Ocorrência<br>
                        <input name="local" type="text" id="local" class="dadoss" /><br><br>
                        Data da Ocorrência<br>
                        <input name="data" type="date" id="data" class="dadoss" /><br><br>
                    </div>

                </div>
                <div class="botao">
                    <button type="button" class="prox" onclick="Inserir()">Próximo</button>
                </div>
            </form>
        </div>

    </div>

</body>

<script src="jquery-1.8.2.min.js"></script>

<script>
    function Inserir()
    {
        var dados = $('#form1').serialize(); // TODOS OS CAMPOS DO <form> DEVEM TER 'name='
			
			$.ajax({
				type: "POST",
                url: "inserir.php",
				data: dados,
				dataType: 'json',
				                
                success: function(meu_json)
				{
					alert("Dados inseridos com sucesso!")
                    

				},
				error: function(xhr, status, error) {
					// Aqui poderíamos preencher uma <div> com o innerHTML por exemplo
            		console.error('Ocorreu um erro ao enviar os dados: ' + error);
          		},
				beforeSend: function(xhr) {
					// Faz algo antes do envio, como exibir uma animação por exemplo.
				},
				complete: function(xhr, status) {
					// Faz algo após a conclusão, como ocultar uma animação por exemplo. 
					// Vai ser executado mesmo se ocorrer um erro.
				},
				timeout: 5000    // Define um tempo limite de 5 segundos (5000 milissegundos)
			});  
    }
</script>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
    <link rel="stylesheet" href="../../styles.css">
</head>

<body>
    <div class="container">
        <div class="containerImput">
            <div class="formulario">
                <div class="titulo">
                    <h1>Inserir Operador</h1>
                </div>
                <div>
                    <form action=""  class="styleForm">
                        <label for="nome">Nome </label>
                        <input id="nome" type="text" name="txtNome" placeholder="Nome">
                        
                        <label for="aniversario">Aniversário </label>
                        <input id="aniversario" type="date" name="txtAniversario">
                        
                        <label for="salario">Salário </label>
                        <input id="salario" type="text" name="txtSalario" placeholder="Salário">
                    </form>
                </div>
            </div>

            <div class="botao">
                <button type="submit" class="cancelar">Voltar</button>
                <button type="submit" class="enviar">Enviar</button>
                <button type="submit" class="limpar">Limpar</button>
            </div>

        </div>
    </div>
</body>

</html>
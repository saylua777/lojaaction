<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Produto</title>
    <style>
        body {
            background-color: #333; /* Cor de fundo escura */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #fff; /* Cor do texto */
        }

        h2 {
            color: #fff; /* Cor do texto do título */
            margin-bottom: 20px; /* Espaçamento abaixo do título */
        }

        form {
            background-color: #555; /* Cor de fundo do formulário */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007bff; /* Cor de fundo do botão */
            color: #fff; /* Cor do texto do botão */
            cursor: pointer;
        }

        /* Adicione mais estilos conforme necessário para seus campos e conteúdo */
    </style>
</head>

<body>
    
    <form action="cad_produto.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
        
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao" required>
        
        <label for="lote">Lote: </label>
        <input type="number" name="lote" id="lote" required>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>

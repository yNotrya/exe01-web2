<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Dados Recebidos:</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            echo "<p><strong>Nome:</strong> " . $_POST['nome'] . "</p>";
            echo "<p><strong>Telefone:</strong> " . $_POST['telefone'] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
            echo "<p><strong>Mensagem:</strong> " . $_POST['mensagem'] . "</p>";


            echo "<h2>Cabeçalho da Requisição:</h2>";
            foreach (getallheaders() as $name => $value) {
                echo "<p><strong>$name:</strong> $value</p>";
            }
            echo "<p><strong>Método Utilizado:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
        } else {
            echo "<p>Nenhum dado recebido.</p>";
        }
        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulário de Contato</h2>
        <form action="" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
            <button type="submit" name="submit">Enviar</button>
        </form>
    </div>

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

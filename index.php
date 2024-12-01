<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP Dinâmica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo à minha página PHP!</h1>
    <p>
        <?php
        // Obter a hora atual
        $hora = date("H");

        // Determinar a mensagem com base na hora
        if ($hora < 12) {
            echo "Bom dia! São $hora horas.";
        } elseif ($hora < 18) {
            echo "Boa tarde! São $hora horas.";
        } else {
            echo "Boa noite! São $hora horas.";
        }
        ?>
    </p>
    <footer>
        <p>Desenvolvido com PHP - <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>

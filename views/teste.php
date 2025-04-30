<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home - Meu Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Meu Site</h2>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
        </nav>
    </header>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Meu Site. Todos os direitos reservados.</p>
    </footer>
</body>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 15px;
        }

    </style>
</html>

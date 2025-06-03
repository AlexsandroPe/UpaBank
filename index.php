<?php 
    // require_once "user.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main">
        <div class="logoName">
            <h1>banco etec</h1>
        </div>
        <div class="formulario">
            <form action="registerManager.php" method="post">
                <div class="inputData">
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" id="nome">

                    <label for="Email">E-mail:</label>
                    <input type="email" name="email" id="email">

                    <label for="cpf">CPF:</label>
                    <input type="number" name="cpf" id="number">
                </div>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </main>

    <script src="scripts.js"></script>
</body>
</html>

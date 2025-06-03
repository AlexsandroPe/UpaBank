<?php 
require_once "account.php"; 
require_once "user.php";
    session_start();

    $user = $_SESSION["client"];
    // vou chamar aqui pra ver se da bom laaaaa em baixo eu chamar pq eu preciso passar os valores pra ele ne e ele tem a conta dentro dele
     
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account page</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    
    <main>
        <h1>UpaBank</h1>
        <div class="dados">
            <div class="personalData">
                <h2 style="text-align: center;">Dados pessoais</h2>
                <?php     
              
                echo "<p class='nomeUser'>Nome: {$user->getName()}</p>";
                echo "<p class='nomeUser'>Email: {$user->getEmail()}</p>";
                echo "<p class='nomeUser'>CPF: {$user->getCpf()}</p>";
                // echo "<p class='nomeUser'>number: {$user->getAccount()->getNumber()} </p>";
                ?>
            </div>
            <div class="accountData">
                <h2 style="text-align: center;">Dados da conta</h2>
                <?php 
                
                // require_once "accountManager.php;
            //  $deposit = $_POST["deposit"];
            //  $client->getAccount()->deposit($deposit);
                
                    echo "<p class='nomeUser'>Número conta: {$user->getAccount()->getNumber()}</p>";
                    echo "<p class='nomeUser'>Saldo:{$user->getAccount()->getBalance()}</p>";
                ?>
            </div>
        </div>

        <div >
            <form action="accountManager.php" method="post">
                <label for="deposit">Depósito</label>
                <input type="number" name="deposit" id="deposit">
                <label for="saque">Saque</label>
                <input type="number" name="saque" id="saque">
                <button type="submit" >Sacar</button>
            </form>
           
        </div>
    </main>
</body>
</html>




<?php 
require_once "user.php";
require_once "account.php";
session_start();

        $nome = $_POST["nome"];
        $email= $_POST["email"];
        $cpf = $_POST["cpf"];
        $number = 443;
        $user = new User($nome, $cpf, $email);
        $account = new Account($number);
        $user->setAccount($account);
        $_SESSION["client"] = $user;

        if($_SESSION['client']){
            header('location: accountPage.php');

        }
    
    // echo $_SESSION['client']->getName();
?>

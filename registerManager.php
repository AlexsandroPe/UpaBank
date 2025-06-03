<?php 
require_once "user.php";
require_once "account.php";
session_start();

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];


    
    $number = 443;
    $user = new User($nome, $cpf, $email);
    $account = new Account($number);
    $user->setAccount($account);
    
    $_SESSION["client"] = $user;
    header('location: accountPage.php');


    
    echo $_SESSION['client']->getName();
?>

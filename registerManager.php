<?php 
require_once "user.php";
require_once "account.php";
session_start();




    if(!empty($_POST['nome']) && !empty($_POST['CPF']) && !empty($_POST['email'])){
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        $cpf = $_POST["cpf"];
        $number = 443;
        $user = new User($nome, $cpf, $email);
        $account = new Account($number);
        $user->setAccount($account);
        $_SESSION["client"] = $user;
        header('location: accountPage.php');
    }else {
         if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']){
            header("location: index.php");
        } 
    }


    
    


    
    echo $_SESSION['client']->getName();
?>

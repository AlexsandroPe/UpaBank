<?php 

require_once "account.php";
require_once "user.php";
session_start();
    // require_once "registerManager.php";
    $saque = $_POST['saque'];
    $deposit = $_POST['deposit'];
    $user =  $_SESSION["client"];

    if($saque){
        if($saque <= $user->getAccount()->getBalance()){
            $user->getAccount()->Withdraw($saque);    
            header("location: accountPage.php");
        }else{
            header("location: accountPage.php");
        }
    }else if($deposit){
        if($deposit != 0){
            $user->getAccount()->deposit($deposit);        
            header("location: accountPage.php");
        } 
    }else {
        if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']){
            header("location: accountPage.php");
        }        
        
    }

    // echo $_SESSION['client']->getName();
?>

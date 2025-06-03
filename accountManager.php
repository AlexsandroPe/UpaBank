<?php 

require_once "account.php";
require_once "user.php";
session_start();

    // require_once "registerManager.php";
    $saque = $_POST['saque'];
    $deposit = $_POST['deposit'];
    $user =  $_SESSION['client'];

    if($saque){
        $user->getAccount()->Withdraw($saque);    
        header("location: accountPage.php");
    }else if($deposit){
        $user->getAccount()->deposit($deposit);        
        header("location: accountPage.php");
    }

    echo header("location: accountManager.php");
    // echo $_SESSION['client']->getName();
?>

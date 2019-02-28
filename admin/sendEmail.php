<?php

require_once 'connect.php';


function send_email(){

    if(empty($_POST['email']) || filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location:../index.php?status=invalid email');
        exit();
    }

    if(!isset($_POST['msg']) || !isset($_POST['email'])){
        header('Location:/index.html');
        exit();
    }

    $to = 'ontarioconnectcampaign.com';
    $subject = 'Form Submission';
    $message = 'Message Body:'.$_POST['msg'];
    $headers = 'From: noreply@blakehause.ca'.'/r/n';
    $headers .= 'Reply-To:'.$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        header('Location:../index.php?status=successful'); 
    }
    
    var_dump($_POST);
}

   // send_email();

   $mail = PHPMailer()

    
    
?>
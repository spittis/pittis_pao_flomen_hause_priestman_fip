<?php

require_once 'connect.php';


function send_email(){

    if(empty($_POST['email']) || filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location:../index.html?status=invalid email');
        exit();
    }

    if(!isset($_POST['msg']) || !isset($_POST['email'])){
        header('Location: ../index.html');
        exit();
    }

    $to = 'ontarioconnectcampaign.com';
    $subject = 'Form Submission';
    $message = 'Message Body:'.$_POST['msg'];
    $headers = 'From: noreply@blakehause.ca'.'/r/n';
    $headers .= 'Reply-To:'.$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        header('Location: ../index.html?status=successful');
        
    }

    if(isset($_POST["name"]))
    {
        $name = mysqli_real_escape_string($connect, $_POST["user_name"]);
        $msg = mysqli_real_escape_string($connect, $_POST["user_message"]);
        $sql = "INSERT INTO tbl_contact(user_name, user_message) VALUES ('".$name."', '".$msg."')";
        if(mysqli_query($connect, $sql))
        {
            echo "Message Sent.";
        }
    }
    
    var_dump($_POST);
}



   send_email();

//    $mail = PHPMailer()

    
    
?>
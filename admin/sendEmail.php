<?php

$pdo = include 'connect.php';


function send_email(){
    $email = isset($_POST['email']) ? trim($_POST['email']) : NULL;
    $msg = isset($_POST['msg']) ? trim($_POST['msg']) : NULL;
    $name = isset($_POST['name']) ? trim($_POST['name']) : NULL;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $success = json_encode(false);
        $data = json_encode("invalid email");

        header("Content-type: Application/json");
        echo "{\"success\":$success,\"data\":$data}";
        return;
    }

    if($msg == NULL || !isset($_POST['email'])){
        $success = json_encode(false);
        $data = json_encode("No Data Provided.");

        header("Content-type: Application/json");
        echo "{\"success\":$success,\"data\":$data}";
        return;
    }

    $to = 'ontarioconnectcampaign@gmail.com';
    $subject = 'Form Submission';
    $message = 'Message Body:'.$_POST['msg'];
    $headers = 'From: noreply@blakehause.ca'.'/r/n';
    $headers .= 'Reply-To:'.$_POST['email'];

    if(mail($to, $subject, $message, $headers)){

        // //add to db
        //connect.php is returning a null PDO object for some reason, still debugging.
        // $stmt = $pdo->prepare("INSERT INTO tbl_contact(user_name, user_message, user_email) VALUES (':name', ':msg', ':email')");
        // $stmt->bindParam(":name", $name);
        // $stmt->bindParam(":msg", $msg);
        // $stmt->bindParam(":email", $email);

        // $results = $stmt->execute();

        $success = json_encode(true);
        $data = json_encode("Message has been sent!");

        header("Content-type: Application/json");
        echo "{\"success\":$success,\"data\":$data}";

        return;
    }

    $success = json_encode(false);
    $data = json_encode("Mail not sent.");

    header("Content-type: Application/json");
    echo "{\"success\":$success,\"data\":$data}";

    return;


}



   send_email();

//    $mail = PHPMailer()

    
    
?>
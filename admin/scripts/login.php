<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL | E_STRICT);


    // require_once('config.php');
    include('connect.php');
    // require_once('sessions.php');

    // if(loggedIn())
    //     return true;//change true to admin dashboard
    //      //redirect to('');


    $email = trim(stripcslashes(strip_tags($_POST['email'])));
    $pass = trim(stripcslashes(strip_tags($_POST['password'])));

    try{
        $stmt = $pdo->prepare("SELECT * FROM us01_users where email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        if(empty($results))
            return ajaxRespond(false, "User not found");

        //create passwords using password_hash
        if(!password_verify($pass, $results['pass']))
            return ajaxRespond(false, "Wrong Password");

        if($results['suspended'] == 1)
            return ajaxRespond(false, "This user has been suspended");

        //user valid, log them in
        session_start();
        $_SESSION['user_id'] = $results['ID'];
        $_SESSION['user'] = $results;

        return ajaxRespond(true, "Login Successful", $results);
        
    }catch(Exception $e){
        return ajaxRespond(false, $e->getMessage());
    }//end try/catch

    
?>
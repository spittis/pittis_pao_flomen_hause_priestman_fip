<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--AJAX-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body id="loginPage">
    <script>
        $(function(){
            $("#adminForm").submit(function(e){
                e.preventDefault();
                
                var url = $(this).attr("action");
                var data = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(json){
                        if(!json.success){
                            alert(json.message);
                            console.error(json);
                            return false;
                        }
                        window.location.href = "admin.php";
                    },//end success return
                    error(errorStatus, xhrRequest, responseText){
                        alert(errorStatus);
                        
                        console.error(responseTexts);
                    }//end error
                });//end ajax call


                
            });//end submit handler
        });//end onload
    </script>
    
<div id="loginPage">
<div id="page">
<h1 id="login">Welcome to the Administrative Panel.</h1>
<form id="adminForm" action="scripts/login.php" method="POST">
    <label for="email"></label>
    <input type="text" name="email" placeholder="Email"/>
    <label for="password"></label>
    <br>
    <input type="password" name="password" placeholder="Password"/>
    <button id="loginBtn" type="submit" value="Login">Login</button>
    </form>
</div>
</div>
<img id="loginLogo" src="../images/Logo_Icon.svg">
</body>
</html>

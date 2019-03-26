<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
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
    
<div id="main">
<div id="page">
<h1>WELCOME TO ADMIN PANEL</h1>
<form id="adminForm" action="scripts/login.php" method="POST">
    <label for="email">Email</label>
    <input type="text" name="email"/>
    <label for="password">Password</label>
    <input type="password" name="password"/>
    <input type="submit" value="Log In"/>
    </form>
</div>
</div>
</body>
</html>

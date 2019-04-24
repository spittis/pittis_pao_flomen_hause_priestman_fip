<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--AJAX-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
    <!-- <h1>Hello</h1> -->
    <!-- <h1>Welcome to your admin panel.</h1> -->


<nav role="navigation">
                <div id="menuToggle" class="adminMenu">
        <input id="checkbox" type="checkbox"/>
                
        <span></span>
        <span></span>
        <span></span>
       
    <ul id="menu">
        <div id="nav">
        <a href="editAdmin.php"><li>Edit Admin</li></a>
            <a href="createAdmin.php"><li>Create Admin</li></a>
            <a href="deleteAdmin.php"><li>Delete Admin</li></a>
            <!-- <a href="adminUpdateInfo.php"><li>Update Info</li></a> -->
            <a href="cms.php"><li>Edit Site Content</li></a>
            <a href="scripts/caller.php?caller_id=logout"><li>Sign Out</li></a>
        </div>
    </ul>

    
</div>
</nav>

    <!-- <ul id="menu">
        <div id="nav">
            <a href="editAdmin.php"><li>Edit Admin</li></a>
            <a href="createAdmin.php"><li>Create Admin</li></a>
            <a href="deleteAdmin.php"><li>Delete Admin</li></a>
            <a href="adminUpdateInfo.php"><li>Update Info</li></a> -->
            <!-- <a href="cms.php"><li>Edit Site Content</li></a> -->
            <!-- <a href="scripts/caller.php?caller_id=logout"><li>Sign Out</li></a> -->
            <!-- <a href="admin/index.php"><li>Staff</li></a> -->
            <!-- </ul>
        </div> -->

            <h1 id="adminWelcome">Welcome <?php echo $_SESSION['user']['fname']. " ". $_SESSION['user']['lname'] ?></h1>
            <img id="panelLogo" src="../images/Logo_Icon.svg">
</body>
</html>
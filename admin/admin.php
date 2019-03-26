<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Hello</h1>
    <!-- <h1>Welcome to your admin panel.</h1> -->


    <p>Welcome <?php echo $_SESSION['user']['fname']. " ". $_SESSION['user']['lname'] ?>
    <div id="nav">
            <a href="editAdmin.php"><li>Edit Admin</li></a>
            <a href="createAdmin.php"><li>Create Admin</li></a>
            <a href="deleteAdmin.php"><li>Delete Admin</li></a>
            <a href="cms.php"><li>Edit Site Content</li></a>
            <!-- <a href="admin/index.php"><li>Staff</li></a> -->
        </div>
</body>
</html>
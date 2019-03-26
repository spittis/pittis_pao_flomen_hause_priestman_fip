<?php
	require_once('scripts/config.php');
    confirm_logged_in();

    // $ID,$user,$fname,$lname,$email,$userLevel,$pass
    
    if(isset($_POST['submit'])){
        // $ID = trim($_POST['ID']);
        $user = trim($_POST['user']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $userLevel = trim($_POST['userLevel']);
        $pass = trim($_POST['pass']);

        // validation
        if(empty($email)){
            $message = 'Please fill required fields';
        }else{

            $result = createAdmin($user,$fname,$lname,$email,$userLevel,$pass);

            $message = $result;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <?php if(!empty($message)): ?>
	<p><?php echo $message; ?></p>
	<?php endif;?>
    <!-- $ID,$user,$fname,$lname,$email,$userLevel,$pass -->
	<h2 class="">Create Admin</h2>
    <form class="row small-4" action="createAdmin.php" method="post">
        <label class="columns" for="user">Username</label>
        <input class="columns" type="text" id="user" name="user" value="">
        <label class="columns" for="fname">First Name</label>
        <input class="columns" type="text" id="fname" name="fname" value="">
        <label class="columns" for="lname">Last Name</label>
        <input class="columns" type="text" id="lname" name="lname" value="">
        <label class="columns" for="email">Email</label>
        <input class="columns" type="text" id="email" name="email" value="">
        <label class="columns" for="userLevel">Access Level</label>
        <input class="columns" type="text" id="userLevel" name="userLevel" value="">
        <label class="columns" for="pass">Password</label>
        <input class="columns" type="password" id="pass" name="pass" value="">
        <button class="columns button" type="submit" name="submit">Create Admin</button>
    </form>
</body>
</html>
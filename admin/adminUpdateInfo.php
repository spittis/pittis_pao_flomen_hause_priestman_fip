<?php
	include('scripts/config.php');
	include('scripts/connect.php');
	confirm_logged_in();
    
    $id = $_GET['ID'];    
	$tbl = 'us01_users';
	$col = 'ID';
	
	$get_user_set = getSingle($tbl,$col,$id);

// echo $get_user_set;
	if(is_string($get_user_set)){
		$message = "Failed";
    }
    
    if(isset($_POST['submit'])){
        $user = trim($_POST['user']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $userLevel = trim($_POST['userLevel']);
        $pass = trim($_POST['pass']);
        // <!-- $ID,$user,$fname,$lname,$email,$userLevel,$pass -->

            $result = editAdmin($ID,$user,$fname,$lname,$email,$userLevel,$pass);

            $message = $result;
        
    }
	
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>

    <h2 class="columns subHead small-12 text-center">Edit Admin</h2>

	<?php if(!empty($message)):?>
	<p class="columns"><?php echo $message;?></p>
<?php endif ?>

<?php if($found_user = $get_user_set->fetch(PDO::FETCH_ASSOC)):?>
<form class="row small-4" action="adminUpdateInfo.php?ID=<?php echo $id;?>" method="post">
        <label class="columns" for="user">Username:</label>
        <input class="columns" type="text" id="user" name="user" value="<?php echo $found_admin['user'];?>">

        <label class="columns" for="fname">Firstname:</label>
        <input class="columns" type="text" id="fname" name="fname" value="<?php echo $found_admin['fname'];?>">

        <label class="columns" for="lname">Lastname:</label>
        <input class="columns" type="text" id="lname" name="lname" value="<?php echo $found_admin['lname'];?>">

        <label class="columns" for="email">Email:</label>
        <input class="columns" type="email" id="email" name="email" value="<?php echo $found_admin['email'];?>">

        <label class="columns" for="userLevel">User Access Level:</label>
        <input class="columns" type="text" id="userLevel" name="userLevel" value="<?php echo $found_admin['userLevel'];?>">

        <label class="columns" for="pass">Password:</label>
        <input class="columns" type="password" id="pass" name="pass" value="<?php echo $found_admin['pass'];?>">

        <button class="columns button" type="submit" name="submit">Update Admin</button>
    </form>
<?php endif;?>

</body>
</html>
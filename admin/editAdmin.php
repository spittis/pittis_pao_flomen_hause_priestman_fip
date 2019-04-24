<?php
	require_once('scripts/config.php');
	confirm_logged_in();

	$alluser = getAll("us01_users");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Edit Admin</title>
	<meta name="viewport"	 content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation-float.css">
</head>
<body>
	
	<h2 class="columns subHead small-12 text-center">Edit Administrative Information</h2>

		<table class='text-center'>
			<tr>
				<th>Username</th>
				<th>Firstname</th>
				<th>Lastname</th>
                <th>Email</th>
                <th>User Access</th>
                <th>Password</th>
                 <!-- $ID,$user,$fname,$lname,$email,$userLevel,$pass -->
			</tr>
			<?php while($found_user = $alluser->fetch(PDO::FETCH_ASSOC)):?>			
				<tr>
					<td><?php echo $found_user['user']?></td>
					<td><?php echo $found_user['fname']?></td>				
					<td><?php echo $found_user['lname']?></td>		
                    <td><?php echo $found_user['email']?></td>
                    <td><?php echo $found_user['userLevel']?></td>
                    <td><?php echo $found_user['pass']?></td>
					<td>
                    <a href="scripts/caller.php?caller_id=update&ID=<?php echo $found_user['ID'];?>">Update</a>
					</td>
				</tr>
		<?php endwhile;?>

	</table>

</body>
</html>
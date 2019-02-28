<?php 

function signUp($name, $email, $msg) {
    require_once('connect.php');
    echo "$name, $email, $msg";
    return;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL));

	// check if user's email already exists in database
	$check_email_query = 'SELECT COUNT(*) FROM tbl_contact WHERE user_email = :email';
	$check_email_set = $pdo->prepare($check_email_query);
	$check_email_set->execute(
		array( ':email'=>$email )
	);

	// do something special if the users email already exists in the system
	if($check_email_set->fetchColumn() > 0) {

		// update the users info
		$update_last_query = 'UPDATE tbl_contact SET user_submission = current_timestamp, name = :name, msg = :msg, WHERE email = :email';
		$update_last_set = $pdo->prepare($update_last_query);
		$update_last_set->execute(
			array( 
				':name'=>$name,
				':email'=>$email,
				':msg'=>$msg
			)
        );
        
        $update_last_set->exec("call updateSignUp(':name')")
		return sendEmail($name, $email, true);
	} else {

		// // add them to the mailing list
        // mailchimp($firstname, $lastname, $email);

		// insert user information
		$insert_user_query = "INSERT INTO tbl_contact(firstname, lastname, email, country) VALUES (:firstname, :lastname, :email, :country)";
		$insert_user_set = $pdo->prepare($insert_user_query);
		$insert_user_set->execute(
			array(
				":firstname"=>$firstname,
				":lastname"=>$lastname,
				":email"=>$email,
				":country"=>$country
			)
		);

		if($insert_user_set) {
			return sendEmail($firstname, $email, false);
		} else {
			return 'you have failed!';
		}

	}
}

function sendEmail($name, $email, $returning) {
	if($returning) {
		// WE will send them a custom email, for having left and then returned to our list
		$subject = 'Resubscribed to the Ontario Summer Email List';
		$message = "Welcome back to the Ontario Summer! We're glad to have you back in the loop.";
		$headers = 'From: no-reply@ontariosummers.com';

		mail($email, $subject, $message, $headers);

		return 'Welcome Back to the Ontario Summer!';
	} else {
		// MAILCHIMP will send them a welcome email.
		return 'Welcome to the Ontario Summer!';
	}
}




function mailchimp($firstname, $lastname, $email) {

	// ADD MAILCHIMP API CODE HERE (you'll need to find your own, they'll axe the access if they find it publicly online)
	$authToken = '';
	$list_id = 'eeddad44e9';
 	// The data to send to the API
	$postData = array(
	    "email_address" => $email, 
	    "status" => "subscribed", 
	    "merge_fields" => array(
		    "FNAME"=> $firstname,
		    "LNAME"=> $lastname
		)
	);

	// Setup cURL
	$ch = curl_init('https://us20.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
	curl_setopt_array($ch, array(
	    CURLOPT_POST => TRUE,
	    CURLOPT_RETURNTRANSFER => TRUE,
	    CURLOPT_HTTPHEADER => array(
	        'Authorization: apikey '.$authToken,
	        'Content-Type: application/json'
	    ),
	    CURLOPT_POSTFIELDS => json_encode($postData)
	));
	// Send the request
	$response = curl_exec($ch);
}


?>
